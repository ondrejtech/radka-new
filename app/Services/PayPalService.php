<?php

namespace App\Services;

use App\Models\Order;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use PaypalServerSdkLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use PaypalServerSdkLib\Controllers\OrdersController;
use PaypalServerSdkLib\Environment;
use PaypalServerSdkLib\Exceptions\ErrorException;
use PaypalServerSdkLib\PaypalServerSdkClient;
use PaypalServerSdkLib\PaypalServerSdkClientBuilder;

class PayPalService
{
    private ?PaypalServerSdkClient $client = null;

    /** Transient PayPal error names that are safe to retry. */
    private const RETRYABLE_ERRORS = ['AUTHENTICATION_FAILURE', 'INTERNAL_SERVER_ERROR', 'SERVICE_UNAVAILABLE'];

    /**
     * Resolve the active credentials based on the configured mode.
     *
     * @return array{mode: string, client_id: string, client_secret: string}
     */
    private function credentials(): array
    {
        $mode = config('paypal.mode') === 'live' ? 'live' : 'sandbox';

        return [
            'mode' => $mode,
            'client_id' => (string) config("paypal.{$mode}.client_id"),
            'client_secret' => (string) config("paypal.{$mode}.client_secret"),
        ];
    }

    /**
     * Public (client-side safe) PayPal client ID for the JS SDK.
     */
    public function publicClientId(): string
    {
        return $this->credentials()['client_id'];
    }

    private function client(): PaypalServerSdkClient
    {
        if ($this->client === null) {
            $credentials = $this->credentials();

            $this->client = PaypalServerSdkClientBuilder::init()
                ->clientCredentialsAuthCredentials(
                    ClientCredentialsAuthCredentialsBuilder::init(
                        $credentials['client_id'],
                        $credentials['client_secret'],
                    )
                )
                ->environment($credentials['mode'] === 'live' ? Environment::PRODUCTION : Environment::SANDBOX)
                ->build();
        }

        return $this->client;
    }

    private function orders(): OrdersController
    {
        return $this->client()->getOrdersController();
    }

    /**
     * Throw a transient RuntimeException when the PayPal error is retryable.
     */
    private function rethrowIfRetryable(ErrorException $e): void
    {
        if (in_array($e->getName(), self::RETRYABLE_ERRORS, strict: true)) {
            throw new \RuntimeException($e->getName(), previous: $e);
        }
    }

    /**
     * Retry decision: only retry our transient RuntimeException marker.
     */
    private function shouldRetry(\Throwable $e, string $operation, Order $order): bool
    {
        if (! $e instanceof \RuntimeException) {
            return false;
        }

        Log::warning("PayPal {$operation} retry", ['error' => $e->getMessage(), 'order_id' => $order->id]);
        $this->client = null;

        return true;
    }

