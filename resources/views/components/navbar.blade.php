<div class="w-dvh mx-8 my-8 px-6 py-10 bg-[#5CC1F3] text-white rounded-2xl">
<!-- bg-gradient-to-r from-[#a0c6ed] via-[#2980d7] to-[#7db6ee] -->

<!-- Navbar -->

    <div class="flex items-center justify-between">
        <!-- Nama di Kiri -->
        <div class="text-sm font-bold flex items-center space-x-1">
            <img src="{{ asset('/images/logo.png') }}" alt="Foto" class="h-3">
            <span>Elkhadijah</span>
        </div>


        <!-- Menu Navbar di Tengah -->
        <div class="flex space-x-6">
            <x-navbar-link href="/dashboard" :active="request()->is('dashboard*')">Dashboard</x-nav-link>
            <x-navbar-link href="/transaction" :active="request()->is('transaction*')">Transaksi</x-nav-link>
        </div>

        <!-- Tombol di Kanan -->
        <div class="flex ml-24 space-x-2 pr-2">
            <button class="bg-transparent border border-white text-white px-3 py-2 text-sm rounded-full hover:bg-white hover:bg-opacity-20 transition">
                <i class="fa-regular fa-user"></i>
            </button>
        </div>
    </div>

    <!-- Header Dashboard -->
     <div class="mt-6 px-2">
        <h2 class="text-2xl font-bold text-black">Dashboard</h2>
    </div>
    
    <x-navbar-data></x-navbar-data>

</div>
