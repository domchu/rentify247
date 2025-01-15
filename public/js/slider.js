"use strict";

// Select all slide elements and content elements
const allSlides = document.querySelectorAll(".slide");
const allContent = document.querySelectorAll(".content");

// Select the navigation buttons
const nextBtn = document.querySelector("#next");
const prevBtn = document.querySelector("#prev");

// Track the index of the currently visible slide
let currentSlides = 0;

// Initially display the first slide and its content
allSlides[0].classList.remove("opacity-0");
allSlides[0].classList.add("opacity-100");
allContent[0].classList.remove("opacity-0");
allContent[0].classList.add("opacity-100");

/**
 * Updates the visibility of slides and content based on the current slide index.
 */
function updateSlides() {
    allSlides.forEach((slide, i) => {
        if (i === currentSlides) {
            // For the active slide, translate it to the correct position and make it visible
            slide.style.transform = `translateX(-${currentSlides * 100}%)`;
            slide.classList.remove("opacity-0");
            slide.classList.add("opacity-100");
            allContent[i].classList.remove("opacity-0");
            allContent[i].classList.add("opacity-100");
        } else {
            // For non-active slides, hide them
            slide.classList.remove("opacity-100");
            slide.classList.add("opacity-0");
            allContent[i].classList.remove("opacity-100");
            allContent[i].classList.add("opacity-0");
        }
    });
}

/**
 * Displays the previous slide.
 * If the current slide is the first one, it loops back to the last slide.
 */
function displayPrevSlide() {
    currentSlides =
        currentSlides > 0 ? currentSlides - 1 : allSlides.length - 1;
    updateSlides();
}

/**
 * Displays the next slide.
 * If the current slide is the last one, it loops back to the first slide.
 */
function displayNextSlide() {
    currentSlides = (currentSlides + 1) % allSlides.length;
    updateSlides();
}

// Automatically move to the next slide every 3 seconds
let slideInterval = setInterval(displayNextSlide, 3000);

/**
 * Resets the auto-slide interval whenever a navigation button is clicked.
 */
function resetInterval() {
    clearInterval(slideInterval);
    slideInterval = setInterval(displayNextSlide, 3000);
}

// Event listener for the next button
nextBtn.addEventListener("click", () => {
    displayNextSlide();
    resetInterval();
});

// Event listener for the previous button
prevBtn.addEventListener("click", () => {
    displayPrevSlide();
    resetInterval();
});
