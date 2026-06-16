<?php

use App\Models\User;

test('registration fails when first name is missing', function () {
    $this->post('/register', validRegistrationPayload(['first_name' => '']))
        ->assertSessionHasErrors('first_name');
});

test('registration fails when last name is missing', function () {
    $this->post('/register', validRegistrationPayload(['last_name' => '']))
        ->assertSessionHasErrors('last_name');
});

test('registration fails when email is missing', function () {
    $this->post('/register', validRegistrationPayload(['email' => '']))
        ->assertSessionHasErrors('email');
});

test('registration fails with invalid email format', function () {
    $this->post('/register', validRegistrationPayload(['email' => 'not-an-email']))
        ->assertSessionHasErrors('email');
});

test('registration fails with duplicate email', function () {
    User::factory()->create(['email' => 'existing@example.com']);

    $this->post('/register', validRegistrationPayload(['email' => 'existing@example.com']))
        ->assertSessionHasErrors('email');
});

test('registration fails when password confirmation mismatches', function () {
    $this->post('/register', validRegistrationPayload([
        'password' => 'Password1!',
        'password_confirmation' => 'Different1!',
    ]))->assertSessionHasErrors('password');
});

test('registration fails when terms are not accepted', function () {
    $data = validRegistrationPayload();
    unset($data['terms_accepted']);

    $this->post('/register', $data)
        ->assertSessionHasErrors('terms_accepted');
});

test('registration fails when required contact fields are missing', function (string $field) {
    $this->post('/register', validRegistrationPayload([$field => '']))
        ->assertSessionHasErrors($field);
})->with(['phone', 'company_name', 'company_ic', 'street', 'city', 'zip', 'country']);

test('successful registration redirects to login', function () {
    $this->post('/register', validRegistrationPayload())
        ->assertRedirect(route('login'));

    $this->assertDatabaseHas('users', ['email' => 'newuser@example.com']);
});
