import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
  const contactBtns = document.querySelectorAll("#btnConnect");
  const modalContact = document.querySelector("#contactModal");
  const closeModalContact = document.querySelector("#closeContactBtn");
  const openPreOrderBtn = document.querySelectorAll("#btnPreOrder");
  const modalPreOrder = document.querySelector("#hidden_preOrder");
  const modalPreOrderContent = document.querySelector("#hidden_preOrder_content")
  const closeModalPreOrder= document.querySelector('#closePreOrderBtn');
 console.log(openPreOrderBtn)
  const burgerBtn = document.querySelector("#burger");
  const headerModalNav = document.querySelector("#hidden_header_nav");
  const headerContent = document.querySelector("#hidden_header_nav_content");
  const headerModalNavClose = document.querySelector("#closeBurger");


openPreOrderBtn.forEach(btn=>
  btn?.addEventListener("click",()=>{
    modalPreOrder?.classList.add("active");
    modalPreOrderContent?.classList.add("active");
  })
)

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

  closeModalPreOrder?.addEventListener("click", ()=>{
     modalPreOrder?.classList.remove("active");    modalPreOrderContent?.classList.remove("active");
  })
});