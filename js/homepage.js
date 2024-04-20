export function homepage() {
    const hamburger = document.querySelector(".hamburger");

    hamburger.addEventListener("click", () => {
        const listResponsive = document.querySelector(".listResponsive");
        listResponsive.classList.toggle("show");
        hamburger.classList.toggle("active");
    });
}