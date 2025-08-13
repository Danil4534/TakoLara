document.addEventListener('DOMContentLoaded', () => {
    const previewTriggers = document.querySelectorAll('.previewTrigger');
    const previewModalContainer = document.querySelector('.previewModal__container');
    const previewModalBody = document.querySelector('.previewModal__Body');
    const previewModalCloseBtn = document.querySelector('#closePreviewModal');
    const previewImage = document.querySelector('#previewImage');

    previewTriggers.forEach(item => {
        item.addEventListener('click', () => {
            const imgSrc = item.getAttribute('data-img');
            if (imgSrc) {
                previewImage.src = imgSrc;
            }
            previewModalContainer.classList.add('active');
            previewModalBody.classList.add('active');
        });
    });

    previewModalBody.addEventListener('click', e => e.stopPropagation());

    previewModalCloseBtn.addEventListener('click', () => {
        previewModalContainer.classList.remove('active');
        previewModalBody.classList.remove('active');
        previewImage.src = '';
    });

    previewModalContainer.addEventListener('click', () => {
        previewModalContainer.classList.remove('active');
        previewModalBody.classList.remove('active');
        previewImage.src = '';
    });
});
