document.addEventListener("DOMContentLoaded", () => {
        document.querySelector('.productSlider') &&
    new Swiper('.productSlider', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 16,
        loop: true,
        keyboard: {
            enabled: true
        },
        pagination: {
            el: ".swiper-pagination",
            type: 'bullets',      
            clickable: true      
        },

        scrollbar:{
            el:'.swiper-scrollbar',
                    draggable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
    });
});