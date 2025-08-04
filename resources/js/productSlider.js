document.addEventListener("DOMContentLoaded", () => {
    const slider = document.querySelector('.productSlider');
    if (slider && !slider.classList.contains('swiper-initialized')) {
        new Swiper('.productSlider', {
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 16,
      
            keyboard: { enabled: true },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true
            },
            navigation: {
                nextEl: ".swiper-button-next-product",
                prevEl: ".swiper-button-prev-product"
            },
        });
    }
});