document.addEventListener("DOMContentLoaded", function () {
    function openDel() {
        document.getElementById("delmodal").classList.remove("hidden");
    }

    function closeDel() {
        document.getElementById("delmodal").classList.add("hidden");
    }

    // Event listener untuk tombol buka modal
    document.querySelectorAll("[data-open-del]").forEach(btn => {
        btn.addEventListener("click", openDel);
    });

    // Event listener untuk tombol tutup modal
    document.querySelectorAll("[data-close-del]").forEach(btn => {
        btn.addEventListener("click", closeDel);
    });
});
