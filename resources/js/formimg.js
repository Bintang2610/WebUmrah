document.addEventListener("DOMContentLoaded", function () {
    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const previewImg = document.getElementById("previewImage");
                const previewContainer = document.getElementById("previewContainer");

                // Menampilkan gambar yang diunggah
                previewImg.src = e.target.result;
                previewImg.classList.remove("hidden");

                // Sembunyikan teks "Seret dan lepas atau klik untuk pilih gambar"
                previewContainer.classList.add("hidden");
            };
            reader.readAsDataURL(file);
        }
    }

    // Event listener untuk input file
    const fileInput = document.getElementById("fileInput");
    if (fileInput) {
        fileInput.addEventListener("change", previewImage);
    }
});
