<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased @if(Auth::user()) bg-gray-800 @endif">
        @if(Auth::user()) @include('layouts.partials.sidebar') @else @include('layouts.partials.navbar') @endif
        <main>
            <section class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                @yield('content')
            </section>
        </main>
        @if(!Auth::user()) @include('layouts.partials.footer') @endif

        
    </body>
</html>
