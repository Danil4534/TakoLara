<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medkits</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/bold/style.css">
</head>

<body>
    @include('components.header')
    <main>
        <section>
            @include ("components.banner", [
                'content' => [
                    'banner' => "assets/medkitBg.svg",
                    'class' => "weaponBg",
                    'bannerTitle' => 'Медицина',
                    'subtitle' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco",
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
            <section>
        @include('components.ourProducts', ['content' => ["title" => "Iнші категорії", "class" => 'cardsGrid']])
    </section>
        <section>
            @include('components.details')
        </section>
    </main>
</body>@include('modal.contactModal')
@include('modal.cartModal')
<footer>
    @include('components.footer')
</footer>

</html>