<?php

namespace App\Services;

use App\Models\Order;
use Blendbyte\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\Log;

class PayPalService
{
    private ?PayPalClient $client = null;

    /** Transient PayPal error names that are safe to retry. */
    private const RETRYABLE_ERRORS = ['AUTHENTICATION_FAILURE', 'INTERNAL_SERVER_ERROR', 'SERVICE_UNAVAILABLE'];

    private function client(): PayPalClient
    {
        if ($this->client === null) {
            $this->client = new PayPalClient;
            $this->client->getAccessToken();
        }

        return $this->client;
    }

    private function isRetryable(array $response): bool
    {
        $name = $response['error']['name'] ?? $response['name'] ?? '';

        return in_array($name, self::RETRYABLE_ERRORS, strict: true);
    }

    /**
     * Create a PayPal order and return the approval URL.
     */
    public function createOrder(Order $order, string $returnUrl, string $cancelUrl): string
    {
        $response = retry(3, function () use ($order, $returnUrl, $cancelUrl) {
            $response = $this->client()->createOrder([
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    [
                        'reference_id' => (string) $order->id,
                        'description' => 'Objednávka č. '.$order->id,
                        'amount' => [
                            'currency_code' => 'CZK',
                            'value' => number_format((float) $order->total_with_vat, 2, '.', ''),
                        ],
                    ],
                ],
                'application_context' => [
                    'return_url' => $returnUrl,
                    'cancel_url' => $cancelUrl,
                    'brand_name' => config('app.name'),
                    'locale' => 'cs-CZ',
                    'landing_page' => 'BILLING',
                    'user_action' => 'PAY_NOW',
                ],
            ]);

            if ($this->isRetryable($response)) {
                throw new \RuntimeException($response['error']['name'] ?? $response['name'] ?? 'TRANSIENT_ERROR');
            }

            return $response;
        }, 300, function (\Throwable $e) use ($order) {
            Log::warning('PayPal createOrder retry', ['error' => $e->getMessage(), 'order_id' => $order->id]);
            $this->client = null;

            return true;
        });

        if (empty($response['id'])) {
            Log::error('PayPal createOrder failed', ['response' => $response, 'order_id' => $order->id]);
            throw new \RuntimeException('Nepodařilo se vytvořit PayPal objednávku.');
        }

        $order->update([
            'paypal_order_id' => $response['id'],
            'payment_status' => 'pending',
        ]);

        $approvalUrl = collect($response['links'])
            ->firstWhere('rel', 'approve')['href'] ?? null;

        if (! $approvalUrl) {
            throw new \RuntimeException('PayPal nevrátil odkaz pro schválení platby.');
        }

        return $approvalUrl;
    }

    /**
     * Capture payment after customer approval.
     *
     * Returns true on success, a redirect URL string when instrument is declined
     * (user should be sent back to PayPal to retry), or false on hard failure.
     */
    public function captureOrder(Order $order): bool|string
    {
        if (! $order->paypal_order_id) {
            return false;
        }

        $response = retry(3, function () use ($order) {
            $response = $this->client()->capturePaymentOrder($order->paypal_order_id);

            if ($this->isRetryable($response)) {
                throw new \RuntimeException($response['error']['name'] ?? $response['name'] ?? 'TRANSIENT_ERROR');
            }

            return $response;
        }, 300, function (\Throwable $e) use ($order) {
            Log::warning('PayPal captureOrder retry', ['error' => $e->getMessage(), 'order_id' => $order->id]);
            $this->client = null;

            return true;
        });

        if (($response['status'] ?? '') !== 'COMPLETED') {
            $issue = $response['error']['details'][0]['issue'] ?? $response['details'][0]['issue'] ?? '';

            // INSTRUMENT_DECLINED: redirect user back to PayPal to try a different payment method
            if ($issue === 'INSTRUMENT_DECLINED') {
                $retryUrl = collect($response['error']['links'] ?? $response['links'] ?? [])
                    ->firstWhere('rel', 'redirect')['href'] ?? null;

                if ($retryUrl) {
                    Log::warning('PayPal instrument declined, redirecting to retry', ['order_id' => $order->id]);

                    return $retryUrl;
                }
            }

            Log::error('PayPal capture failed', ['response' => $response, 'order_id' => $order->id]);
            $order->update(['payment_status' => 'failed']);

            return false;
        }

        $captureId = $response['purchase_units'][0]['payments']['captures'][0]['id'] ?? null;

        $order->update([
            'paypal_capture_id' => $captureId,
            'payment_status' => 'paid',
            'status_order_id' => 3, // Čeká na fakturaci
        ]);

        return true;
    }

    /**
     * Verify incoming webhook signature.
     */
    public function verifyWebhook(array $headers, array $payload): bool
    {
        $result = $this->client()->verifyWebHook([
            'auth_algo' => $headers['paypal-auth-algo'] ?? '',
            'cert_url' => $headers['paypal-cert-url'] ?? '',
            'transmission_id' => $headers['paypal-transmission-id'] ?? '',
            'transmission_sig' => $headers['paypal-transmission-sig'] ?? '',
            'transmission_time' => $headers['paypal-transmission-time'] ?? '',
            'webhook_id' => config('paypal.webhook_id'),
            'webhook_event' => $payload,
        ]);

        return ($result['verification_status'] ?? '') === 'SUCCESS';
    }
}
