<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/bold/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    @if (!app()->runningUnitTests())
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @endif
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Tako</title>
</head>

<body>
    @include("components.header")
    <main>
        <section>


            @include('components.banner', [
            'content' => [
            'banner' => "assets/drone.svg",
            'class' => "backgroundBanner",
            'bannerTitle' => 'Технології у тилу - сила на передовій',
            'subtitle' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco",
            "btnActive" => true,
            "subtitleActive" => false
            ]
            ])
        </section>
        <section id="about">
            @include("components.about")
        </section>
        <section id="partners">
            @include("components.partners")
        </section>
        <section id="">
            @include("components.numbers")
        </section>
        <section id="howWorks">
            @include('components.howWork')
        </section>
        <section id="ourProducts">
            @include("components.categories", ['content' => ['title' => "Наші вироби"]])
        </section>
        <section id="responses">
            @include('components.responses')
        </section>
        <section>
            @include("components.gratitude")
        </section>
        <section>
            @include('components.media')
        </section>
        <section>
            @include('components.details')
        </section>
    </main>
    <footer>
        @include('components.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
            });

            successModalContent.addEventListener('click', (e) => {
                e.stopPropagation();
            });

            successModalClose.forEach((element) => {
                element.addEventListener('click', () => {
                    successModal.classList.remove('active');
                    successModalContent.classList.remove('active');
                });
            });
        });
    </script>
    @endif
</body>
@include('modal.categoriesModal')
@include('modal.contactModal')
@include('modal.preOrderModal')
@include("modal.headerModal")
@include('modal.successModal')

</html>