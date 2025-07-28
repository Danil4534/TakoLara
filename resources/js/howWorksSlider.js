document.addEventListener("DOMContentLoaded", () => {
    new Swiper('.howWorkSlider', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 16,
        loop: true,
        keyboard: {
            enabled: true
        },
        pagination: {
            el: ".swiper-pagination-progressBar",
            type: "progressbar"     
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
    });
});