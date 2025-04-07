@extends('layouts.adddata')

@section('title', 'Dashboard - Tambah Data Wisata Domestik')


@section('content')
<div class="flex items-center justify-center  min-h-screen mb-8 mt-20">

<form action="" method="POST" enctype="multipart/form-data" class="w-full">
    @csrf
    <div class="mt-8 mb-16 px-8 py-8 bg-white text-black rounded-2xl">

        <div class="flex items-center mb-8 justify-center">
            <!-- Header Dashboard -->
            <div class="px-2">
                <h2 class="text-xl font-medium text-black"><span class="text-[#0ACC00]">Tambah Data</span> Peserta Wisata Domestik</h2>
            </div>
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
                    <textarea name="nama_peserta" required placeholder="Nama Peserta"
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></textarea>

                    <!-- NIK/No. KTP -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">NIK/No. KTP</label>
                    <textarea placeholder="NIK/No. KTP" name="nik" required class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></textarea>

                    <!-- Tempat Lahir -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">Tempat Lahir</label>
                    <textarea name="tempat_lahir" required placeholder="Tempat Lahir"
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></textarea>

                    <!-- Tanggal Lahir -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">Tanggal Lahir</label>
                    <input name="tanggal_lahir" required type="date"
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></input>
                </div>

                <!-- Kolom Kanan -->
                <div>
                    <!-- Foto Diri -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-1">Foto Diri</label>
                    <div class="w-full bg-white rounded-lg p-2 text-center relative">
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-2">
                            <input name="foto_peserta" required type="file" id="fileInput" class="hidden">
                            <label for="fileInput"
                                class="cursor-pointer flex flex-col items-center justify-center w-full h-[120px]">
                                <div id="previewContainer" class="flex flex-col items-center justify-center">
                                    <i class="fa-regular fa-image text-3xl text-gray-400"></i>
                                    <p class="mt-2 text-sm text-gray-400">
                                        <i class="fa-solid fa-circle-exclamation mr-1"></i>
                                        Seret dan lepas atau klik untuk pilih gambar
                                    </p>
                                </div>
                                <img id="previewImage" class="hidden w-full h-full object-cover rounded-lg" />
                            </label>
                        </div>
                    </div>

                    <!-- Foto Ktp -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-6">Foto KTP</label>
                    <div class="w-full bg-white rounded-lg p-2 text-center relative">
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-2">
                            <input name="foto_peserta" required type="file" id="fileInput2" class="hidden">
                            <label for="fileInput2"
                                class="cursor-pointer flex flex-col items-center justify-center w-full h-[120px]">
                                <div id="previewContainer2" class="flex flex-col items-center justify-center">
                                    <i class="fa-regular fa-image text-3xl text-gray-400"></i>
                                    <p class="mt-2 text-sm text-gray-400">
                                        <i class="fa-solid fa-circle-exclamation mr-1"></i>
                                        Seret dan lepas atau klik untuk pilih gambar
                                    </p>
                                </div>
                                <img id="previewImage2" class="hidden w-full h-full object-cover rounded-lg" />
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="mt-6">
                <label class="block text-sm mb-3 font-medium text-gray-700">Jenis Kelamin</label>
                <div class="flex items-center text-sm gap-x-4 space-x-4 mt-2">
                    <label class="flex items-center">
                        <input type="radio" name="jenis_kelamin" value="L" required class="mr-2">
                        Laki-laki (L)
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="jenis_kelamin" value="P" required class="mr-2">
                        Perempuan (P)
                    </label>
                </div>
            </div>
        </div>
        
        <div class="relative mx-2 px-10 py-8 mb-2 bg-[#EFF3F4] p-6 rounded-xl">
            <!-- Judul -->
            <div class="text-left mb-6">
                <h2 class="text-lg font-semibold">Hubungan</h2>
            </div>

            <!-- Data Hubungan -->
            <div class="mt-6">
                <label class="block text-md mb-3 font-medium text-gray-700">Data</label>
                <div class="overflow-x-auto mt-1 rounded-xl">
                <table
    class="w-full min-w-max rounded-xl text-md font-semibold bg-white text-left rtl:text-right text-gray-500">
    <thead class="text-md text-gray-700">
        <tr class=" border-b text-center">
            <th scope="col" class="px-6 py-3">
                No
            </th>
            <th scope="col" class="px-6 py-3">
            </th>
            <th scope="col" class="px-6 py-3">
                Nama Jamaah
            </th>
            <th scope="col" class="px-6 py-3">
                Jenis Kelamin
            </th>
            <th scope="col" class="px-6 py-3">
                NIK/No. KTP
            </th>
            <th scope="col" class="px-6 py-3">
                Hubungan
            </th>
        </tr>
    </thead>

    <tbody>
        <tr data-open-part class="bg-white hover:bg-gray-50 text-black text-center">
            <td class="px-6 py-4 text-center">
                <div class="flex justify-center items-center">
                    1
                </div>
            </td>
            <td class="px-6 py-4">
                <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto" class="w-10 h-10 rounded-full">
            </td>
            <td class="px-6 py-4 text-center">
                <div class="flex justify-center items-center">
                    Sukardi Santari
                </div>
            </td>
            <td class="px-10 py-4 text-center">
                <div class="flex justify-center rounded-md py-2 items-center bg-purple-200 text-purple-400">
                                Perempuan
                            </div>
            </td>
            <td class="px-6 py-4 text-center">
                <div class="flex justify-center items-center">
                3302000303010001
                </div>
            </td>
            <td class="px-6 py-4 text-center">
                <div class="flex justify-center items-center gap-2 bg-red-200 text-red-500 py-2 px-4 rounded-md w-fit mx-auto">
                    <span>Hubungan</span>
                    <i class="fa-solid fa-angle-right"></i>
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
    class="w-full min-w-max rounded-xl text-md font-semibold bg-white text-left rtl:text-right text-gray-500">
    <thead class="text-md text-gray-700">
        <tr class=" border-b text-center">
            <th scope="col" class="px-6 py-3">
                
            </th>
            <th scope="col" class="px-6 py-3">
            </th>
            <th scope="col" class="px-6 py-3">
                Nama Jamaah
            </th>
            <th scope="col" class="px-6 py-3">
                Jenis Kelamin
            </th>
            <th scope="col" class="px-6 py-3">
                NIK/No. KTP
            </th>
        </tr>
    </thead>

    <tbody>
        <tr data-open-part class="bg-white hover:bg-gray-50 text-black text-center">
            <th scope="row"
                                    class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex justify-center items-center">
                                        <input type="checkbox"
                                            class="w-5 h-5 rounded border-gray-300 text-green-500 focus:ring-green-500">
                                    </div>
                                </th>
            <td class="px-6 py-4">
                <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto" class="w-10 h-10 rounded-full">
            </td>
            <td class="px-6 py-4 text-center">
                <div class="flex justify-center items-center">
                    Sukardi Santari
                </div>
            </td>
            <td class="px-10 py-4 text-center">
                <div class="flex justify-center rounded-md py-2 items-center bg-purple-200 text-purple-400">
                                Perempuan
                            </div>
            </td>
            <td class="px-6 py-4 text-center">
                <div class="flex justify-center items-center">
                3302000303010001
                </div>
            </td>
        </tr>
    </tbody>
        </table>
                </div>
            </div>
        </div>

        <div class="relative mx-2 mt-8 px-10 py-8 mb-8 bg-[#EFF3F4] p-6 rounded-xl">
            <!-- Judul -->
            <div class="text-left mb-6">
                <h2 class="text-lg font-semibold">Perjalanan</h2>
            </div>

            <!-- Form -->
            <div class="grid grid-cols-2 gap-6">
                <!-- Kolom Kiri -->
                <div>
                    <!-- No. Paspor -->
                    <label class="block text-sm mb-2 font-medium text-gray-700">Jenis perjalanan</label>
                    <textarea readonly name="no_paspor" required placeholder="No. Paspor"
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">Wisata Domestik</textarea>

                    <!-- Biaya -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">Biaya</label>
                    <textarea name="issuing_office" required placeholder="Rp"
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></textarea>

                    <!-- Hotel -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">Hotel</label>
                    <textarea name="issuing_office" required placeholder="Hotel"
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></textarea>
                </div>

                <!-- Kolom Kanan -->
                <div>
                    <!-- Date of issued -->
                    <label class="block text-sm mb-2 font-medium text-gray-700">Date of issued</label>
                    <input type="date" name="date_of_issued" required
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></input>

                    <!-- Tanggal Lahir -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-5">Date of expiry</label>
                    <input type="date" name="date_of_expiry" required
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></input>

                    <!-- Transportasi -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-6">Transportasi</label>
                    <textarea name="issuing_office" required placeholder="Transportasi"
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></textarea>
                </div>
            </div>

            <div>
            <label class="block text-sm mb-2 font-medium text-gray-700 mt-5">Kode khusus perjalanan</label>

            <div class="flex gap-4 items-center">
                <!-- Textarea -->
                <textarea name="issuing_office" required placeholder="Kode khusus perjalanan"
                class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md resize-none"></textarea>

                <!-- Tombol -->
                <button type="button"
                class="h-[50px] w-[130px] px-4 bg-blue-500 text-white text-sm rounded-md hover:bg-blue-600 transition">
                Buat Kode
                </button>
            </div>
            </div>
        
        <!-- Kolom Kanan -->
        <div>
            <!-- Date of issued -->
            <label class="block text-sm mt-4 mb-2 font-medium text-gray-700">Catatan</label>
            <!-- Editor tampilan -->
            <div class="relative w-full">
  <!-- Textarea -->
  <textarea id="noteArea" placeholder="Catatan"
    class="w-full h-[300px] bg-white text-sm px-2 py-1 border rounded-md resize-none pr-10">
  </textarea>

  <!-- Gambar Preview (disembunyikan dulu) -->
  <div id="imagePreviewContainer" class="hidden bg-white w-full h-[300px] border items-center py-4 pl-8 rounded-md overflow-hidden flex justify-left">
  <img id="imagePreview" class="w-auto h-full object-contain" />