    /**
     * Create a PayPal order.
     *
     * When $returnUrl/$cancelUrl are provided, an application_context is added for
     * the redirect (PayPal Checkout) flow and the approval URL is returned.
     * Omitting them yields a bare order suitable for the card-fields flow.
     *
     * @return array{id: string, approval_url: ?string}
     */
    public function createOrder(Order $order, ?string $returnUrl = null, ?string $cancelUrl = null): array
    {
        $payload = [
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    'reference_id' => (string) $order->id,
                    'description' => 'Objednávka č. '.$order->id,
                    'amount' => [
                        'currency_code' => config('paypal.currency'),
                        'value' => number_format((float) $order->total_with_vat, 2, '.', ''),
                    ],
                ],
            ],
        ];

        if ($returnUrl !== null && $cancelUrl !== null) {
            $payload['application_context'] = [
                'return_url' => $returnUrl,
                'cancel_url' => $cancelUrl,
                'brand_name' => config('app.name'),
                'locale' => 'cs-CZ',
                'landing_page' => 'BILLING',
                'user_action' => 'PAY_NOW',
            ];
        }

        try {
            $body = retry(3, function () use ($payload) {
                try {
                    $response = $this->orders()->createOrder([
                        'body' => $payload,
                        'prefer' => 'return=representation',
                    ]);
                } catch (ErrorException $e) {
                    $this->rethrowIfRetryable($e);
                    throw $e;
                }

                return json_decode($response->getBody(), true) ?? [];
            }, 300, fn (\Throwable $e) => $this->shouldRetry($e, 'createOrder', $order));
        } catch (\Throwable $e) {
            Log::error('PayPal createOrder failed', ['error' => $e->getMessage(), 'order_id' => $order->id]);
            throw new \RuntimeException('Nepodařilo se vytvořit PayPal objednávku.');
        }

        if (empty($body['id'])) {
            Log::error('PayPal createOrder returned no id', ['response' => $body, 'order_id' => $order->id]);
            throw new \RuntimeException('Nepodařilo se vytvořit PayPal objednávku.');
        }

        $order->update([
            'paypal_order_id' => $body['id'],
            'payment_status' => 'pending',
        ]);

        $approvalUrl = collect($body['links'] ?? [])
            ->firstWhere('rel', 'approve')['href'] ?? null;

        return ['id' => $body['id'], 'approval_url' => $approvalUrl];
    }

    /**
     * Capture payment for a previously created order.
     *
     * Returns true on success, a redirect URL string when the instrument is declined
     * (redirect flow — user retries on PayPal), or false on hard failure.
     */
    public function captureOrder(Order $order): bool|string
    {
        if (! $order->paypal_order_id) {
            return false;
        }

        try {
            $body = retry(3, function () use ($order) {
                try {
                    $response = $this->orders()->captureOrder([
                        'id' => $order->paypal_order_id,
                        'prefer' => 'return=representation',
                    ]);
                } catch (ErrorException $e) {
                    $this->rethrowIfRetryable($e);
                    throw $e;
                }

                return json_decode($response->getBody(), true) ?? [];
            }, 300, fn (\Throwable $e) => $this->shouldRetry($e, 'captureOrder', $order));
        } catch (ErrorException $e) {
            $issue = $e->getDetails()[0]?->getIssue() ?? '';

            // INSTRUMENT_DECLINED: redirect user back to PayPal to try a different payment method
            if ($issue === 'INSTRUMENT_DECLINED') {
                $retryUrl = collect($e->getLinks() ?? [])
                    ->first(fn ($link) => $link->getRel() === 'redirect')?->getHref();

                if ($retryUrl) {
                    Log::warning('PayPal instrument declined, redirecting to retry', ['order_id' => $order->id]);

                    return $retryUrl;
                }
            }

            Log::error('PayPal capture failed', ['name' => $e->getName(), 'issue' => $issue, 'order_id' => $order->id]);
            $order->update(['payment_status' => 'failed']);

            return false;
        } catch (\Throwable $e) {
            Log::error('PayPal capture failed', ['error' => $e->getMessage(), 'order_id' => $order->id]);
            $order->update(['payment_status' => 'failed']);

            return false;
        }

        if (($body['status'] ?? '') !== 'COMPLETED') {
            Log::error('PayPal capture not completed', ['response' => $body, 'order_id' => $order->id]);
            $order->update(['payment_status' => 'failed']);

            return false;
        }

        $captureId = $body['purchase_units'][0]['payments']['captures'][0]['id'] ?? null;

        $order->update([
            'paypal_capture_id' => $captureId,
            'payment_status' => 'paid',
            'status_order_id' => 3, // Čeká na fakturaci
        ]);

        return true;
    }

    /**
     * Verify an incoming webhook signature via PayPal's REST API.
     *
     * The official SDK does not expose webhook verification, so this calls
     * /v1/notifications/verify-webhook-signature directly.
     *
     * @param  array<string, mixed>  $headers
     * @param  array<string, mixed>  $payload
     */
    public function verifyWebhook(array $headers, array $payload): bool
    {
        $token = $this->accessToken();

        if ($token === null) {
            Log::error('PayPal webhook verification: failed to obtain access token');

            return false;
        }

        $response = Http::withToken($token)
            ->acceptJson()
            ->post($this->apiBaseUrl().'/v1/notifications/verify-webhook-signature', [
                'auth_algo' => $headers['paypal-auth-algo'] ?? '',
                'cert_url' => $headers['paypal-cert-url'] ?? '',
                'transmission_id' => $headers['paypal-transmission-id'] ?? '',
                'transmission_sig' => $headers['paypal-transmission-sig'] ?? '',
                'transmission_time' => $headers['paypal-transmission-time'] ?? '',
                'webhook_id' => config('paypal.webhook_id'),
                'webhook_event' => $payload,
            ]);

        return $response->json('verification_status') === 'SUCCESS';
    }

    /**
     * Fetch an OAuth2 access token via the client_credentials grant.
     */
    private function accessToken(): ?string
    {
        $credentials = $this->credentials();

        $response = Http::asForm()
            ->withBasicAuth($credentials['client_id'], $credentials['client_secret'])
            ->post($this->apiBaseUrl().'/v1/oauth2/token', [
                'grant_type' => 'client_credentials',
            ]);

        return $response->json('access_token');
    }

    private function apiBaseUrl(): string
    {
        return $this->credentials()['mode'] === 'live'
            ? 'https://api-m.paypal.com'
            : 'https://api-m.sandbox.paypal.com';
    }
}
