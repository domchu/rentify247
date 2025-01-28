const faqContainer = document.querySelector(".faq-container");
const faqLinks = document.querySelectorAll(".faq-link");
const searchInput = document.getElementById("search-input");
const heading = document.querySelector(".heading");
const dropdownMenu = document.getElementById("dropdown-menu");
const dropdownBtn = document.getElementById("dropdown-btn");
const selectedContainer = document.getElementById("selected-cont");
const selectedCategory = document.querySelector(".selected");
let currentCategory;

const html = function (selected) {
    selected.forEach(function (faq) {
        const faqItem = document.createElement("div");
        faqItem.classList.add("faq-item", "w-full");

        faqItem.innerHTML = `
        <div class="question-cont flex py-2 px-4 cursor-pointer">
            <img class="icon-image w-6 h-6 invert" src="../assets/icon-caret-right.svg" alt="caret-right" />
            <h1 class="question">${faq.question}</h1>
            
        </div>
        <div class="faq-answer hidden">
            <p class="answer-text">${faq.answer}</p>

             <div class="faq-reviews">
                <div>
                    <p class="review">Was this helpful?</p>
                 </div>
                <form>
                <button class="btn btn-right">yes</button>
                 <button class="btn btn-wrong">no</button>
                </form>
            </div>
        </div>
        `;

        const faqItems = faqItem.querySelectorAll(".question-cont");
        // console.log(faqItems);
        faqItems.forEach(function (item) {
            item.addEventListener("click", function (e) {
                if (
                    e.target.classList.contains("question") ||
                    e.target.classList.contains("icon-image")
                ) {
                    const faqAnswers = e.target
                        .closest(".faq-container")
                        .querySelectorAll(".faq-answer");
                    const faqAnswer = e.target
                        .closest(".faq-item")
                        .querySelector(".faq-answer");
                    const faqIcons = e.target
                        .closest(".faq-container")
                        .querySelectorAll(".icon-image");
                    const faqIcon = e.target
                        .closest(".faq-item")
                        .querySelector(".icon-image");
                    // console.log(faqAnswers);

                    const isAlreadyVisible =
                        !faqAnswer.classList.contains("hidden");

                    faqAnswers.forEach(function (faqAnswer, index) {
                        faqAnswer.classList.add("hidden");
                        faqIcons[index].src = "../assets/icon-caret-right.svg";
                    });

                    // console.log(faqAnswer);

                    if (isAlreadyVisible) {
                        faqAnswer.classList.add("hidden");
                        faqIcon.src = "../assets/icon-caret-right.svg";
                    } else {
                        faqAnswer.classList.remove("hidden");
                        faqIcon.src = "../assets/icon-caret-down.svg";
                    }
                }
            });
        });

        const correctBtn = faqItem.querySelector(".btn-right");
        const wrongBtn = faqItem.querySelector(".btn-wrong");

        correctBtn.addEventListener("click", function (e) {
            e.preventDefault();
            correctBtn.style.backgroundColor = "green";
            wrongBtn.style.backgroundColor = "#00246b";
        });

        wrongBtn.addEventListener("click", function (e) {
            e.preventDefault();
            wrongBtn.style.backgroundColor = "rgba(255, 0, 0, 0.864)";
            correctBtn.style.backgroundColor = "#00246b";
        });

        faqContainer.appendChild(faqItem);
    });
};

const displayFaqs = function (category) {
    faqContainer.innerHTML = "";

    const selectedFaq = faqs[category];
    // console.log("FAQs to render: " + selectedFaq);
    // console.log(selectedFaq);
    if (selectedFaq && selectedFaq.length > 0) {
        heading.innerHTML = category;
        selectedCategory.textContent = category;
        html(selectedFaq);
    } else {
        faqContainer.innerHTML = `<p class="error-message">No matching FAQs found</p>`;
    }

    currentCategory = category;
};
// console.log(faqLinks);

faqLinks.forEach(function (link) {
    link.addEventListener("click", function (e) {
        e.preventDefault();
        const category = link.dataset.category;

        faqLinks.forEach((link) => link.classList.remove("font-bold"));
        link.classList.add("font-bold");
        displayFaqs(category);
        searchInput.value = "";
        dropdownMenu.classList.add("hidden");
        dropdownBtn.classList.remove("active");
    });
});

if (faqLinks.length > 0) {
    const initialCategory = faqLinks[0];
    initialCategory.classList.add("font-bold");
    // console.log(initialCategory);
    displayFaqs(initialCategory.getAttribute("data-category"));
}

// currentCategory is like a stale state, it doesn't get updated immmediately category changes

searchInput.addEventListener("input", function (e) {
    // console.log(e.target.value);
    const searchValue = e.target.value.toLowerCase();
    let filteredFaqs = [];
    // console.log(searchValue);
    // console.log(faqs[currentCategory])
    if (currentCategory && faqs[currentCategory]) {
        filteredFaqs = faqs[currentCategory].filter((faq) =>
            faq.question.toLowerCase().includes(searchValue)
        );

        console.log("Search by Category");
    } else {
        // Search across all categories
        Object.values(faqs).forEach((categoryFaqs) => {
            filteredFaqs.push(
                ...categoryFaqs.filter((faq) =>
                    faq.question.toLowerCase().includes(searchValue)
                )
            );
        });
    }
    // console.log("Filtered faqs: ", filteredFaqs);
    // console.log("Current Category:", currentCategory);

    displayFaqs(filteredFaqs);

    faqContainer.innerHTML = "";

    html(currentCategory);
    if (filteredFaqs.length === 0) {
        faqContainer.innerHTML = `<p class="error-message">Search result not found</p>`;
    }

    if (searchValue.length < 1) {
        const initialCategory = faqLinks[0];
        initialCategory.classList.add("font-bold");
        displayFaqs(initialCategory.getAttribute("data-category"));
    } else {
        heading.textContent = "Frequently Asked Questions";
    }

    // console.log(searchValue);

    // console.log("FAQs Object:", faqs);

    // console.log(currentCategory);
});

selectedContainer.addEventListener("click", function () {
    dropdownMenu.classList.toggle("hidden");
    dropdownBtn.classList.toggle("active");

    if (!dropdownMenu.classList.contains("hidden")) {
        selectedContainer.classList.add("focus");
    } else {
        selectedContainer.classList.remove("focus");
    }
});
