document.addEventListener("DOMContentLoaded", () => {
    if (document.querySelector('.productSlider')) {
        const thumbs = [
            'assets/product.svg',
            'assets/product.svg',
            'assets/product.svg'
        ];

        new Swiper('.productSlider', {
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 16,loop: true,
            keyboard: { enabled: true },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true
            },
            navigation: {
                nextEl: "#swiper-button-next-product",
                prevEl: "#swiper-button-prev-product"
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function(index, className) {
                    return `<img class="${className}" src="${thumbs[index]}" ></img>`;
                }
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 16
                }
            }
        });
    }
});