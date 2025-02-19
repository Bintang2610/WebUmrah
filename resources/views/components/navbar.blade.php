<div class="max-w-screen-xl mx-8 my-8 px-6 py-10 bg-[#5CC1F3] text-white rounded-2xl">
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
            <x-navbar-link href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link>
            <x-navbar-link href="/data" :active="request()->is('data')">Data</x-nav-link>
        </div>

        <!-- Tombol di Kanan -->
        <div class="flex space-x-2 pr-2">
            <button class="bg-transparent border border-white text-white px-3 py-2 text-xs rounded-full hover:bg-white hover:bg-opacity-20 transition">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <button class="bg-transparent border border-white text-white px-3 py-2 text-sm rounded-full hover:bg-white hover:bg-opacity-20 transition">
                <i class="fa-regular fa-envelope"></i>
            </button>
            <button class="bg-transparent border border-white text-white px-3 py-2 text-sm rounded-full hover:bg-white hover:bg-opacity-20 transition">
                <i class="fa-solid fa-bell"></i>
            </button>
            <button class="bg-transparent border border-white text-white px-3 py-2 text-sm rounded-full hover:bg-white hover:bg-opacity-20 transition">
                <i class="fa-regular fa-user"></i>
            </button>
        </div>
    </div>

    <!-- Header Dashboard -->
    <div class="mt-6 px-2">
        <h2 class="text-2xl font-bold text-black">Dashboard</h2>
    </div>

    <!-- 4 Kolom Menyamping -->
    <div class="grid grid-cols-4 gap-4 px-2 mt-4 py- bg">
        <div class="bg-white bg-opacity-50 hover:bg-opacity-25 text-gray-800 p-6 rounded-xl">
            <p class="pb-2 text-lg">Wisata Luar Negeri</p>
            <p class="text-4xl font-semibold">67</p>
        </div>
        <div class="bg-white bg-opacity-50 text-gray-800 p-6 rounded-xl">
            <p class="pb-2 text-lg">Wisata Domestrik</p>
            <p class="text-4xl font-semibold">39</p>
        </div>
        <div class="bg-white bg-opacity-50 text-gray-800 p-6 rounded-xl">
            <p class="pb-2 text-lg">Jamaah Umrah</p>
            <p class="text-4xl font-semibold">53</p>
        </div>
        <div class="bg-white bg-opacity-50 text-gray-800 p-6 rounded-xl">
            <p class="pb-2 text-lg">Jamaah Haji</p>
            <p class="text-4xl font-semibold">7</p>
        </div>
    </div>
</div>
