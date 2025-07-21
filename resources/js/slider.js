document.addEventListener('DOMContentLoaded',()=>{

  const slider = document.getElementById("sliderContent");  if (!slider) return;
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");
        const cards = slider.querySelectorAll(".slider__item");
        const navDots = document.querySelectorAll(".slider__nav_item");
        const cardsPerPage = 2;
        const cardWidth = cards[0].offsetWidth;
        const gap = 32;
        const scrollStep = (cardWidth + gap) * cardsPerPage;
        let currentPage = 0;
        function updateActiveDot(index) {
        navDots.forEach(dot => dot.classList.remove("active"));
        if (navDots[index]) {
        navDots[index].classList.add("active");
        }
        }
        function updateButtons() {
        const maxPage = Math.ceil(cards.length / cardsPerPage) - 1;
        prevBtn.disabled = currentPage <= 0; nextBtn.disabled=currentPage>= maxPage;
            }
            prevBtn.addEventListener("click", () => {
            if (currentPage > 0) {
            currentPage--;
            slider.scrollTo({
            left: scrollStep * currentPage,
            behavior: "smooth"
            });
            updateActiveDot(currentPage);
            updateButtons();
            }
            });
            nextBtn.addEventListener("click", () => {
            const maxPage = Math.ceil(cards.length / cardsPerPage) - 1;
            if ( currentPage < maxPage) { currentPage++; slider.scrollTo({ left: scrollStep * currentPage,
                behavior: "smooth" }); updateActiveDot(currentPage); updateButtons(); } }); navDots.forEach((dot,
                index)=> {
                dot.addEventListener("click", () => {
                currentPage = index;
                slider.scrollTo({
                left: scrollStep * index,
                behavior: "smooth"
                });
                updateActiveDot(index);
                updateButtons();
                });
                });
                updateActiveDot(currentPage);
                updateButtons(); 
})
      