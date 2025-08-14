document.addEventListener('DOMContentLoaded', () => {
    const previewTriggers = document.querySelectorAll('.previewTrigger');
    const previewModalContainer = document.querySelector('.previewModal__container');
    const previewModalBody = document.querySelector('.previewModal__Body');
    const previewModalCloseBtn = document.querySelector('#closePreviewModal');
    const swiperWrapper = document.querySelector('#previewSwiperWrapper');
    let swiperInstance;

    previewTriggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            let imgs = [];
            const imgsAttr = trigger.getAttribute('data-imgs');

            try {
                imgs = JSON.parse(imgsAttr);
                if (!Array.isArray(imgs)) imgs = [imgs]; 
            } catch (e) {
              
                imgs = [imgsAttr];
            }

            const currentIndex = parseInt(trigger.getAttribute('data-current')) || 0;
            swiperWrapper.innerHTML = '';

            imgs.forEach(img => {
                const slide = document.createElement('div');
                slide.classList.add('swiper-slide');
                const image = document.createElement('img');
                image.src = img;
                slide.appendChild(image);
                swiperWrapper.appendChild(slide);
            });

            if (swiperInstance) swiperInstance.destroy(true, true);
            swiperInstance = new Swiper('.previewSwiper', {
                initialSlide: currentIndex,
                slidesPerView: 'auto',
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true,
                },
                loop: imgs.length > 1, 
            });

            previewModalContainer.classList.add('active');
            previewModalBody?.classList.add('active');
        });
    });

    previewModalBody?.addEventListener('click', e => e.stopPropagation());

    const closeModal = () => {
        previewModalContainer.classList.remove('active');
        previewModalBody?.classList.remove('active');
        swiperWrapper.innerHTML = '';
        if (swiperInstance) swiperInstance.destroy(true, true);
    };

    previewModalCloseBtn?.addEventListener('click', closeModal);
    previewModalContainer?.addEventListener('click', closeModal);
});
