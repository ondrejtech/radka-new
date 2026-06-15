<?php

use App\Models\Order;
use App\Models\StatusOrder;
use App\Models\User;
use App\Services\PayPalService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    config([
        'paypal.mode' => 'sandbox',
        'paypal.sandbox.client_id' => env('PAYPAL_SANDBOX_CLIENT_ID'),
        'paypal.sandbox.client_secret' => env('PAYPAL_SANDBOX_CLIENT_SECRET'),
    ]);

    StatusOrder::insert([
        ['id' => 1, 'name' => 'Nová'],
        ['id' => 3, 'name' => 'Čeká na fakturaci'],
    ]);
});

test('paypal sandbox createOrder returns approval url', function () {
    $user = User::factory()->create();

    $order = Order::create([
        'user_id' => $user->id,
        'session_id' => null,
        'status_order_id' => 1,
        'is_open' => false,
        'ship_name' => 'Test User',
        'ship_street' => 'Testovací 1',
        'ship_city' => 'Praha',
        'ship_zip' => '11000',
        'ship_country' => 'Česká republika',
        'ship_phone' => '+420123456789',
        'ship_email' => 'test@example.com',
        'total_without_vat' => 100.00,
        'total_with_vat' => 121.00,
        'payment_status' => 'unpaid',
    ]);

    $service = new PayPalService;

    $approvalUrl = $service->createOrder(
        $order,
        'https://example.com/paypal/success',
        'https://example.com/paypal/cancel',
    );

    expect($approvalUrl)
        ->toBeString()
        ->toContain('sandbox.paypal.com');

    $order->refresh();
    expect($order->paypal_order_id)->not->toBeNull();
    expect($order->payment_status)->toBe('pending');
})->group('paypal-sandbox');

test('paypal captureOrder returns false when order has no paypal_order_id', function () {
    $user = User::factory()->create();

    $order = Order::create([
        'user_id' => $user->id,
        'session_id' => null,
        'status_order_id' => 1,
        'is_open' => false,
        'ship_name' => 'Test User',
        'ship_street' => 'Testovací 1',
        'ship_city' => 'Praha',
        'ship_zip' => '11000',
        'ship_country' => 'Česká republika',
        'ship_phone' => '+420123456789',
        'ship_email' => 'test@example.com',
        'total_without_vat' => 100.00,
        'total_with_vat' => 121.00,
        'payment_status' => 'unpaid',
        'paypal_order_id' => null,
    ]);

    $service = new PayPalService;

    expect($service->captureOrder($order))->toBeFalse();
})->group('paypal-sandbox');

test('paypal webhook verification fails with empty headers', function () {
    $service = new PayPalService;

    expect($service->verifyWebhook([], []))->toBeFalse();
})->group('paypal-sandbox');

test('paypal createOrder http endpoint requires authentication', function () {
    $order = Order::create([
        'user_id' => null,
        'session_id' => 'test-session-abc',
        'status_order_id' => 1,
        'is_open' => false,
        'ship_name' => 'Test User',
        'ship_street' => 'Testovací 1',
        'ship_city' => 'Praha',
        'ship_zip' => '11000',
        'ship_country' => 'Česká republika',
        'ship_phone' => '+420123456789',
        'ship_email' => 'test@example.com',
        'total_without_vat' => 100.00,
        'total_with_vat' => 121.00,
        'payment_status' => 'unpaid',
    ]);

    $this->postJson("/paypal/order/{$order->id}/create")
        ->assertStatus(401);
})->group('paypal-sandbox');

test('paypal createOrder http endpoint returns 422 for already paid order', function () {
    $user = User::factory()->create();

    $order = Order::create([
        'user_id' => $user->id,
        'session_id' => null,
        'status_order_id' => 3,
        'is_open' => false,
        'ship_name' => 'Test User',
        'ship_street' => 'Testovací 1',
        'ship_city' => 'Praha',
        'ship_zip' => '11000',
        'ship_country' => 'Česká republika',
        'ship_phone' => '+420123456789',
        'ship_email' => 'test@example.com',
        'total_without_vat' => 100.00,
        'total_with_vat' => 121.00,
        'payment_status' => 'paid',
    ]);

    $this->actingAs($user)
        ->postJson("/paypal/order/{$order->id}/create")
        ->assertStatus(422);
})->group('paypal-sandbox');
