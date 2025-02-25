@props(['type'])

@php
    // Buat ID unik berdasarkan tipe data
    $chartId = "chart-" . $type;
@endphp

<div class="w-full bg-white rounded-2xl shadow-sm dark:bg-gray-800 p-4 md:p-6">
  <!-- Navbar -->
  <div class="flex items-center justify-between mb-6">
        <!-- Header Dashboard -->
        <div class="px-2">
            <h2 id="title-{{ $chartId }}" class="text-xl font-medium text-black">}</h2>
        </div>

        <!-- Tombol di Kanan -->
        <div class="relative inline-block w-32">
    <!-- Tombol Dropdown -->
    <button id="dropdownButton" class="text-black bg-white hover:bg-gray-100 border border-gray-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 w-full text-left flex justify-between items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        <span id="selectedOption">5 Tahun</span>
        <i id="dropdownIcon" class="fa-solid fa-chevron-right transition-transform transform ml-auto"></i>
    </button>

    <!-- Dropdown Menu -->
    <div id="dropdownMenu" class="absolute left-0 top-full mt-2 z-50 bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-full dark:bg-gray-700 hidden">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <li>
                <a href="#" data-value="5 Tahun" class="dropdown-item block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">5 Tahun</a>
            </li>
            <li>
                <a href="#" data-value="1 Tahun" class="dropdown-item block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">1 Tahun</a>
            </li>
            <li>
                <a href="#" data-value="1 Bulan" class="dropdown-item block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">1 Bulan</a>
            </li>
            <li>
                <a href="#" data-value="1 Minggu" class="dropdown-item block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">1 Minggu</a>
            </li>
        </ul>
    </div>
</div>

    </div>

    <div class="chart" id="{{ $chartId }}" data-type="{{ $type }}"></div>
</div>
