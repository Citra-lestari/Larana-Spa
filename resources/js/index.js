const fourCardSwiper = new Swiper(".fourCardSwiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        320: { slidesPerView: 1.5  },
        640: { slidesPerView: 2.5},
        1024: { slidesPerView: 4 },
    }
});


const threeCardSwiper = new Swiper(".threeCardSwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        320: { slidesPerView: 1 },
        640: { slidesPerView: 1.5},
        1024: { slidesPerView: 3 },
    }
});
const blogCardSwiper = new Swiper(".blogCardSwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        320: { slidesPerView: 1.5 },
        640: { slidesPerView: 2.5},
        1024: { slidesPerView: 3 },
    }
});



const privacyPolicyModal = document.getElementById("privacy-policy-modal"); //mengambil element (id) yg ada di blade
const privacyPolicyOpeners = document.querySelectorAll(
    '[data-modal-open="privacy-policy-modal"]',
);
const privacyPolicyCloseButton = privacyPolicyModal.querySelector(
    "[data-modal-close]",
);

privacyPolicyOpeners.forEach((button) => {
    button.addEventListener("click", () => {
        privacyPolicyModal.classList.remove("hidden");
        privacyPolicyModal.classList.add("flex");
        privacyPolicyModal.setAttribute("aria-hidden", "false");
        document.body.classList.add("overflow-hidden");
        privacyPolicyCloseButton.focus();
    });
});

const closePrivacyPolicy = () => {
    privacyPolicyModal.classList.add("hidden");
    privacyPolicyModal.classList.remove("flex");
    privacyPolicyModal.setAttribute("aria-hidden", "true");
    document.body.classList.remove("overflow-hidden");
};

privacyPolicyCloseButton.addEventListener("click", closePrivacyPolicy);

privacyPolicyModal.addEventListener("click", (event) => {
    if (event.target === privacyPolicyModal) {
        closePrivacyPolicy();
    }
});

document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && privacyPolicyModal.getAttribute("aria-hidden") === "false") {
        closePrivacyPolicy();
    }
});
