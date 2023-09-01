let currentSlide = 0;
const slides = document.querySelectorAll(".slide");
const prevButton = document.querySelector(".prev-button");
const nextButton = document.querySelector(".next-button");

function showSlide(n) {
    if (n < 0) {
        currentSlide = slides.length - 1;
    } else if (n >= slides.length) {
        currentSlide = 0;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[currentSlide].style.display = "block";
}

function nextSlide() {
    currentSlide++;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide--;
    showSlide(currentSlide);
}

nextButton.addEventListener("click", nextSlide);
prevButton.addEventListener("click", prevSlide);

function autoSlide() {
    nextSlide();
}

let intervalId = setInterval(autoSlide, 3000); // Altera o slide a cada 3 segundos (3000 milissegundos)

// Pausa a transição automática quando o mouse entra no carrossel
document.querySelector(".carousel").addEventListener("mouseenter", () => {
    clearInterval(intervalId);
});

// Continua a transição automática quando o mouse sai do carrossel
document.querySelector(".carousel").addEventListener("mouseleave", () => {
    intervalId = setInterval(autoSlide, 3000);
});

showSlide(currentSlide);