<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    
    <!-- Logo -->
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ asset('/images/logobiru.png') }}" class="h-3" alt="Logo">
      <span class="self-center text-lg text-[#27A1FF] font-semibold whitespace-nowrap">Elkhadijah</span>
    </a>

    <!-- Menu Navigasi -->
    <div class="hidden md:flex md:w-auto mr-4 ml-auto" id="navbar-sticky">
      <ul class="flex flex-col md:flex-row md:space-x-8 font-medium p-4 md:p-0 mt-4 md:mt-0 border border-gray-100 rounded-lg bg-gray-50 md:border-0 md:bg-white">
        <li>
          <x-navbarlink-wlcm href="/" :active="request()->is('/*')">Beranda</x-navbarlink-wlcm>
        </li>
        <li>        
          <x-navbarlink-wlcm href="/tentang" :active="request()->is('tentang*')">Tentang</x-navbarlink-wlcm>
        </li>
        <li>        
          <x-navbarlink-wlcm href="/portofolio" :active="request()->is('portofolio*')">Portofolio</x-navbarlink-wlcm>
        </li>
        <li>        
          <x-navbarlink-wlcm href="/hubungi" :active="request()->is('hubungi*')">Hubungi</x-navbarlink-wlcm>
        </li>
      </ul>
    </div>

    <!-- Tombol Menu Mobile + Login -->
    <div class="flex items-center space-x-3 md:ml-4">
    @auth
    <a href="/viewuserprofil" class="text-center">
        <img src="/logobiru.png" alt="Profil" class="w-8">
    </a>
@else
    <a href="/login" class="text-black bg-white border border-black hover:bg-gray-50 font-medium rounded-md text-sm px-6 py-2 text-center">Masuk</a>
@endauth



      <!-- Tombol Menu Mobile -->
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>
    </div>

  </div>
</nav>
