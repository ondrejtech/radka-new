<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Přihlášení – {{ config('app.name') }}</title>

        <link rel="stylesheet" href="{{ asset('Styles/fonts/Gotham/kit.css') }}">
        <link rel="stylesheet" href="{{ asset('Styles/icons/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bundles/css/main.css') }}">

        <style>
            * { box-sizing: border-box; }

            body { margin: 0; padding: 0; font-family: 'Gotham', sans-serif; }

            .login-pf-page {
                position: relative;
                min-height: 100vh;
                background-color: #4e5258;
                overflow: hidden;
            }

            .kc-background-link {
                display: block;
                position: fixed;
                top: 0; left: 0;
                width: 100%; height: 100%;
                z-index: 0;
                pointer-events: auto;
            }

            .kc-background-link img {
                width: 100%; height: 100%;
                object-fit: cover;
                display: block;
            }

            #kc-header.login-pf-page-header {
                position: relative;
                z-index: 1;
                text-align: center;
                font-size: 36px;
                color: #fff;
                font-weight: 300;
                padding: 48px 0 0;
                text-transform: uppercase;
            }

            .card-pf {
                position: relative;
                z-index: 1;
                margin: 40px auto;
                padding: 24px 32px 32px;
                background: #fff;
                border-radius: 3px;
                max-width: 420px;
                box-shadow: 0 2px 12px rgba(0,0,0,.4);
            }

            .login-pf-header {
                text-align: center;
                margin-bottom: 20px;
            }

            .logo {
                background-image: url('{{ asset('Images/logo_ci.svg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
                height: 52px;
                margin: 0 auto 16px;
            }

            #kc-locale {
                margin-bottom: 8px;
            }

            #kc-locale-dropdown > a {
                font-size: 13px;
                color: #555;
                text-decoration: none;
            }

            #kc-locale-dropdown ul {
                display: none;
                list-style: none;
                margin: 0;
                padding: 4px 0;
                background: #fff;
                border: 1px solid #ccc;
                border-radius: 3px;
                position: absolute;
                z-index: 10;
            }

            #kc-page-title {
                font-size: 18px;
                font-weight: 500;
                text-align: center;
                margin: 0 0 20px;
                color: #363636;
            }

            .login-pf-settings {
                display: flex;
                align-items: center;
                justify-content: flex-end;
                margin-bottom: 0;
            }

            .login-pf-settings .link a {
                font-size: 13px;
                color: #0088ce;
                text-decoration: none;
            }

            .login-pf-settings .link a:hover {
                text-decoration: underline;
            }

            #kc-form-buttons {
                margin-top: 16px;
            }

            .field-error {
                color: #c00;
                font-size: 13px;
                margin-top: 4px;
            }
        </style>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
