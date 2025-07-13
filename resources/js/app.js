import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
  const contactBtns = document.querySelectorAll("#btnConnect");
  const modalContact = document.querySelector("#contactModal");
  const closeModalContact = document.querySelector("#closeContactBtn");

 
  const burgerBtn = document.querySelector("#burger");
  const headerModalNav = document.querySelector("#hidden_header_nav");
  const headerContent = document.querySelector("#hidden_header_nav_content");
  const headerModalNavClose = document.querySelector("#closeBurger");


  burgerBtn?.addEventListener("click", () => {
    headerModalNav?.classList.add("active");
    headerContent?.classList.add("active");
    burgerBtn.classList.add("disabled");
    headerModalNavClose?.classList.add("active");
  });


  headerModalNavClose?.addEventListener("click", () => {
    headerModalNavClose.classList.remove("active");
    burgerBtn.classList.remove("disabled");
    headerModalNav?.classList.remove("active");
    headerContent?.classList.remove("active");
  });

  contactBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      modalContact?.classList.add("active");
    });
  });


  closeModalContact?.addEventListener("click", () => {
    modalContact?.classList.remove("active");
  });
});