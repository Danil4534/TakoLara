
    document.addEventListener('DOMContentLoaded', () => {
        const totalPriceElements = document.querySelectorAll('#totalPrice');
        const cards = document.querySelectorAll('.productCard');

        function formatPrice(value) {
            return value.toFixed(2).replace('.', ',');
        }
        function calcSum() {
            let total = 0;
            cards.forEach(card => {
                const costAttr = card.dataset.cost || '0';
                const cost = parseFloat(costAttr.toString().replace(',', '.')) || 0;
                const quantityInput = card.querySelector('.count-input');
                const quantity = parseInt(quantityInput?.value || 1);
                total += cost * quantity;
            });
            return total;
        }
        function updateTotalPrice() {
            const sum = calcSum();
        
            totalPriceElements.forEach((element) => element.innerHTML = `${formatPrice(sum)}<span>грн</span>`);
        }
        cards.forEach(card => {
            const decrementBtn = card.querySelector('.decrement');
            const incrementBtn = card.querySelector('.increment');
           
            incrementBtn?.addEventListener('click', () => {
                updateTotalPrice();
            });
            decrementBtn?.addEventListener('click', () => {
                updateTotalPrice();
            });
        });
        updateTotalPrice();
    });
