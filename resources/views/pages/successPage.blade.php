<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/bold/style.css">
    @if (!app()->runningUnitTests())
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @endif
</head>

<body>
    @include('components.header')
    <main>
        <section class="successContent">
            <div class="successHeader">
                <h1>Успішно!</h1>
                <p>Дякуємо! Наш менеджер скоро зв'яжеться з вами для підтвердження деталей.</p>
            </div>
            <div class="btnSection">
                <button onclick="window.location.href='{{ route('home.page') }}'">На головну <i
                        class="ph-bold ph-arrow-up-right"></i></button>
                <button onclick="window.location.href='{{ route('support.page') }}'">Підтримати ТА-КО <i
                        class="ph-bold ph-arrow-up-right"></i></button>
            </div>
        </section>
    </main>
</body>
@include('modal.categoriesModal')
@include('modal.contactModal')
@include('modal.preOrderModal')
@include("modal.headerModal")

</html>