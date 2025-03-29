<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Default Title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        @vite(['resources/js/app.js'])
        <style>
            @keyframes scroll {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(-50%);
    }
}

.animate-scroll {
    display: flex;
    gap: 24px;
    animation: scroll 10s linear infinite;
}

        </style>
    </head>
    <section class="h-dvh w-full">

        <x-navbar-wlcm></x-navbar-wlcm>

        <main class="container mx-auto p-4">
            @yield('content')  
        </main>
        
        <x-footer-wlcm></x-footer-wlcm>
    </section>
</html>
