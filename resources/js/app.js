import "./bootstrap";
import "flowbite";

const menuToggle = document.getElementById("menu-toggle");
const mobileMenu = document.getElementById("mobile-menu");

menuToggle.addEventListener("click", () => {
    const isExpanded = menuToggle.getAttribute("aria-expanded") === "true";

    mobileMenu.classList.toggle("hidden", isExpanded);
    menuToggle.setAttribute("aria-expanded", String(!isExpanded));
});
