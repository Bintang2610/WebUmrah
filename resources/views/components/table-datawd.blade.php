<table
    class="w-full min-w-max rounded-xl text-md font-semibold bg-white text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-md text-gray-700 dark:text-gray-400">
        <tr class=" border-b">
            <th scope="col" class="px-6 py-3">
                No
            </th>
            <th scope="col" class="px-6 py-3">
            </th>
            <th scope="col" class="px-6 py-3">
                Nama Peserta
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
        <tr data-open-part class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                1
            </th>
            <td class="px-6 py-4">
                <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto" class="w-10 h-10 rounded-full">
            </td>
            <td class="px-6 py-4 text-center">
                <div class="flex justify-center items-center">
                    Sukardi Santariww
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
                <button data-open-hub type="button">
                    <div class="flex justify-center items-center">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                </button>
            </td>
            <td class="px-6 py-4 text-yellow-400 text-center">
                <a href="/ubahdata" data-ignore-open>
                    <div class="flex justify-center items-center">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                </a>
            </td>
            <td class="px-6 py-4 text-red-500 text-center">
                <button data-open-del type="button">
                    <div class="flex justify-center items-center">
                        <i class="fa-solid fa-trash-can"></i>
                    </div>
                </button>
            </td>
        </tr>

        <tr data-open-part class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
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
                <a href="/ubahdata" data-ignore-open>
                    <div class="flex justify-center items-center">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                </a>
            </td>
            <td class="px-6 py-4 text-red-500 text-center">
                <button data-open-del type="button">
                    <div class="flex justify-center items-center">
                        <i class="fa-solid fa-trash-can"></i>
                    </div>
                </button>
            </td>
        </tr>
    </tbody>
</table>

<div id="delmodal"
    class="fixed text-black inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/4">
        <!-- Isi Modal -->
        <div class="mt-2 flex justify-center items-center text-red-500 text-center text-4xl">
            <i class="fa-solid fa-trash-can"></i>
        </div>

        <div class="mt-4 flex justify-center items-center text-black text-center text-md">
            <p>Anda yakin akan menghapus data?</p>
        </div>

        <!-- Footer Modal -->
        <div class="mt-4 flex justify-center items-center space-x-4">
            <button data-close-del class="px-6 py-2 bg-gray-300 text-black rounded-lg">
                Batal
            </button>
            <button data-close-del class="px-4 py-2 bg-red-500 text-white rounded-lg">
                Hapus
            </button>
        </div>
    </div>
</div>

