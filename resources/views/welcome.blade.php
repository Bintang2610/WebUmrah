@extends('layouts.landing')

@section('title', 'Home - Elkhadijah')

@section('content')
<section class="mt-20 w-full flex flex-col items-center justify-center">
    <div class="border-2 border-gray-400 rounded-full py-2 px-5 text-center">
        <h1 class="text-md text-gray-800">Elkhadijah Mecca Medina</h1>
    </div>
    <p class="text-5xl mt-8 font-semibold text-gray-700 max-w-[800px] text-center">
        Wujudkan Perjalanan <span class="text-blue-500">Ibadah dan Wisata</span> Impian Anda!
    </p>
    <p class="text-md mt-8 text-gray-400 max-w-[600px] text-center">
        Kami hadir untuk menemani setiap langkah Anda, dari keberangkatan hingga kepulangan, dengan layanan profesional, aman, dan terpercaya.
    </p>

    <div class="relative w-full h-52 mt-1 overflow-hidden">
        <div class="wrapper">
            <img src="images/komen.png" alt="Komentar" class="komentar">
        </div>
    </div>
    <div class="relative w-full h-16 overflow-hidden">
        <div class="wrapper2">
            <img src="images/komen.png" alt="Komentar" class="komentar2">
            <div class="absolute inset-0 bg-gradient-to-t from-white via-white/50 to-transparent"></div>
        </div>
    </div>

</section>
@endsection
