<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    @if (!app()->runningUnitTests())
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @endif
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/bold/style.css">
</head>

<body>
    @include("components.header")
    <main>
        <section class="box">
            <h1 class="supportTitle">Підтримати</h1>
        </section>
        <section>
            @include("components.details")
        </section>
    </main>
</body>

<footer>
    @include("components.footer")
</footer>
@include('modal.categoriesModal')
@include('modal.contactModal')
@include('modal.preOrderModal')
@include("modal.headerModal")
@include('modal.successModal')

</html>

@if(session('show_success_modal_cont'))
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const successModal = document.querySelector('#successModal');
        const successModalContent = document.querySelector('#successModalContent');
        const successModalClose = document.querySelectorAll('#closeSuccessModal');

        if (successModal && successModalContent) {
            successModal.classList.add('active');
            successModalContent.classList.add('active');
        }
        successModal.addEventListener('click', () => {
            successModal.classList.remove('active');
            successModalContent.classList.remove('active');
        })
        successModalContent.addEventListener('click', (e) => {
            e.stopPropagation()

        })
        successModalClose.forEach((element) => {
            element.addEventListener('click', (e) => {

                successModal.classList.remove('active');
                successModalContent.classList.remove('active');
            });
        });
    });
</script>
@endif