import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
  const contactBtns = document.querySelectorAll("#btnConnect");
  const modalContact = document.querySelector("#contactModal");
  const closeModalContact = document.querySelector("#closeContactBtn");
  const openPreOrderBtn = document.querySelectorAll("#btnPreOrder");
  const modalPreOrder = document.querySelector("#hidden_preOrder");
  const modalPreOrderContent = document.querySelector("#hidden_preOrder_content")
  const closeModalPreOrder= document.querySelector('#closePreOrderBtn');
  const categoriesBtnOpen = document.querySelectorAll("#buttonSelectOpen")
  const categoriesBtnClose = document.querySelectorAll("#buttonSelectClose")
  const categoriesModal = document.querySelector('#categoriesModal')
  const categoriesModalContent = document.querySelector('#categoriesModalContent')

 categoriesBtnOpen.forEach((openBtn, index) => {
  openBtn.addEventListener('click', () => {
    openBtn.style.display = "none";
    const closeBtn = categoriesBtnClose[index];
    closeBtn.style.display = "flex";
    categoriesModal.classList.add("active");
    categoriesModalContent.classList.add("active")
  });
});

categoriesBtnClose.forEach((closeBtn, index) => {
  closeBtn.addEventListener('click', () => {
    closeBtn.style.display = "none";
    const openBtn = categoriesBtnOpen[index];
    openBtn.style.display = "flex";
    categoriesModal.classList.remove("active");
    categoriesModalContent.classList.remove("active")
  });
});

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


    function animateNumber(element, start, end, duration) {
        const range = end - start;
        let startTime = null;
        function step(currentTime) {
            if (!startTime) startTime = currentTime;
            const progress = currentTime - startTime;
            const progressRatio = Math.min(progress / duration, 1);
            const value = Math.floor(progressRatio * range + start);
            element.childNodes[0].textContent = value.toLocaleString("uk-UA");
            if (progress < duration) {
                requestAnimationFrame(step);
            }
        }

        requestAnimationFrame(step);
    }

    document.addEventListener("DOMContentLoaded", () => {
        const options = {
            threshold: 0.5
        };
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.getAttribute("data-value"), 10);
                    animateNumber(el, 0, target, 1000);
                    observer.unobserve(el);
                }
            });
        }, options);

        document.querySelectorAll(".animateNumber").forEach(el => {
            observer.observe(el);
        });
    });