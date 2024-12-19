
let slideIndex = 0;
showSlides();

// Automatische slideshow
function showSlides() {
    const slides = document.getElementsByClassName("slide");
    const dots = document.getElementsByClassName("dot");

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].classList.remove("active");
    }

    slideIndex++;
    if (slideIndex > slides.length) slideIndex = 1;

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].classList.add("active");

    setTimeout(showSlides, 5000); 
}


function changeSlide(n) {
    slideIndex += n - 1;
    if (slideIndex < 0) slideIndex = 0;
    showSlides();
}


function currentSlide(n) {
    slideIndex = n - 1;
    showSlides();
}1