<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <section class="h-dvh w-full">
        <div class="flex items-center justify-center">
            Selamat datang di web umrah
            <a href="/login" class="underline">Silahkan login</a>
        </div>
        </section>
</html>
