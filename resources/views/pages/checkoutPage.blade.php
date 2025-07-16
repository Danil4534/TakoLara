<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include("components.header")
    <main>
        <section>
            @include("components.checkoutForm")
        </section>
    </main>
</body>
<footer>
    <div class="footerCheckoutContainer">
        <p>
            © 2025 TAKO. All rights reserved
        </p>
    </div>
</footer>
@include('modal.contactModal')
@include('modal.preOrderModal')
@include("modal.headerModal")

</html>