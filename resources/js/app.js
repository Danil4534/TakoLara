import './bootstrap';
import './slider'
document.addEventListener("DOMContentLoaded", function () {
  const contactBtns = document.querySelectorAll("#btnConnect");
  const modalContact = document.querySelector("#contactModal");
  const closeModalContactBtn = document.querySelector("#closeContactBtn");
  const modalContactContent = document.querySelector('#contactModalContent')
  const openPreOrderBtn = document.querySelectorAll("#btnPreOrder");
  const modalPreOrder = document.querySelector("#hidden_preOrder");
  const modalPreOrderContent = document.querySelector("#hidden_preOrder_content")
  const closeModalPreOrder= document.querySelector('#closePreOrderBtn');
  const categoriesBtnToggle = document.getElementById('buttonSelectToggle');
  const categoriesBtnToggleIcon = document.getElementById('toggleIcon');
  const categoriesModal = document.getElementById('categoriesModal');
  const categoriesModalContent = document.getElementById('categoriesModalContent');

  const burgerBtn = document.querySelector("#burger");
  const headerModalNav = document.querySelector("#hidden_header_nav");
  const headerContent = document.querySelector("#hidden_header_nav_content");
  const headerModalNavClose = document.querySelector("#closeBurger");



categoriesBtnToggle.addEventListener('click', () => {
  if (categoriesBtnToggleIcon.classList.contains('ph-caret-down')) {
    categoriesBtnToggleIcon.classList.remove('ph-caret-down');
    categoriesBtnToggleIcon.classList.add('ph-x');
    categoriesModal.classList.add("active");
    categoriesModalContent.classList.add("active");
  } else {
    categoriesBtnToggleIcon.classList.remove('ph-x');
    categoriesBtnToggleIcon.classList.add('ph-caret-down');
    categoriesModal.classList.remove("active");
    categoriesModalContent.classList.remove("active");
  }
});

 

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


  closeModalContactBtn?.addEventListener("click", () => {
    modalContact?.classList.remove("active");
  });

  closeModalPreOrder?.addEventListener("click", ()=>{
     modalPreOrder?.classList.remove("active");    modalPreOrderContent?.classList.remove("active");
  })
  modalPreOrder.addEventListener('click', ()=>{
     modalPreOrder?.classList.remove("active");    
     modalPreOrderContent?.classList.remove("active");
  })
  modalPreOrderContent.addEventListener('click', (e)=>{
  e.stopPropagation()
})
  modalContact.addEventListener('click', ()=>{
    modalContact.classList.remove('active')
    modalContactContent.classList.remove('active')
  })
 modalContactContent.addEventListener('click',(e)=>{
    e.stopPropagation()

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
                    // observer.unobserve(el);
                }
            });
        }, options);
        document.querySelectorAll(".animateNumber").forEach(el => {
            observer.observe(el);
        });
    });