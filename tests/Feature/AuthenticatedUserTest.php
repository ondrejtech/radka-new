<?php

use App\Models\StatusOrder;
use App\Models\User;

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
