document.addEventListener('DOMContentLoaded', () => {
    const steps = document.querySelectorAll('.mapItem');
    const movingItem = document.querySelector('.howWorkMapMoveItem');

    if (steps && movingItem) {
        function checkOverlap(el1, el2) {
            const rect1 = el1.getBoundingClientRect();
            const rect2 = el2.getBoundingClientRect();
            return !(
                rect1.right < rect2.left ||
                rect1.left > rect2.right ||
                rect1.bottom < rect2.top ||
                rect1.top > rect2.bottom
            );
        }
        setInterval(() => {
            steps.forEach(step => {
                if (checkOverlap(step, movingItem)) {
                    step.classList.add('activeStep');
                } else {
                    step.classList.remove('activeStep');
                }
            });
        }, 100); 
    }
});