document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("commentCarousel");
    
    // Saat hover, animasi berhenti, saat mouse keluar animasi lanjut
    carousel.addEventListener("mouseenter", () => {
        carousel.style.animationPlayState = "paused";
    });

    carousel.addEventListener("mouseleave", () => {
        carousel.style.animationPlayState = "running";
    });
});
