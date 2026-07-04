<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        @include('partials.meta-pixel')
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Přihlášení – {{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ asset('resources/3vij0/login/edsystem_keycloak_theme/css/fonts/kit.css') }}">
        <link rel="stylesheet" href="{{ asset('resources/3vij0/login/edsystem_keycloak_theme/css/icons/style.css') }}">
        <link rel="stylesheet" href="{{ asset('resources/3vij0/login/edsystem_keycloak_theme/css/patternfly.css') }}">
        <link rel="stylesheet" href="{{ asset('resources/3vij0/login/edsystem_keycloak_theme/css/login.css') }}">
        
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
