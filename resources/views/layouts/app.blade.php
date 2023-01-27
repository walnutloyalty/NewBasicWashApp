<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Basic Wash - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('media/logos/basic-wash-favicon.png') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data x-cloak class="font-sans antialiased">
<div class="min-h-screen">
    @include('partials._header')
    <main>
        {{ $slot }}
    </main>
</div>
</body>
@include('partials._footer')
</html>
