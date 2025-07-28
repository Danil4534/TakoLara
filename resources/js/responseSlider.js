document.addEventListener("DOMContentLoaded", () => {
    document.querySelector('.responseSlider') &&
    new Swiper('.responseSlider', {
        slidesPerView: 2, 
        slidesPerGroup: 2,
        spaceBetween: 16,
        loop: true,
        keyboard: {
            enabled: true
        },
        pagination: {
            el: ".slider_bottom_nav",
            clickable: true
        },
        navigation: {
            nextEl: "#nextBtn",
            prevEl: "#prevBtn"
        },
        breakpoints: {
            375: {
                slidesPerView: 2,
                spaceBetween: 16
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 32
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 32
            },
            1440: {
                slidesPerView: 4,
                spaceBetween: 32
            },
            1920: {
                slidesPerView: 4,
                spaceBetween: 32
            }
        }
    });
});