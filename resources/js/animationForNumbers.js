 function animateNumber(element, start, end, duration) {
        const range = end - start;
        let startTime = null;
        function step(currentTime) {
            if (!startTime) startTime = currentTime;
            const progress = currentTime - startTime;
            const progressRatio = Math.min(progress / duration, 1);
            const value = Math.floor(progressRatio * range + start);
            element.childNodes[0].textContent = value.toLocaleString("uk-UA");
            if (progress < duration) {
                requestAnimationFrame(step);
            }
        }

        requestAnimationFrame(step);
    }

    document.addEventListener("DOMContentLoaded", () => {
        const options = {
            threshold: 0.5
        };
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.getAttribute("data-value"), 10);
                    animateNumber(el, 0, target, 1000);
                    // observer.unobserve(el);
                }
            });
        }, options);
        document.querySelectorAll(".animateNumber").forEach(el => {
            observer.observe(el);
        });
    });