let slideIndex = 0;
const slides = document.querySelectorAll(".slide");

function showSlides(n) {
    slides.forEach(slide => slide.style.display = "none");
    slides[n].style.display = "block";
}

function changeSlide(step) {
    slideIndex += step;
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }
    showSlides(slideIndex);
}

showSlides(slideIndex);