<div id="hubmodal"
    class="fixed text-black inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-[#EFF3F4] shadow-lg p-8 w-1/2 rounded-xl relative">
        <!-- Tombol Tutup (Silang) -->
        <button id="closeHub" data-close-hub
            class="absolute top-7 right-7 text-gray-500 hover:text-gray-700 text-4xl">
            &times;
        </button>

        <!-- Header Modal -->
        <div class="text-left text-md text-gray-700 font-medium">
            Hubungan - Satu keluarga
        </div>

        <!-- Teks Konfirmasi -->
        <div class="mt-2 text-left text-3xl text-black font-semibold">
            Sukardi Santari
        </div>

        <!-- Tabel -->
        <div class="overflow-x-auto mt-6 rounded-xl">
            <table
                class="w-full min-w-max rounded-xl text-sm font-semibold bg-white text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-md text-gray-700 dark:text-gray-400">
                    <tr class=" border-b">
                        <th scope="col" class="px-8 py-3">
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
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex justify-center items-center">
                                1
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto"
                                class="w-10 h-10 rounded-full">
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
                    </tr>
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex justify-center items-center">
                                1
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto"
                                class="w-10 h-10 rounded-full">
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="partmodal"
    class="fixed text-black inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="shadow-lg w-[1185px] px-8 py-8 bg-white text-black rounded-2xl h-[550px] overflow-y-auto">

        <div class="flex items-center justify-between mb-8 relative">
            <!-- Header Dashboard (Di Kiri) -->
            <div class="px-2">
                <h2 class="text-xl font-medium text-black">Data Peserta</h2>
            </div>

            <!-- Tombol Close (Di Kanan) -->
            <button data-close-part class="text-gray-500 hover:text-gray-700 text-4xl">
                &times;
            </button>
        </div>


        <div class="relative mx-2 px-10 py-8 mb-8 bg-[#EFF3F4] p-6 rounded-xl">
            <!-- Judul -->
            <div class="text-left mb-6">
                <h2 class="text-lg font-semibold">Biodata</h2>
            </div>

            <!-- Form -->
            <div class="grid grid-cols-2 gap-6">
                <!-- Kolom Kiri -->
                <div>
                    <!-- Nama Jamaah -->
                    <label class="block text-sm mb-2 font-medium text-gray-700">Nama Peserta</label>
                    <textarea readonly class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">Sukardi Santari</textarea>


                    <!-- Foto Diri -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-5">Foto Diri</label>
                    <div class="w-full bg-white rounded-lg p-2 text-center relative">
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-2">
                            <div class="flex flex-col items-center justify-center w-full h-[120px]">
                                <img src="{{ asset('/images/foto.jpeg') }}"
                                    class="w-full h-full object-cover rounded-lg" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div>
                    <!-- NIK/No. KTP -->
                    <label class="block text-sm mb-2 font-medium text-gray-700">NIK/No. KTP</label>
                    <textarea readonly class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">3172032803800011</textarea>

                    <!-- Tempat Lahir -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">Tempat Lahir</label>
                    <textarea readonly class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">Banyumas</textarea>

                    <!-- Tanggal Lahir -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">Tanggal Lahir</label>
                    <input type="date" readonly
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"
                        value="1983-03-28"></input>
                </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="mt-6">
                <label class="block text-sm mb-3 font-medium text-gray-700">Jenis Kelamin</label>
                <div class="flex items-center text-sm gap-x-4 space-x-4 mt-2">
                    <label class="flex items-center">
                        <input type="radio" name="gender" value="L" class="mr-2" checked disabled>
                        Laki-laki (L)
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="gender" value="P" class="mr-2" disabled>
                        Perempuan (P)
                    </label>
                </div>
            </div>
        </div>
        <div class="relative mx-2 px-10 py-8 mb-8 bg-[#EFF3F4] p-6 rounded-xl">
            <!-- Judul -->
            <div class="text-left mb-6">
                <h2 class="text-lg font-semibold">Paspor</h2>
            </div>

            <!-- Form -->
            <div class="grid grid-cols-2 gap-6">
                <!-- Kolom Kiri -->
                <div>
                    <!-- No. Paspor -->
                    <label class="block text-sm mb-2 font-medium text-gray-700">No. Paspor</label>
                    <textarea readonly class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">E6964776</textarea>

                    <!-- Issuing office -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">Issuing office</label>
                    <textarea readonly class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">Cilacap</textarea>
                </div>

                <!-- Kolom Kanan -->
                <div>
                    <!-- Date of issued -->
                    <label class="block text-sm mb-2 font-medium text-gray-700">Date of issued</label>
                    <input type="date" readonly
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"
                        value="2024-03-01"></input>

                    <!-- Tanggal Lahir -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-5">Date of expiry</label>
                    <input type="date" readonly
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"
                        value="2024-03-01"></input>
                </div>
            </div>
        </div>
        <div class="relative mx-2 px-10 py-8 mb-2 bg-[#EFF3F4] p-6 rounded-xl">
            <!-- Judul -->
            <div class="text-left mb-6">
                <h2 class="text-lg font-semibold">Hubungan</h2>
            </div>

            <!-- Jenis Hubungan -->
            <div class="mt-6">
                <label class="block text-sm mb-3 font-medium text-gray-700">Jenis Hubungan</label>
                <div class="flex items-center text-sm gap-x-4 space-x-4 mt-2">
                    <label class="flex items-center">
                        <input type="radio" name="gender" value="L" class="mr-2" checked disabled>
                        Keluarga
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="gender" value="P" class="mr-2" disabled>
                        Suami-istri
                    </label>
                </div>
            </div>

            <!-- Data Hubungan -->
            <div class="mt-6">
                <label class="block text-md mb-3 font-medium text-gray-700">Data</label>
                <div class="overflow-x-auto mt-1 rounded-xl">
                    <table
                        class="w-full min-w-max rounded-xl text-md font-semibold bg-white text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-md text-gray-700 dark:text-gray-400">
                            <tr class=" border-b">
                                <th scope="col" class="px-10 py-8">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Peserta
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex justify-center items-center">
                                        1
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto"
                                        class="w-10 h-10 rounded-full">
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
                            </tr>
                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex justify-center items-center">
                                        1
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto"
                                        class="w-10 h-10 rounded-full">
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
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tambah Data Hubungan -->
            <div class="mt-8">
                <label class="block text-md mb-3 font-medium text-gray-700">Tambah Data</label>
                <!-- Wrapper Input -->
                <div class="relative mb-4">
                    <!-- Icon Search -->
                    <i
                        class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>

                    <!-- Input -->
                    <input type="text" placeholder="Cari data"
                        class="pl-12 pr-4 py-4 w-[400px] h-[40px] border text-black rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="overflow-x-auto mt-1 rounded-xl">
                    <table
                        class="w-full min-w-max rounded-xl text-md font-semibold bg-white text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-md text-gray-700 dark:text-gray-400">
                            <tr class=" border-b">
                                <th scope="col" class="px-10 py-8"></th>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex justify-center items-center">
                                        <input type="checkbox"
                                            class="w-5 h-5 rounded border-gray-300 text-green-500 focus:ring-green-500"
                                            checked disabled>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto"
                                        class="w-10 h-10 rounded-full">
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
                            </tr>
                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex justify-center items-center">
                                        <input type="checkbox"
                                            class="w-5 h-5 rounded border-gray-300 text-green-500 focus:ring-green-500"
                                            disabled>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto"
                                        class="w-10 h-10 rounded-full">
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center items-center">
                                        Sukardi Santariw
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
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
