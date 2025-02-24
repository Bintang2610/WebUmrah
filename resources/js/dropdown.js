document.addEventListener("DOMContentLoaded", function () {
    const dropdownButton = document.getElementById("dropdownButton");
    const dropdownMenu = document.getElementById("dropdownMenu");
    const selectedOption = document.getElementById("selectedOption");
    const dropdownItems = document.querySelectorAll(".dropdown-item");
    const dropdownIcon = document.getElementById("dropdownIcon");

    // Toggle dropdown saat tombol diklik
    dropdownButton.addEventListener("click", function () {
        dropdownMenu.classList.toggle("hidden");

        // Rotasi ikon <i> (kanan → bawah saat terbuka, bawah → kanan saat tertutup)
        if (dropdownMenu.classList.contains("hidden")) {
            dropdownIcon.classList.remove("fa-chevron-down");
            dropdownIcon.classList.add("fa-chevron-right");
        } else {
            dropdownIcon.classList.remove("fa-chevron-right");
            dropdownIcon.classList.add("fa-chevron-down");
        }
    });

    // Event listener untuk setiap item dropdown
    dropdownItems.forEach(item => {
        item.addEventListener("click", function (event) {
            event.preventDefault();

            // Update teks di tombol dropdown
            selectedOption.textContent = this.getAttribute("data-value");

            // Hapus kelas aktif dari semua item dropdown
            dropdownItems.forEach(i => i.classList.remove("bg-blue-500", "text-white"));

            // Tambahkan kelas aktif ke item yang dipilih
            this.classList.add("bg-blue-500", "text-white");

            // Sembunyikan dropdown setelah memilih opsi
            dropdownMenu.classList.add("hidden");

            // Kembalikan ikon ke panah kanan
            dropdownIcon.classList.remove("fa-chevron-down");
            dropdownIcon.classList.add("fa-chevron-right");
        });
    });

    // Menutup dropdown jika klik di luar
    document.addEventListener("click", function (event) {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add("hidden");

            // Pastikan ikon panah kembali ke kanan saat dropdown ditutup
            dropdownIcon.classList.remove("fa-chevron-down");
            dropdownIcon.classList.add("fa-chevron-right");
        }
    });

    // Set default pilihan yang aktif (5 Tahun)
    dropdownItems.forEach(item => {
        if (item.getAttribute("data-value") === "5 Tahun") {
            item.classList.add("bg-blue-500", "text-white");
        }
    });

    // Set panah awalnya mengarah ke kanan
    dropdownIcon.classList.add("fa-chevron-right");
});
