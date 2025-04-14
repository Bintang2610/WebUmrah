@extends('layouts.landing')

@section('title', 'Home - Elkhadijah')

@section('content')
    <section class="mt-28 lg:mt-20 w-full flex flex-col items-center justify-center">
        <div class="border-2 border-gray-400 rounded-full py-2 px-5 text-center">
            <h1 class="text-md text-gray-800">Elkhadijah Mecca Medina</h1>
        </div>
        <p class="text-5xl mx-8 mt-8 font-semibold text-gray-700 lg:max-w-[800px] text-center leading-[55px]">
            Wujudkan Perjalanan <span class="text-blue-500">Ibadah dan Wisata</span> Impian Anda!
        </p>
        <p class="text-md mx-12 mt-8 text-gray-400 max-w-[600px] text-center">
            Kami hadir untuk menemani setiap langkah Anda, dari keberangkatan hingga kepulangan, dengan layanan profesional,
            aman, dan terpercaya.
        </p>

        <div class="relative block w-full lg:block hidden h-52 mt-1 overflow-hidden">
            <div class="wrapper">
                <img src="images/komen.png" alt="Komentar" class="komentar">
            </div>
        </div>
        <div class="relative block w-full lg:block hidden h-16 overflow-hidden">
            <div class="wrapper2">
                <img src="images/komen2.png" alt="Komentar" class="komentar2">
                <div class="absolute inset-0 bg-gradient-to-t from-white via-white/50 to-transparent"></div>
            </div>
        </div>
        <div class="relative block w-full block lg:hidden h-40 mt-1 overflow-hidden">
            <div class="wrapper3">
                <img src="images/komen.png" alt="Komentar3" class="komentar3">
            </div>
        </div>
        <div class="relative block w-full block lg:hidden h-28 overflow-hidden">
            <div class="wrapper4">
                <img src="images/komen.png" alt="Komentar4" class="komentar4">
                <div class="absolute inset-0 bg-gradient-to-t from-white via-white/50 to-transparent"></div>
            </div>
        </div>

        <p class="sm:text-5xl text-3xl mt-32 lg:mt-24 font-semibold text-gray-700 max-w-[800px] text-center">
            Keunggulan <span class="text-blue-500">Kami</span>
        </p>

        <div class="flex justify-center items-center mt-12 sm:mt-16">
            <img src="images/hp.png" alt="Gambar HP" class="w-[400px] sm:w-[550px] lg:w-[760px]">
        </div>

        <p class="sm:text-5xl text-3xl mt-24 font-semibold text-gray-700 max-w-[800px] text-center">
            Produk <span class="text-blue-500">Elkhadijah</span>
        </p>

        <div class="flex justify-center items-center mt-10 sm:mt-14 lg:mt-16">
            <img src="images/produk.png" alt="Gambar HP" class="w-[440px] sm:w-[600px] lg:w-[1000px]">
        </div>

        <div class="bg-[#27A1FF] rounded-full mt-10 sm:mt-14 lg:mt-16 mb-10 py-3 lg:py-4 px-6 lg:px-8 text-center shadow-lg">
            <a href="https://www.instagram.com/elkhadijah.official?igsh=d3Q1eHh6dno0OHBv" target="_blank"
                class="text-xs sm:text-sm lg:text-md text-white">Lihat Selengkapnya</a>
        </div>

    </section>
@endsection
