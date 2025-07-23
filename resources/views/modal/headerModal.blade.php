@php
$links = [
[
"text" => "Головна",
"anchor" => ""
],
[
"text" => "Про нас",
"anchor" => ""
],
[
"text" => "Як ми працюємо?",
"anchor" => ""
],
[
"text" => "Партнери",
"anchor" => ""
],
[
"text" => "Відгуки",
"anchor" => ""
],
];
$products = [
[
"text" => "Для зброї",
"anchor" => route('weapon.page')
],
[
"text" => "Медицина",
"anchor" => route('medkits.page')
],
[
"text" => "Для рацій",
"anchor" => route('radio.page')
],
[
"text" => "РЕБ / РЕР",
"anchor" => route('reb.page')
],
[
"text" => "Для дронів",
"anchor" => route('drones.page')
],
]
@endphp

<div id="hidden_header_nav" class="headerNav">

    <div class="header_nav_container" id="hidden_header_nav_content">
        <div class="nav_content_box">
            <h1>Вироби</h1>
            @foreach ($products as $product)
            <a href={{ $product['anchor'] }}>{{ $product['text'] }}
                <i class="ph ph-arrow-up-right iconLink"></i>
            </a>
            @endforeach
        </div>
        <div class="nav_content_box">
            @foreach ($links as $link)
            <a href="">{{ $link['text'] }}</a>

            @endforeach
        </div>
        <div class="nav_content_box">
            @include("components.social-links")
            <x-secondary-btn id="btnConnect" text="Зв'язатися" class="cardBtn" styles="font-size: 28px" modal="#contactModal"></x-secondary-btn>

        </div>
    </div>
</div>