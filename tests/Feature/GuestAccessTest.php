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
