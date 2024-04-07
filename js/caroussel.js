// Pas besoin de les déclarer en dehors puisqu'ils seront utilisés uniquement à l'intérieur du DOMContentLoaded
document.addEventListener('DOMContentLoaded', function () {
    let slideIndex = 0;
    const slides = document.querySelectorAll('.slide');

    // La fonction showSlide affiche la diapositive avec l'index actuel
    function showSlide(index) {
        slides.forEach((slide) => {
            slide.style.display = "none";
        });
        slides[index].style.display = "block";
    }

    // Cette fonction change l'index actuel et affiche la nouvelle diapositive
    function changeSlide(n) {
        slideIndex += n;
        if (slideIndex >= slides.length) { slideIndex = 0; }
        if (slideIndex < 0) { slideIndex = slides.length - 1; }
        showSlide(slideIndex);
    }

    // Attacher les gestionnaires de clic aux boutons
    document.querySelector('.prev').addEventListener('click', function () {
        changeSlide(-1);
    });

    document.querySelector('.next').addEventListener('click', function () {
        changeSlide(1);
    });

    // Afficher la première diapositive
    showSlide(slideIndex);
});
