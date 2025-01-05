const toggleBtn = document.querySelector(".nav-toggle-btn");
const navMenu = document.querySelector(".nav-menu");
const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

toggleBtn.addEventListener("click", () => {
    navMenu.classList.toggle("active");
});

dropdownToggles.forEach((toggle) => {
    toggle.addEventListener("click", (e) => {
        e.target.nextElementSibling.classList.toggle("show");
    });
});

// document.addEventListener("click", (e) => {
//     navMenu.classList.remove("active");
// });
