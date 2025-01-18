"use strict";

const track = document.querySelector("#track"); // The review container
const reviews = document.querySelectorAll(".review"); // All review cards
const prevButton = document.querySelector("#prev-review-btn");
const nextButton = document.querySelector("#next-review-btn");

let currentIndex = 0; // Start at the first review

// Function to get the current number of cards per view based on screen size
const getCardsPerView = () => {
    if (window.innerWidth >= 1024) return 3; // Large screens
    if (window.innerWidth >= 884) return 2; // Medium screens
    return 1; // Small screens
};

// Function to calculate the translate step
const getTranslateStep = () => {
    const cardWidth = track.firstElementChild.getBoundingClientRect().width;
    const gap = parseFloat(window.getComputedStyle(track).gap || 0);
    return ((cardWidth + gap) / track.getBoundingClientRect().width) * 100;
};

// Update the carousel translation
const updateCarousel = () => {
    const translateStep = getTranslateStep();
    const translateX = currentIndex * -translateStep;
    track.style.transform = `translateX(${translateX}%)`;
};

// Next button event
nextButton.addEventListener("click", () => {
    const cardsPerView = getCardsPerView();
    if (currentIndex < reviews.length - cardsPerView) {
        currentIndex++;
        updateCarousel();
    }
});

// Previous button event
prevButton.addEventListener("click", () => {
    if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
    }
});

// Recalculate on window resize
window.addEventListener("resize", () => {
    currentIndex = 0; // Reset to the first slide on resize
    updateCarousel();
});

// Initialize the carousel
updateCarousel();
