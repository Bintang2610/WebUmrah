@extends('layouts.adddata')

@section('title', 'Dashboard - Tambah Data Wisata Luar Negeri')

@props(['dataWLN'])
@section('content')
    <div class="flex items-center justify-center  min-h-screen mb-8 mt-20">
        @foreach ($dataWLN as $wisataluarnegeri)
            <div class="mt-8 mb-16 px-8 py-8 bg-white text-black rounded-2xl">

                <div class="flex mb-2 items-center justify-center">
                    <!-- Header Dashboard -->
                    <div class="px-2">
                        <h2 class="text-xl font-medium text-black">Data Peserta Wisata Luar Negeri</h2>
                    </div>
                </div>

                <div class="flex justify-center items-center my-8 w-max-4xl h-[250px] bg-transparent p-4 gap-4">
                    <!-- Gambar kiri (persegi) -->
                    <img src="/images/foto.jpeg" alt="Foto Persegi"
                        class="w-[250px] h-[250px] object-cover rounded-md border" />

                    <!-- Gambar kanan (4x5 potret) -->
                    <img src="/images/foto.jpeg" alt="Foto 4x5" class="w-[380px] h-[250px] object-cover rounded-md border" />
                </div>


                <div class="relative mx-2 mt-2 px-10 py-8 mb-8 bg-[#EFF3F4] p-6 rounded-xl">

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
                            <textarea name="nama_peserta" required placeholder="Nama Peserta" readonly
                                class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">{{ $wisataluarnegeri->nama_peserta }}</textarea>

                            <!-- NIK/No. KTP -->
                            <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">NIK/No. KTP</label>
                            <textarea readonly placeholder="NIK/No. KTP" name="nik" required
                                class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">0002001212000001</textarea>

                            <!-- NIK/No. KTP -->
                            <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">Jenis Kelamin</label>
                            <textarea readonly placeholder="NIK/No. KTP" name="nik" required
                                class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">Laki-laki</textarea>
                        </div>

                        <!-- Kolom Kanan -->
                        <div>

                            <!-- Tempat Lahir -->
                            <label class="block text-sm mb-2 font-medium text-gray-700">Tempat Lahir</label>
                            <textarea name="tempat_lahir" required placeholder="Tempat Lahir" readonly
                                class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">Banyumas</textarea>

                            <!-- Tanggal Lahir -->
                            <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">Tanggal Lahir</label>
                            <input name="tanggal_lahir" value="2025-04-07" required type="date" readonly
                                class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none"></input>
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
                                            <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto"
                                                class="w-10 h-10 rounded-full">
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <div class="flex justify-center items-center">
                                                Sukardi Santari
                                            </div>
                                        </td>
                                        <td class="px-10 py-4 text-center">
                                            <div
                                                class="flex justify-center rounded-md py-2 items-center bg-purple-200 text-purple-400">
                                                Perempuan
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <div class="flex justify-center items-center">
                                                3302000303010001
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <div
                                                class="flex justify-center items-center gap-2 bg-green-200 text-green-500 py-2 px-4 rounded-md w-fit mx-auto">
                                                Suami - Istri
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
                        <h2 class="text-lg font-semibold">Akun</h2>
                    </div>

                    <!-- Form -->
                    <div class="grid grid-cols-2 gap-6">
                        <!-- Kolom Kiri -->
                        <div>
                            <!-- No. Paspor -->
                            <label class="block text-sm mb-2 font-medium text-gray-700">Username</label>
                            <textarea name="no_paspor" required placeholder="Username" readonly
                                class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">Faiz Al Fatih</textarea>

                            <!-- Issuing office -->
                            <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">Kata sandi</label>
                            <textarea name="issuing_office" required placeholder="Kata sandi" readonly
                                class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">#FaizAlFatih2493</textarea>
                        </div>

                        <!-- Kolom Kanan -->
                        <div>
                            <!-- No. Paspor -->
                            <label class="block text-sm mb-2 font-medium text-gray-700">No. Telepon</label>
                            <textarea name="no_paspor" required placeholder="No. Telepon" readonly
                                class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">085321769853</textarea>

                            <!-- Issuing office -->
                            <label class="block text-sm mb-2 font-medium text-gray-700 mt-4">Email</label>
                            <textarea name="issuing_office" required placeholder="Email@gmail.com" readonly
                                class="w-full h-[50px] bg-white text-sm px-2 py-1 border rounded-md mt-1 resize-none">faizalfth@gmail.com</textarea>
                        </div>
                    </div>
                </div>
            </div>
        @break
    @endforeach
</div>
@endsection
