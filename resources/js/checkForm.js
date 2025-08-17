    document.addEventListener("DOMContentLoaded", () => {
        const form = document.querySelector(".checkoutForm");
        const submitBtns = document.querySelectorAll(".btnConfirm, .btnCheckout"); 
        const checkForm = () => {
            const requiredFields = form?.querySelectorAll("[required]");
            let allFilled = true;
            requiredFields?.forEach(field => {
                if (!field.value.trim()) {
                    allFilled = false;
                }
            });
            submitBtns.forEach(btn => btn.disabled = !allFilled);
        };
        checkForm();
        form?.addEventListener("input", checkForm);
    });