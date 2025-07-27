<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weapon</title>
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
    @include("components.header")
    <main>
        <section>
            @include ("components.banner", [
            'content' => [
            'banner' => "assets/weaponBanner.svg",
            'class' => "backgroundBanner weaponBg",
            'bannerTitle' => 'Для зброї',
            'subtitle' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco",
            "btnActive" => false,
            "subtitleActive" => true
            ]
            ])
        </section>
        <section>
            @include("components.about")
        </section>
        <section>
            @include('components.products')
        </section>
        <section id="ourProducts">
            @include("components.categories", ['content' => ['title' => "Інші Категорії"]])
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

</html>