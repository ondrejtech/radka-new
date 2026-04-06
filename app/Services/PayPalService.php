<?php

namespace App\Services;

use App\Models\Order;
use Blendbyte\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\Log;

class PayPalService
{
    private PayPalClient $client;

    public function __construct()
    {
        $this->client = new PayPalClient;
        $this->client->getAccessToken();
    }

    /**
     * Create a PayPal order and return the approval URL.
     */
    public function createOrder(Order $order, string $returnUrl, string $cancelUrl): string
    {
        $response = $this->client->createOrder([
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
     */
    public function captureOrder(Order $order): bool
    {
        if (! $order->paypal_order_id) {
            return false;
        }

        $response = $this->client->capturePaymentOrder($order->paypal_order_id);

        if (($response['status'] ?? '') !== 'COMPLETED') {
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
        $result = $this->client->verifyWebHook([
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
