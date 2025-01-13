"use strict";

const allSlides = document.querySelectorAll("#slide");
const allContent = document.querySelectorAll("#content");
const nextBtn = document.querySelector("#next");
const prevBtn = document.querySelector("#prev");

let currentSlides = 0;

allSlides[0].classList.remove("opacity-0");
allSlides[0].classList.add("opacity-100");
allContent[0].classList.remove("opacity-0");
allContent[0].classList.add("opacity-100");

function displayPrevSlide() {
    if (currentSlides > 0) {
        currentSlides--;
    }

    allSlides.forEach((slide, i) => {
        slide.classList.remove("opacity-100");
        slide.classList.add("opacity-0");
        slide.style.transform = `translateX(-${currentSlides * 100}%)`;
        allContent[i].classList.remove("opacity-100");
        allContent[i].classList.add("opacity-0");
    });
    allSlides[currentSlides].classList.remove("opacity-0");
    allSlides[currentSlides].classList.add("opacity-100");
    allContent[currentSlides].classList.remove("opacity-0");
    allContent[currentSlides].classList.add("opacity-100");
}

function displayNextSlide() {
    currentSlides++;
    if (currentSlides === allSlides.length) currentSlides = 0;

    allSlides.forEach((slide, i) => {
        slide.classList.remove("opacity-100");
        slide.classList.add("opacity-0");
        slide.style.transform = `translateX(-${currentSlides * 100}%)`;
        allContent[i].classList.remove("opacity-100");
        allContent[i].classList.add("opacity-0");
    });
    allSlides[currentSlides].classList.remove("opacity-0");
    allSlides[currentSlides].classList.add("opacity-100");
    allContent[currentSlides].classList.remove("opacity-0");
    allContent[currentSlides].classList.add("opacity-100");
}



nextBtn.addEventListener("click", displayNextSlide);
prevBtn.addEventListener("click", displayPrevSlide);

setInterval(displayNextSlide, 3000);
