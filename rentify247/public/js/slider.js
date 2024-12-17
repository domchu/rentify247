"use strict";

console.log("hello");
const allSlides = document.querySelectorAll("#slide");
const allContent = document.querySelectorAll("#content");
const nextBtn = document.querySelector("#next");
const prevBtn = document.querySelector("#prev");

let currentSlides = 0;

function displayPrevSlide() {
    if (currentSlides > 0) {
        currentSlides--;
    }

    allSlides.forEach((slide, i) => {
        slide.classList.add("hidden");
        allContent[i].classList.add("hidden");
    });

    allSlides[currentSlides].classList.remove("hidden");
    allContent[currentSlides].classList.remove("hidden");
}

function displayNextSlide() {
    currentSlides++;

    if (currentSlides === allSlides.length) currentSlides = 0;

    allSlides.forEach((slide, i) => {
        slide.classList.add("hidden");
        allContent[i].classList.add("hidden");
    });

    allSlides[currentSlides].classList.remove("hidden");
    allContent[currentSlides].classList.remove("hidden");
}

displayPrevSlide();

nextBtn.addEventListener("click", displayNextSlide);
prevBtn.addEventListener("click", displayPrevSlide);

setInterval(displayNextSlide, 3000);
