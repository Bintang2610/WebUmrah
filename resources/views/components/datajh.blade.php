<div class="max-w-screen-xl mx-8 my-8 px-6 py-10 bg-white text-white rounded-2xl">
    
    <div class="flex items-center mb-4 justify-between">
        <!-- Header Dashboard -->
        <div class="px-2">
            <h2 class="text-xl font-medium text-black">Data Peserta Jamaah Haji</h2>
        </div>

        <!-- Tombol di Kanan -->
        <div class="flex pr-2">
        <button class="bg-white border border-black text-black px-3 py-2 text-sm rounded-lg flex items-center space-x-2 hover:bg-gray-100 transition">
            <p>Seluruh Data</p>
            <i class="fa-solid fa-chevron-right"></i>
        </button>
        </div>
    </div>

    <div class="flex justify-between items-center bg-white p-0 rounded-lg">
    <!-- Search Input -->
    <div class="relative w-fit bg-gray-100 py-4 px-6 rounded-tl-xl rounded-tr-xl">
    <!-- Input -->
    <input type="text" placeholder="Cari data..." 
        class="px-4 py-4 w-[840px] h-[43px] border text-black rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">

    <!-- Segitiga Siku-Siku -->
<!--     <div class="absolute top-1/2 -translate-y-1/2 right-[-200px] 
                    w-0 h-0 border-t-[76px] border-t-transparent 
                    border-l-[200px] border-l-gray-100 border-b-[0px]"></div>
    </div> -->
    </div>


    <!-- Button Group -->
    <div class="flex space-x-2">
        <button class="bg-white border border-gray-300 text-blue-500 px-4 py-2 text-sm rounded-full flex items-center space-x-2 hover:bg-gray-100 transition">
        <i class="fa-solid fa-arrows-rotate mr-4"></i>
            Refresh
        </button>
        <button class="bg-white border border-gray-300 px-4 py-2 text-sm text-green-500 rounded-full flex items-center space-x-2 hover:bg-gray-100 transition">
            <i class="fa-solid fa-plus mr-4"></i>
            Tambah Data
        </button>
    </div>
</div>

<div class="relative overflow-x-auto mx-0 mb-2 bg-gray-100 p-6 rounded-tr-xl rounded-br-xl rounded-bl-xl">
        <table class="w-full rounded-xl text-md font-semibold bg-white text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-md text-gray-700 dark:text-gray-400">
                <tr class=" border-b">
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Jamaah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sex
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NIK/No. KTP
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tempat Lahir
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Lahir
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto" class="w-10 h-10 rounded-full">
                    </td>
                    <td class="px-6 py-4">
                        Sukardi Santari
                    </td>
                    <td class="px-6 py-4">
                        L
                    </td>
                    <td class="px-6 py-4">
                        3172032803800011
                    </td>
                    <td class="px-6 py-4">
                        Banyumas
                    </td>
                    <td class="px-6 py-4">
                    28-03-1983
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto" class="w-10 h-10 rounded-full">
                    </td>
                    <td class="px-6 py-4">
                        Sukardi Santari
                    </td>
                    <td class="px-6 py-4">
                        L
                    </td>
                    <td class="px-6 py-4">
                        3172032803800011
                    </td>
                    <td class="px-6 py-4">
                        Banyumas
                    </td>
                    <td class="px-6 py-4">
                    28-03-1983
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto" class="w-10 h-10 rounded-full">
                    </td>
                    <td class="px-6 py-4">
                        Sukardi Santari
                    </td>
                    <td class="px-6 py-4">
                        L
                    </td>
                    <td class="px-6 py-4">
                        3172032803800011
                    </td>
                    <td class="px-6 py-4">
                        Banyumas
                    </td>
                    <td class="px-6 py-4">
                    28-03-1983
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto" class="w-10 h-10 rounded-full">
                    </td>
                    <td class="px-6 py-4">
                        Sukardi Santari
                    </td>
                    <td class="px-6 py-4">
                        L
                    </td>
                    <td class="px-6 py-4">
                        3172032803800011
                    </td>
                    <td class="px-6 py-4">
                        Banyumas
                    </td>
                    <td class="px-6 py-4">
                    28-03-1983
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
