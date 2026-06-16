<?php

use App\Models\StatusOrder;

beforeEach(function () {
    StatusOrder::insert([
        ['id' => 1, 'name' => 'Nová'],
        ['id' => 3, 'name' => 'Čeká na fakturaci'],
    ]);
});

// --- Protected routes ---

test('guest is redirected from dashboard to login', function () {
    $this->get('/dashboard')->assertRedirect(route('login'));
});

test('guest is redirected from profile to login', function () {
    $this->get('/profile')->assertRedirect(route('login'));
});

test('guest is redirected from order list to login', function () {
    $this->get('/pages/documents/orderlist')->assertRedirect(route('login'));
});

// --- Public pages ---

test('guest can access search page', function () {
    $this->get('/search')->assertSuccessful();
});

test('guest can access login page', function () {
    $this->get('/login')->assertSuccessful();
});

test('guest can access registration page', function () {
    $this->get('/register')->assertSuccessful();
});

// --- Guest PayPal routes ---

test('guest gets 403 when accessing another session paypal order via create', function () {
    $order = createTestOrder(['session_id' => 'other-session-xyz']);

    $this->postJson(route('paypal.guest.order.create', $order))
        ->assertForbidden();
});

test('guest gets 403 when accessing another session paypal cancel', function () {
    $order = createTestOrder(['session_id' => 'other-session-xyz']);

    $this->get(route('paypal.guest.order.cancel', $order))
        ->assertForbidden();
});

test('guest gets 403 when accessing another session paypal success', function () {
    $order = createTestOrder(['session_id' => 'other-session-xyz']);

    $this->get(route('paypal.guest.order.success', $order))
        ->assertForbidden();
});

test('guest can cancel their own order via guest route', function () {
    $cookieName = config('session.cookie', 'laravel_session');
    $this->get('/login');
    $sessionId = session()->getId();

    $order = createTestOrder([
        'session_id' => $sessionId,
        'payment_status' => 'pending',
    ]);

    $this->withCookies([$cookieName => $sessionId])
        ->get(route('paypal.guest.order.cancel', $order))
        ->assertRedirect();

    expect($order->fresh()->payment_status)->toBe('unpaid');
});
