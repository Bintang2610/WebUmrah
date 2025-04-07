document.addEventListener("DOMContentLoaded", function () {
    const uploadIcon = document.getElementById("uploadIcon");
    const fileInput = document.getElementById("fileInput");

    // Saat ikon diklik, trigger input file
    if (uploadIcon && fileInput) {
        uploadIcon.addEventListener("click", function () {
            fileInput.click();
        });
    }

    // Fungsi preview gambar
    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const previewImg = document.getElementById("previewImage");
                previewImg.src = e.target.result;
                previewImg.classList.remove("hidden");
            };
            reader.readAsDataURL(file);
        }
    }

    // Saat file dipilih, tampilkan preview
    if (fileInput) {
        fileInput.addEventListener("change", previewImage);
    }
});
