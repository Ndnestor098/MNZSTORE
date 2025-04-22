<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ env('APP_NAME') . ' - ' . $title }}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/assets/favicon/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="/assets/favicon/favicon.svg" />
        <link rel="shortcut icon" href="/assets/favicon/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png" />
        <meta name="apple-mobile-web-app-title" content="MNZSTORE" />
        <link rel="manifest" href="/assets/favicon/site.webmanifest" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="bg-black">
        {{-- Navigation --}}
        @include('layouts.navigation')
        {{-- End Navigation --}}

        {{-- Content --}}
        <div>
            {{ $slot }}

        </div>
        {{-- End Content --}}

        {{-- Footer --}}
        @include('layouts.footer')
        {{-- End Footer --}}
    </body>
    
    
</html>
