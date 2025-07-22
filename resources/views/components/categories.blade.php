@php

$currentRoute = Route::currentRouteName();

$products = collect([
["title" => "Для зброї", "route" => "weapon.page", "subtitle" => "Усе необхідне для обслуговування, зберігання та покращення стрілецької зброї: аксесуари, тюнінг, комплектуючі та засоби догляду.", "picture" => asset('assets/picForGun.svg')],
["title" => "Медицина", "route" => "medkits.page", "subtitle" => "Тактична медицина та першочергова допомога: турнікети, аптечки, гемостатичні засоби, перев’язувальні матеріали та інше.", "picture" => asset('assets/picMedkit.svg')],
["title" => "Для рацій", "route" => "radio.page", "subtitle" => "Аксесуари та комплектуючі для тактичного зв’язку: радіостанції, гарнітури, кабелі, PTT-кнопки, антени та засоби кріплення.", "picture" => asset('assets/picRadio.svg')],
["title" => "РЕБ / РЕР", "route" => "reb.page", "subtitle" => "Засоби радіоелектронної боротьби та розвідки: глушилки, детектори сигналів, антени, системи моніторингу й інше спеціалізоване обладнання.", "picture" => asset('assets/picReb.svg')],
["title" => "Для дронів", "route" => "drones.page", "subtitle" => "Все для FPV і розвідувальних дронів: батареї, комплектуючі, камери, ПІДи, системи зв’язку, антени та запчастини.", "picture" => asset('assets/picDrone.svg')],
])->filter(fn($product) => $product['route'] !== $currentRoute)

@endphp


<div class="ourProductsContainer">
    <h1>{{ $content['title'] }}</h1>
    <hr />
    <ul
        class="productCards {{ $content['class'] ?? "" }} {{ Route::currentRouteName() !== 'home.page' ? "scrollCards" : "" }}">
        @foreach ($products as $product)
        <li class="productCard">
            <div class="productCardHeader">
                <div class="leftSideUpBox">
                    <span></span>
                </div>
                <x-picture-tag src="{{ $product['picture'] }}" />
            </div>
            <div class="cardContent">
                <h4>{{ $product['title'] }}</h4>
                <p>{{ $product['subtitle'] }}</p>
            </div>
            <x-secondary-btn text="Переглянути" class="cardBtn" route="{{$product['route']}}" iconRight="ph-bold ph-arrow-up-right icon" styles="font-size: 28px"></x-secondary-btn>
        </li>
        @endforeach
    </ul>


</div>