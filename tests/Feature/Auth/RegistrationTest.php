<?php

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
    $response = $this->post('/register', [
        'first_name' => 'Test',
        'last_name' => 'User',
        'email' => 'test@example.com',
        'phone' => '+420123456789',
        'company_name' => 'Test s.r.o.',
        'company_ic' => '12345678',
        'company_dic' => null,
        'street' => 'Testovací 1',
        'city' => 'Praha',
        'zip' => '11000',
        'country' => 'Česká republika',
        'note' => null,
        'password' => 'Password1!',
        'password_confirmation' => 'Password1!',
        'terms_accepted' => '1',
    ]);

    $response->assertRedirect(route('login'));
});
