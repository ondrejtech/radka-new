<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\PayPalService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class PayPalController extends Controller
{
    public function __construct(private readonly PayPalService $payPalService) {}

    /**
     * Create PayPal order and redirect to PayPal approval page.
     */
    public function createOrder(Request $request, Order $order): RedirectResponse
    {
        $this->authorizeOrder($request, $order);

        if ($order->payment_status === 'paid') {
            return redirect()->route('pages.documents.order', ['orderId' => $order->id])
                ->with('error', 'Tato objednávka je již zaplacena.');
        }

        $isGuest = ! auth()->check();

        if ($isGuest) {
            $returnUrl = URL::signedRoute('paypal.guest.order.success', ['order' => $order->id]);
            $cancelUrl = URL::signedRoute('paypal.guest.order.cancel', ['order' => $order->id]);
        } else {
            $returnUrl = route('paypal.order.success', ['order' => $order->id]);
            $cancelUrl = route('paypal.order.cancel', ['order' => $order->id]);
        }

        try {
            $approvalUrl = $this->payPalService->createOrder($order, $returnUrl, $cancelUrl);
        } catch (\RuntimeException $e) {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->away($approvalUrl);
    }

    /**
     * Handle successful PayPal payment return.
     */
    public function success(Request $request, Order $order): RedirectResponse
    {
        $this->authorizeOrder($request, $order);

        $captured = $this->payPalService->captureOrder($order);

        if (! $captured) {
            return redirect()->route('pages.documents.order', ['orderId' => $order->id])
                ->with('error', 'Platba se nezdařila. Zkuste to prosím znovu.');
        }

        return redirect()->route('pages.documents.order', ['orderId' => $order->id])
            ->with('success', 'Platba proběhla úspěšně.');
    }

    /**
     * Handle cancelled PayPal payment.
     */
    public function cancel(Request $request, Order $order): RedirectResponse
    {
        $this->authorizeOrder($request, $order);

        $order->update(['payment_status' => 'unpaid']);

        return redirect()->route('pages.documents.order', ['orderId' => $order->id])
            ->with('error', 'Platba byla zrušena.');
    }

    /**
     * Handle incoming PayPal webhooks.
     */
    public function webhook(Request $request): Response
    {
        $headers = array_change_key_case($request->headers->all(), CASE_LOWER);
        $payload = $request->all();

        if (! $this->payPalService->verifyWebhook($headers, $payload)) {
            Log::warning('PayPal webhook verification failed', ['payload' => $payload]);

            return response('Unauthorized', 401);
        }

        $eventType = $payload['event_type'] ?? '';
        $resourceId = $payload['resource']['supplementary_data']['related_ids']['order_id']
            ?? $payload['resource']['id']
            ?? null;

        Log::info('PayPal webhook received', ['event' => $eventType, 'resource_id' => $resourceId]);

        match ($eventType) {
            'PAYMENT.CAPTURE.COMPLETED' => $this->handleCaptureCompleted($payload),
            'PAYMENT.CAPTURE.REFUNDED' => $this->handleCaptureRefunded($payload),
            default => null,
        };

        return response('OK', 200);
    }

    /**
     * Ensure the current user/session is allowed to access this order.
     */
    private function authorizeOrder(Request $request, Order $order): void
    {
        if (auth()->check()) {
            abort_if($order->user_id !== auth()->id(), 403);
        } else {
            abort_if($order->session_id !== session()->getId(), 403);
        }
    }

    private function handleCaptureCompleted(array $payload): void
    {
        $captureId = $payload['resource']['id'] ?? null;

        if (! $captureId) {
            return;
        }

        $order = Order::where('paypal_capture_id', $captureId)
            ->orWhere('paypal_order_id', $payload['resource']['supplementary_data']['related_ids']['order_id'] ?? '')
            ->first();

        $order?->update([
            'payment_status' => 'paid',
            'paypal_capture_id' => $captureId,
            'status_order_id' => 3,
        ]);
    }

    private function handleCaptureRefunded(array $payload): void
    {
        $captureId = $payload['resource']['id'] ?? null;

        if (! $captureId) {
            return;
        }

        Order::where('paypal_capture_id', $captureId)
            ->first()
            ?->update(['payment_status' => 'refunded']);
    }
}
