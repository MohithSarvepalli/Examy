const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#stu-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
    container.classList.add("stu-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("stu-up-mode");
});