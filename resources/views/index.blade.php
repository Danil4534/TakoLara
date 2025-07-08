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
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    <title>Tako</title>
</head>

<body>
    @include("header")
    <main>
        <section>
            @include('banner')
        </section>
        <section>
            @include("about")
        </section>
        <section>
            @include("partners")
        </section>
        <section>
            @include("numbers")
        </section>
        <section>
            @include("ourProducts")
        </section>
        <section>
            @include("details")
        </section>
        <section>
            @include('responses')
        </section>
    </main>
    <footer>
        @include('footer')
    </footer>
</body>

</html>