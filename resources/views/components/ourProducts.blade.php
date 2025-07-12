@php

    $products = [
        ["title" => "Для зброї", "subtitle" => "Усе необхідне для обслуговування, зберігання та покращення стрілецької зброї: аксесуари, тюнінг, комплектуючі та засоби догляду.", "anchor" => "", "picture" => asset('assets/picForGun.svg')],
        ["title" => "Медицина", "subtitle" => "Тактична медицина та першочергова допомога: турнікети, аптечки, гемостатичні засоби, перев’язувальні матеріали та інше.", "anchor" => "", "picture" => asset('assets/picMedkit.svg')],
        ["title" => "РЕБ / РЕР", "subtitle" => "Засоби радіоелектронної боротьби та розвідки: глушилки, детектори сигналів, антени, системи моніторингу й інше спеціалізоване обладнання.", "anchor" => "", "picture" => asset('assets/picReb.svg')],
        ["title" => "Для рацій", "subtitle" => "Аксесуари та комплектуючі для тактичного зв’язку: радіостанції, гарнітури, кабелі, PTT-кнопки, антени та засоби кріплення.", "anchor" => "", "picture" => asset('assets/picRadio.svg')],
        ["title" => "Для дронів", "subtitle" => "Все для FPV і розвідувальних дронів: батареї, комплектуючі, камери, ПІДи, системи зв’язку, антени та запчастини.", "anchor" => "", "picture" => asset('assets/picDrone.svg')],
    ]

@endphp


<div class="ourProductsContainer">
    <h1>{{ $content['title'] }}</h1>
    <hr />
    <ul class="productCards {{ $content['class'] ?? "" }}">
        @foreach ($products as $product)
            <li class="productCard">
                <x-picture-tag src="{{ $product['picture'] }}" />
                <div class="cardContent">
                    <h4>{{ $product['title'] }}</h4>
                    <p>{{ $product['subtitle'] }}</p>
                </div>
                @include("ui.secondaryBtn", [
                    "content" => [
                        'text' => "Переглянути",
                        'class' => "cardBtn",
                        'iconRight' => "ph-bold ph-arrow-up-right icon",
                        'styles' => 'font-size: 28px'
                    ]
                ])
                    </li>
        @endforeach
    </ul>


</div>