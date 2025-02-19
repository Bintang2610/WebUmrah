<div class="w-dvh mx-8 my-8 px-6 py-10 bg-white text-white rounded-2xl">
    
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
    <div class="flex items-center flex-grow">
        <!-- Input Background -->
        <div class="bg-gray-100 py-4 pl-6 pr-11 rounded-tl-3xl flex items-center flex-grow"
            style="border-top-right-radius: 70px 40px;">
            
            <!-- Wrapper Input -->
            <div class="relative w-full">
                <!-- Icon Search -->
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                
                <!-- Input -->
                <input type="text" placeholder="Cari"
                    class="pl-12 pr-4 py-4 w-full h-[43px] border text-black rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

        </div>
        <!-- Kotak di Sebelah Kanan Input -->
        <div class="relative h-[75px] w-[40px] flex-shrink-0">
            <div class="absolute inset-0 bg-gray-100"></div>
            <div class="h-full w-full bg-white flex items-center justify-center relative"
                style="border-bottom-left-radius: 100px 110px;">
            </div>
        </div>
    </div>

    <!-- Button Group -->
    <div class="flex space-x-2 flex-shrink-0">
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
    <div class="overflow-x-auto">
        <table class="w-full min-w-max rounded-xl text-md font-semibold bg-white text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                    <th scope="col" class="px-6 py-3">
                        No. Paspor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date of Issued
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date of Expiry
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Issuing Office
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hubungan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ubah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hapus
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
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            Sukardi Santari
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            L
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            3172032803800011
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            Banyumas
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            28-03-1983
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            E6964776
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            01-03-2024
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            01-03-2024
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            Cilacap
                        </div>
                    </td>
                    <td class="px-6 py-4 text-green-300 text-center">
                        <div class="flex justify-center items-center">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-yellow-400 text-center">
                        <div class="flex justify-center items-center">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-red-500 text-center">
                        <div class="flex justify-center items-center">
                            <i class="fa-solid fa-trash-can"></i>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto" class="w-10 h-10 rounded-full">
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            Sukardi Santari
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            L
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            3172032803800011
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            Banyumas
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            28-03-1983
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            E6964776
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            01-03-2024
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            01-03-2024
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center">
                            Cilacap
                        </div>
                    </td>
                    <td class="px-6 py-4 text-red-500 text-center">
                        <div class="flex justify-center items-center">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-yellow-400 text-center">
                        <div class="flex justify-center items-center">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-red-500 text-center">
                        <div class="flex justify-center items-center">
                            <i class="fa-solid fa-trash-can"></i>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
