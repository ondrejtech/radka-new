<?php

return [
    // Firemní údaje
    'name' => env('COMPANY_NAME', 'Moje firma s.r.o.'),
    'ico' => env('APP_ICO', '12345678'),
    'dic' => env('APP_DIC', 'CZ12345678'),
    'address' => env('APP_ADDRESS', 'Ulice 123, 110 00 Praha 1'),
    'phone' => env('APP_PHONE', '+420 123 456 789'),
    'email' => env('APP_EMAIL', 'info@muj-eshop.cz'),
    'claim_email' => env('APP_CLAIM_EMAIL', 'reklamace@example.com'),

    // Speciální e-maily
    'business_email' => env('APP_BUSINESS_EMAIL', 'firmy@muj-eshop.cz'),
    'pharmacy_email' => env('APP_PHARMACY_EMAIL', 'lekarna@muj-eshop.cz'),
    'damage_email' => env('APP_DAMAGE_EMAIL', 'poskozeni@muj-eshop.cz'),
    'gdpr_email' => env('APP_GDPR_EMAIL', 'gdpr@example.com'),

    // Adresy
    'return_address' => env('APP_RETURN_ADDRESS', 'Reklamace, Ulice 123, 000 00 Město'),

    // VOP
    'vop_effective_date' => env('APP_VOP_DATE', '27. 3. 2026'),
];
