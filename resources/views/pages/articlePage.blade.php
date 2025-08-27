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
    <title>Text Page</title>
</head>

<body>
    @include("components.header")
    <main>
        <section>
            @include('components.textPageFirstSection')
        </section>
        <section>
            @include('components.details')
        </section>
    </main>



</body>
<footer>
    @include('components.footer')

</footer>
@include('modal.categoriesModal')
@include('modal.contactModal')
@include('modal.preOrderModal')
@include("modal.headerModal")
@include('modal.successModal')
@include('modal.previewModal')

</html>