<?php

/**
 * PayPal API credentials & settings for paypal/paypal-server-sdk.
 */

return [
    'mode' => env('PAYPAL_MODE', 'sandbox'), // 'sandbox' or 'live'

    'sandbox' => [
        'client_id' => env('PAYPAL_SANDBOX_CLIENT_ID', ''),
        'client_secret' => env('PAYPAL_SANDBOX_CLIENT_SECRET', ''),
    ],

    'live' => [
        'client_id' => env('PAYPAL_LIVE_CLIENT_ID', ''),
        'client_secret' => env('PAYPAL_LIVE_CLIENT_SECRET', ''),
    ],

    'currency' => env('PAYPAL_CURRENCY', 'CZK'),
    'webhook_id' => env('PAYPAL_WEBHOOK_ID', ''),
];
