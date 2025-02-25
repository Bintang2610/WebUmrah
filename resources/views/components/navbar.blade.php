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
        <div id="divButton" class="relative rounded-full p-2 flex items-center">
    <!-- Tombol Profil -->
    <button id="profileButton" class="bg-transparent border border-white text-white px-3 py-2 text-sm rounded-full hover:bg-white hover:bg-opacity-20 transition ml-24">
        <i class="fa-regular fa-user"></i>
    </button>

    <!-- Tombol Keluar -->
    <a href="/login" id="logoutButton" class="hidden absolute left-2 top-2 flex items-center space-x-1 bg-white text-red-500 px-4 py-2 text-sm rounded-full border border-red-500 transition">
        <i class="fa-solid fa-sign-out-alt"></i>
        <span>Keluar</span>
    </a>
</div>

    </div>

    <!-- Header Dashboard -->
     <div class="mt-6 px-2">
        <h2 class="text-2xl font-bold text-black">Dashboard</h2>
    </div>
    
    <x-navbar-data></x-navbar-data>

</div>
