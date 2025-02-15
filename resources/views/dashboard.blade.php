<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  class="bg-[#EFF3F4] dark:bg-gray-900">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        @vite('resources/css/app.css')
        @vite(['resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    </head>
    <section class="">
        
        <x-navbar></x-navbar>

        <x-transaction></x-transaction>

        <div class="max-w-screen-xl mx-8 my-8 rounded-2xl grid grid-cols-2 gap-4">
            <x-chart></x-chart>
        </div>

    </section>
</html>
