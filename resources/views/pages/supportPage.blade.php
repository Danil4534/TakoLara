<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title> @vite(['resources/scss/app.scss', 'resources/js/app.js'])
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
            <h1>Підтримати</h1>
        </section>
        <section>
            @include("components.details")
        </section>
    </main>
</body>
@include('modal.contactModal')
@include('modal.cartModal')
@include('modal.headerModal')
<footer>
    @include("components.footer")
</footer>

</html>