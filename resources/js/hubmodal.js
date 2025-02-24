document.addEventListener("DOMContentLoaded", function () {
    function openHub() {
        document.getElementById("hubmodal").classList.remove("hidden");
    }

    function closeHub() {
        document.getElementById("hubmodal").classList.add("hidden");
    }

    // Event listener untuk tombol buka modal
    document.querySelectorAll("[data-open-hub]").forEach(btn => {
        btn.addEventListener("click", openHub);
    });

    // Event listener untuk tombol tutup modal
    document.querySelectorAll("[data-close-hub]").forEach(btn => {
        btn.addEventListener("click", closeHub);
    });
});
