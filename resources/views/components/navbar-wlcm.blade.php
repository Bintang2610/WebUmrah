<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    
    <!-- Logo -->
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ asset('/images/logobiru.png') }}" class="h-3" alt="Logo">
      <span class="self-center text-lg text-[#27A1FF] font-semibold whitespace-nowrap dark:text-white">Elkhadijah</span>
    </a>

    <!-- Menu Navigasi -->
    <div class="hidden md:flex md:w-auto mr-4 ml-auto" id="navbar-sticky">
      <ul class="flex flex-col md:flex-row md:space-x-8 font-medium p-4 md:p-0 mt-4 md:mt-0 border border-gray-100 rounded-lg bg-gray-50 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded-md md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500">Beranda</a>
        </li>
        <li>
          <a href="/tentang" class="block py-2 px-3 text-gray-900 rounded-md hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang</a>
        </li>
        <li>
          <a href="/portofolio" class="block py-2 px-3 text-gray-900 rounded-md hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Portofolio</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded-md hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Hubungi</a>
        </li>
      </ul>
    </div>

    <!-- Tombol Menu Mobile + Login -->
    <div class="flex items-center space-x-3 md:ml-4">
      <!-- Tombol Login -->
      <a href="/login" class="text-black bg-white border border-black hover:bg-gray-50 font-medium rounded-md text-sm px-6 py-2 text-center">Masuk</a>

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
