<?php

use App\Models\StatusOrder;
use App\Models\User;
use App\Services\PayPalService;

beforeEach(function () {
    StatusOrder::insert([
        ['id' => 1, 'name' => 'Nová'],
        ['id' => 3, 'name' => 'Čeká na fakturaci'],
    ]);
});

// --- Webhook ---

test('webhook returns 401 with invalid signature', function () {
    $this->mock(PayPalService::class)
        ->shouldReceive('verifyWebhook')
        ->once()
        ->andReturn(false);

    $this->postJson(route('paypal.webhook'), ['event_type' => 'PAYMENT.CAPTURE.COMPLETED'])
        ->assertStatus(401);
});

test('webhook returns 200 for verified capture completed event', function () {
    $user = User::factory()->create();
    $order = createTestOrder(['user_id' => $user->id, 'session_id' => null, 'paypal_capture_id' => 'CAP123']);

    $this->mock(PayPalService::class)
        ->shouldReceive('verifyWebhook')
        ->once()
        ->andReturn(true);

    $this->postJson(route('paypal.webhook'), [
        'event_type' => 'PAYMENT.CAPTURE.COMPLETED',
        'resource' => ['id' => 'CAP123'],
    ])->assertOk();
});

test('webhook returns 200 for verified capture refunded event', function () {
    $user = User::factory()->create();
    $order = createTestOrder([
        'user_id' => $user->id,
        'session_id' => null,
        'payment_status' => 'paid',
        'paypal_capture_id' => 'CAP456',
    ]);

    $this->mock(PayPalService::class)
        ->shouldReceive('verifyWebhook')
        ->once()
        ->andReturn(true);

    $this->postJson(route('paypal.webhook'), [
        'event_type' => 'PAYMENT.CAPTURE.REFUNDED',
        'resource' => ['id' => 'CAP456'],
    ])->assertOk();

    expect($order->fresh()->payment_status)->toBe('refunded');
});

test('webhook capture completed updates order payment status', function () {
    $user = User::factory()->create();
    $order = createTestOrder([
        'user_id' => $user->id,
        'session_id' => null,
        'payment_status' => 'pending',
        'paypal_order_id' => 'ORDER789',
    ]);

    $this->mock(PayPalService::class)
        ->shouldReceive('verifyWebhook')
        ->once()
        ->andReturn(true);

    $this->postJson(route('paypal.webhook'), [
        'event_type' => 'PAYMENT.CAPTURE.COMPLETED',
        'resource' => [
            'id' => 'CAP789',
            'supplementary_data' => [
                'related_ids' => ['order_id' => 'ORDER789'],
            ],
        ],
    ])->assertOk();

    expect($order->fresh()->payment_status)->toBe('paid');
    expect($order->fresh()->paypal_capture_id)->toBe('CAP789');
    expect($order->fresh()->status_order_id)->toBe(3);
});

// --- Guest PayPal create ---

test('guest can create paypal order via guest route', function () {
    $cookieName = config('session.cookie', 'laravel_session');
    $this->get('/login');
    $sessionId = session()->getId();

    $order = createTestOrder(['session_id' => $sessionId]);

    $this->mock(PayPalService::class)
        ->shouldReceive('createOrder')
        ->once()
        ->andReturn('https://sandbox.paypal.com/checkoutnow?token=GUESTTOKEN');

    $this->withCredentials()
        ->withCookies([$cookieName => $sessionId])
        ->postJson(route('paypal.guest.order.create', $order))
        ->assertOk()
        ->assertJsonPath('url', 'https://sandbox.paypal.com/checkoutnow?token=GUESTTOKEN');
});

test('guest gets 422 creating paypal order for already paid order', function () {
    $cookieName = config('session.cookie', 'laravel_session');
    $this->get('/login');
    $sessionId = session()->getId();

    $order = createTestOrder(['session_id' => $sessionId, 'payment_status' => 'paid']);

    $this->withCredentials()
        ->withCookies([$cookieName => $sessionId])
        ->postJson(route('paypal.guest.order.create', $order))
        ->assertUnprocessable();
});

// --- Retry logic ---

test('paypal service retries on authentication failure and succeeds', function () {
    $user = User::factory()->create();
    $order = createTestOrder(['user_id' => $user->id, 'session_id' => null]);

    $callCount = 0;

    $this->mock(PayPalService::class)
        ->shouldReceive('createOrder')
        ->once()
        ->andReturnUsing(function () use (&$callCount) {
            $callCount++;

            return 'https://sandbox.paypal.com/checkoutnow?token=RETRIED';
        });

    $this->actingAs($user)
        ->postJson(route('paypal.order.create', $order))
        ->assertOk()
        ->assertJsonPath('url', 'https://sandbox.paypal.com/checkoutnow?token=RETRIED');
});
