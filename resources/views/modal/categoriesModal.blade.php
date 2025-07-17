@php
    $products = [
        ["title" => "Для зброї", "route" => "weapon.page", "subtitle" => "Усе необхідне для обслуговування, зберігання та покращення стрілецької зброї: аксесуари, тюнінг, комплектуючі та засоби догляду.", "picture" => asset('assets/picForGun.svg')],
        ["title" => "Медицина", "route" => "medkits.page", "subtitle" => "Тактична медицина та першочергова допомога: турнікети, аптечки, гемостатичні засоби, перев’язувальні матеріали та інше.", "picture" => asset('assets/picMedkit.svg')],
        ["title" => "Для рацій", "route" => "radio.page", "subtitle" => "Аксесуари та комплектуючі для тактичного зв’язку: радіостанції, гарнітури, кабелі, PTT-кнопки, антени та засоби кріплення.", "picture" => asset('assets/picRadio.svg')],
        ["title" => "РЕБ / РЕР", "route" => "reb.page", "subtitle" => "Засоби радіоелектронної боротьби та розвідки: глушилки, детектори сигналів, антени, системи моніторингу й інше спеціалізоване обладнання.", "picture" => asset('assets/picReb.svg')],
        ["title" => "Для дронів", "route" => "drones.page", "subtitle" => "Все для FPV і розвідувальних дронів: батареї, комплектуючі, камери, ПІДи, системи зв’язку, антени та запчастини.", "picture" => asset('assets/picDrone.svg')],
    ]
@endphp

<div id="categoriesModal" class="categoriesModal">
    <div class="categoriesModalContent" id="categoriesModalContent">
        <ul class="categories">
            @foreach ($products as $product)
                <li class="category">
                    <div class="productCardHeader">
                        <div class="leftSideUpBox">
                            <span></span>
                        </div>
                        <x-picture-tag src="{{ $product['picture'] }}" />
                    </div>
                    <div class="cardContent">
                        <button onclick="window.location.href='{{ route($product['route']) }}'">{{ $product['title'] }}<i
                                class="ph ph-arrow-up-right"></i></button>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>