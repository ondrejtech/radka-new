<?php

use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "pest()" function to bind a different classes or traits.
|
*/

pest()->extend(TestCase::class)
    ->use(RefreshDatabase::class)
    ->in('Feature');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

function validRegistrationPayload(array $overrides = []): array
{
    return array_merge([
        'first_name' => 'Test',
        'last_name' => 'User',
        'email' => 'newuser@example.com',
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
    ], $overrides);
}

function createTestOrder(array $overrides = []): Order
{
    return Order::create(array_merge([
        'user_id' => null,
        'session_id' => 'test-session-default',
        'status_order_id' => 1,
        'is_open' => false,
        'ship_name' => 'Test User',
        'ship_street' => 'Testovací 1',
        'ship_city' => 'Praha',
        'ship_zip' => '11000',
        'ship_country' => 'CZ',
        'ship_phone' => '+420123456789',
        'ship_email' => 'test@example.com',
        'total_without_vat' => 100.00,
        'total_with_vat' => 121.00,
        'payment_status' => 'unpaid',
    ], $overrides));
}
