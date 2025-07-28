document.addEventListener('DOMContentLoaded', () => {
    const steps = document.querySelectorAll('.mapItem');
    const moveItem = document.querySelector('.howWorkMapMoveItem');
    const stepCount = steps.length;
    let current = 0;

    const screenWidth = window.innerWidth;
    const totalCycleTime = screenWidth < 768 ? 5000 : 5000;
    const intervalDuration = totalCycleTime / stepCount;

    setInterval(() => {
        steps.forEach(el => el.classList.remove('activeStep')); 
        const el = steps[current];
        el.classList.add('activeStep');
        current = (current + 1) % stepCount;
    }, intervalDuration);

   
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('activeStep');
            }
        });
    }, {
        root: document.querySelector('.howWorkVector'),
        threshold: 1
    });

    steps.forEach(item => observer.observe(item));
});