</div>

  <!-- Ikon Gambar di kiri bawah -->
  <div class="absolute bottom-2 left-2 text-gray-500 cursor-pointer">
    <label for="imageUpload" class="cursor-pointer">
      <i class="fa-solid fa-image text-lg"></i>
    </label>

    <!-- Input File Hidden -->
    <input type="file" id="imageUpload" accept="image/*" class="hidden">
  </div>
</div>

        </div>
        </div>

        <div class="relative mx-2 px-10 py-8 mb-8 bg-[#EFF3F4] p-6 rounded-xl">
            <!-- Judul -->
            <div class="text-left mb-6">
                <h2 class="text-lg font-semibold">Akun</h2>
            </div>

            <!-- Form -->
            <div class="grid grid-cols-2 gap-6">
                <!-- Kolom Kiri -->
                <div>
                    <!-- No. Paspor -->
                    <label class="block text-sm mb-2 font-medium text-gray-700">Username</label>
                    <textarea name="no_paspor" required placeholder="Username"
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></textarea>

                    <!-- Issuing office -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">Kata sandi</label>
                    <textarea name="issuing_office" required placeholder="Kata sandi"
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></textarea>
                </div>

                <!-- Kolom Kanan -->
                <div>
                    <!-- No. Paspor -->
                    <label class="block text-sm mb-2 font-medium text-gray-700">No. Telepon</label>
                    <textarea name="no_paspor" required placeholder="No. Telepon"
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></textarea>

                    <!-- Issuing office -->
                    <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">Email</label>
                    <textarea name="issuing_office" required placeholder="Email@gmail.com"
                        class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></textarea>
                </div>
            </div>
        </div>

        <div class="flex items-center my-12">
        <button type="submit"
                    class="w-full bg-green-500 text-white text-sm ml-2 px-5 py-3 rounded-lg hover:bg-green-600 transition">
                    Simpan
                </button>
        </div>
    </div>
</form>

@endsection