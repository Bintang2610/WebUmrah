@props(['dataTransaksi'])


<div class="w-dvh mx-8 my-8 px-6 py-10 bg-white text-white rounded-2xl">
    <!-- Navbar -->
    <div class="flex items-center justify-between">
        <!-- Header Dashboard -->
        <div class="px-2">
            <h2 class="text-xl font-medium text-black">Transaksi Terbaru</h2>
        </div>
    </div>

    <div class="relative overflow-x-auto mt-4 mb-2 sm:rounded-lg">
        <table class="w-full text-md font-semibold text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-md text-gray-700 dark:text-gray-400">
                <tr class=" border-b">
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jumlah
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataTransaksi as $transaksi)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="{{ asset('/images/foto.jpeg') }}" alt="Foto" class="w-10 h-10 rounded-full">
                            {{-- Atau kalau mau pakai foto asli dari database --}}
                            {{-- <img src="{{ asset('storage/' . $transaksi->foto_bukti_transaksi) }}" alt="Foto" class="w-10 h-10 rounded-full"> --}}
                        </th>
                        <td class="px-6 py-4">
                            {{ $transaksi->nama_peserta }}
                        </td>
                        <td class="px-6 py-4">
                            {{ \Carbon\Carbon::parse($transaksi->tanggal_pembayaran)->translatedFormat('d F Y') }}
                        </td>
                        <td class="px-6 py-4 text-green-500">
                            Rp{{ number_format($transaksi->total_tagihan, 0, ',', '.') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
