@props(['dataWLN'])

<div class="relative mx-2 px-10 py-8 mb-2 bg-[#EFF3F4] p-6 rounded-xl">
    <!-- Judul -->
    <div class="text-left mb-6">
        <h2 class="text-lg font-semibold">Hubungan</h2>
    </div>

    <!-- Data Hubungan -->
    <div class="mt-6">
        <label class="block text-md mb-3 font-medium text-gray-700">Data</label>
        <div class="overflow-x-auto mt-1 rounded-xl">
            <table id="dataHubunganTable" class="w-full min-w-max rounded-xl text-md font-semibold bg-white text-left rtl:text-right text-gray-500">
                <thead class="text-md text-gray-700">
                    <tr class=" border-b text-center">
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3"></th>
                        <th scope="col" class="px-6 py-3">Nama Jamaah</th>
                        <th scope="col" class="px-6 py-3">Jenis Kelamin</th>
                        <th scope="col" class="px-6 py-3">NIK/No. KTP</th>
                        <th scope="col" class="px-6 py-3">Hubungan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Akan diisi secara dinamis -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tambah Data Hubungan -->
    <div class="mt-8">
        <label class="block text-md mb-3 font-medium text-gray-700">Tambah Data</label>

        <!-- Input Search -->
        <div class="relative mb-4">
            <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            <input type="text" id="searchInput" placeholder="Cari data"
                class="pl-12 pr-4 py-4 w-[400px] h-[40px] border text-black rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Tabel Tambah -->
        <div class="overflow-x-auto mt-1 rounded-xl">
            <table id="tableTambahData" class="w-full min-w-max rounded-xl text-md font-semibold bg-white text-left rtl:text-right text-gray-500">
                <thead class="text-md text-gray-700">
                    <tr class=" border-b text-center">
                        <th scope="col" class="px-6 py-3"></th>
                        <th scope="col" class="px-6 py-3"></th>
                        <th scope="col" class="px-6 py-3">Nama Jamaah</th>
                        <th scope="col" class="px-6 py-3">Jenis Kelamin</th>
                        <th scope="col" class="px-6 py-3">NIK/No. KTP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataWLN as $wisataluarnegeri)
                        <tr class="data-row bg-white hover:bg-gray-50 text-black text-center">
                            <td class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap">
                                <div class="flex justify-center items-center">
                                    <input type="checkbox"
                                        class="checkbox-input w-5 h-5 rounded border-gray-300 text-green-500 focus:ring-green-500"
                                        data-id="{{ $wisataluarnegeri->id }}"
                                        data-nama="{{ $wisataluarnegeri->nama_peserta }}"
                                        data-jk="{{ $wisataluarnegeri->jenis_kelamin }}"
                                        data-nik="{{ $wisataluarnegeri->nik }}"
                                        data-foto="{{ asset('storage/' . $wisataluarnegeri->foto_peserta) }}">
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/' . $wisataluarnegeri->foto_peserta) }}" alt="Foto"
                                    class="w-10 h-10 rounded-full">
                            </td>
                            <td class="px-6 py-4 text-center">{{ $wisataluarnegeri->nama_peserta }}</td>
                            <td class="px-10 py-4 text-center">
                                <div class="flex justify-center rounded-md py-2 items-center bg-purple-200 text-purple-400">
                                    {{ $wisataluarnegeri->jenis_kelamin }}
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">{{ $wisataluarnegeri->nik }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- SCRIPT -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const checkboxes = document.querySelectorAll(".checkbox-input");
        const dataHubunganTable = document.querySelector("#dataHubunganTable tbody");
        const searchInput = document.getElementById("searchInput");
        const rows = document.querySelectorAll(".data-row");

        let hubunganData = JSON.parse(localStorage.getItem("hubunganData")) || [];

        function renderHubunganRows() {
            dataHubunganTable.innerHTML = ""; // Clear
            hubunganData.forEach((item, index) => {
                const row = document.createElement("tr");
                row.id = "hubungan-row-" + item.id;
                row.className = "bg-white hover:bg-gray-50 text-black text-center";
                row.innerHTML = `
                    <td class="px-6 py-4 text-center">${index + 1}</td>
                    <td class="px-6 py-4">
                        <img src="${item.foto}" class="w-10 h-10 rounded-full" alt="Foto">
                    </td>
                    <td class="px-6 py-4 text-center">${item.nama}</td>
                    <td class="px-10 py-4 text-center">
                        <div class="flex justify-center rounded-md py-2 items-center bg-purple-200 text-purple-400">
                            ${item.jk}
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">${item.nik}</td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex justify-center items-center gap-2 bg-red-200 text-red-500 py-2 px-4 rounded-md w-fit mx-auto">
                            <span>Hubungan</span>
                            <i class="fa-solid fa-angle-right">-</i>
                        </div>
                    </td>
                `;
                dataHubunganTable.appendChild(row);
            });
        }

        // Load awal dari localStorage
        renderHubunganRows();

        // Ceklis otomatis dari localStorage
        checkboxes.forEach((checkbox) => {
            const id = checkbox.dataset.id;
            if (hubunganData.some(item => item.id === id)) {
                checkbox.checked = true;
            }

            checkbox.addEventListener("change", function () {
                const id = this.dataset.id;
                const nama = this.dataset.nama;
                const jk = this.dataset.jk;
                const nik = this.dataset.nik;
                const foto = this.dataset.foto;

                if (this.checked) {
                    if (!hubunganData.some(item => item.id === id)) {
                        hubunganData.push({ id, nama, jk, nik, foto });
                        localStorage.setItem("hubunganData", JSON.stringify(hubunganData));
                        renderHubunganRows();
                    }
                } else {
                    hubunganData = hubunganData.filter(item => item.id !== id);
                    localStorage.setItem("hubunganData", JSON.stringify(hubunganData));
                    renderHubunganRows();
                }
            });
        });

        // Fungsi pencarian
        searchInput.addEventListener("keyup", function () {
            const keyword = this.value.toLowerCase();
            rows.forEach(row => {
                const nama = row.children[2].textContent.toLowerCase();
                const jk = row.children[3].textContent.toLowerCase();
                const nik = row.children[4].textContent.toLowerCase();

                const match = nama.includes(keyword) || jk.includes(keyword) || nik.includes(keyword);
                row.style.display = match ? "" : "none";
            });
        });
    });
</script>
