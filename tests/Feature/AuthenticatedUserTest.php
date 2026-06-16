<?php

use App\Models\StatusOrder;
use App\Models\User;
use App\Services\InvoiceService;
use App\Services\PayPalService;

beforeEach(function () {
    StatusOrder::insert([
        ['id' => 1, 'name' => 'Nová'],
        ['id' => 3, 'name' => 'Čeká na fakturaci'],
    ]);
});

// --- Page access ---

test('authenticated user can access dashboard', function () {
    $this->actingAs(User::factory()->create())
        ->get('/dashboard')
        ->assertSuccessful();
});

test('authenticated user can access profile', function () {
    $this->actingAs(User::factory()->create())
        ->get('/profile')
        ->assertSuccessful();
});

test('authenticated user can access order list', function () {
    $this->actingAs(User::factory()->create())
        ->get('/pages/documents/orderlist')
        ->assertSuccessful();
});

// --- PayPal authorization ---

test('authenticated user gets 403 accessing another users paypal order', function () {
    $owner = User::factory()->create();
    $other = User::factory()->create();

    $order = createTestOrder(['user_id' => $owner->id, 'session_id' => null]);

    $this->actingAs($other)
        ->postJson(route('paypal.order.create', $order))
        ->assertForbidden();
});

test('authenticated user gets 422 for already paid order', function () {
    $user = User::factory()->create();
    $order = createTestOrder(['user_id' => $user->id, 'session_id' => null, 'payment_status' => 'paid']);

    $this->actingAs($user)
        ->postJson(route('paypal.order.create', $order))
        ->assertUnprocessable();
});

// --- PayPal create order ---

test('authenticated user can create paypal order', function () {
    $user = User::factory()->create();
    $order = createTestOrder(['user_id' => $user->id, 'session_id' => null]);

    $this->mock(PayPalService::class)
        ->shouldReceive('createOrder')
        ->once()
        ->andReturn('https://sandbox.paypal.com/checkoutnow?token=TESTTOKEN');

    $this->actingAs($user)
        ->postJson(route('paypal.order.create', $order))
        ->assertOk()
        ->assertJsonStructure(['url'])
        ->assertJsonPath('url', 'https://sandbox.paypal.com/checkoutnow?token=TESTTOKEN');
});

test('paypal create order returns 500 when service throws', function () {
    $user = User::factory()->create();
    $order = createTestOrder(['user_id' => $user->id, 'session_id' => null]);

    $this->mock(PayPalService::class)
        ->shouldReceive('createOrder')
        ->once()
        ->andThrow(new RuntimeException('Nepodařilo se vytvořit PayPal objednávku.'));

    $this->actingAs($user)
        ->postJson(route('paypal.order.create', $order))
        ->assertStatus(500)
        ->assertJsonPath('error', 'Nepodařilo se vytvořit PayPal objednávku.');
});

// --- PayPal cancel ---

test('authenticated user can cancel paypal order', function () {
    $user = User::factory()->create();
    $order = createTestOrder(['user_id' => $user->id, 'session_id' => null, 'payment_status' => 'pending']);

    $this->actingAs($user)
        ->get(route('paypal.order.cancel', $order))
        ->assertRedirect();

    expect($order->fresh()->payment_status)->toBe('unpaid');
});

// --- PayPal success ---

test('paypal success redirects to order with error when capture fails', function () {
    $user = User::factory()->create();
    $order = createTestOrder(['user_id' => $user->id, 'session_id' => null]);

    $this->mock(PayPalService::class)
        ->shouldReceive('captureOrder')
        ->once()
        ->andReturn(false);

    $this->actingAs($user)
        ->get(route('paypal.order.success', $order))
        ->assertRedirect()
        ->assertSessionHas('error');
});

test('paypal success creates invoice and redirects when capture succeeds', function () {
    $user = User::factory()->create();
    $order = createTestOrder(['user_id' => $user->id, 'session_id' => null]);

    $this->mock(PayPalService::class)
        ->shouldReceive('captureOrder')
        ->once()
        ->andReturn(true);

    $this->mock(InvoiceService::class)
        ->shouldReceive('createFromOrder')
        ->once();

    $this->actingAs($user)
        ->get(route('paypal.order.success', $order))
        ->assertRedirect()
        ->assertSessionHas('success');
});
