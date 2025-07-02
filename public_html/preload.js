document.addEventListener("DOMContentLoaded", function() {
    const preloader = document.querySelector(".content-fade");

    if (!sessionStorage.getItem('preloadShown')) {
        sessionStorage.setItem('preloadShown', 'true');

        if (preloader) {
            preloader.style.display = "block"; // Mostrar el preloader
            setTimeout(() => {
                preloader.classList.add("fade-out");
                setTimeout(() => {
                    preloader.style.display = "none"; // Ocultar el preloader después de la animación
                }, 1000); // Ajusta según la duración de la animación
            }, 2000); // Tiempo de precarga antes de desaparecer
        }
    } else {
        if (preloader) preloader.style.display = "none"; // Ocultar el preloader si ya se mostró
    }
});
