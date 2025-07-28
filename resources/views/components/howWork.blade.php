@php

$mapContent =[
['icon'=>"ph ph-binoculars", "text"=>"Ознайомитеся з пропозиціями"],
['icon'=>"ph ph-package", "text"=>"Додайте в передзамовлення"],
['icon'=>"ph ph-note-pencil", "text"=>"Заповніть форму"],
['icon'=>"ph ph-truck", "text"=>"Отримати посилку на НП"],
['icon'=>"ph ph-note-pencil", "text"=>"Задонатити (якщо/коли буде можливість)"],
];


$content=[
['icon'=>"ph ph-binoculars",
"title"=>'Ознайомитись з пропозиціями',
'subtitle'=>'Перегляньте наш каталог деталей для дронів і зброї, щоб знайти потрібні компоненти. Ми регулярно оновлюємо асортимент відповідно до актуальних потреб фронту.',],

['icon'=>"ph ph-package",
"title"=>'Додайте в передзамовлення',
'subtitle'=>'Залиште заявку на передзамовлення і ми повідомимо вас, щойно товар буде доступний до відправки.',],

['icon'=>"ph ph-note-pencil",
"title"=>'Заповніть форму',
'subtitle'=>'Залиште заявку на передзамовлення і ми повідомимо вас, щойно товар буде доступний до відправки.',],



['icon'=>"ph ph-truck",
"title"=>'Отримати посилку на НП',
'subtitle'=>'Перевірте посилку – перед відходом відкрийте та переконайтеся, що все на місці.',],

['icon'=>"ph ph-note-pencil",
"title"=>'Задонатити',
'subtitle'=>'Оберіть спосіб донату – банківський переказ, PayPal, Patreon, криптовалюта або інші варіанти, які пропонує автор/проєкт.',],


]
@endphp


<div class="howWorkContainer">
    <h1>Як ми працюємо?</h1>
    <hr>

    <div class="howWorkContent">

        <div class="howWorkMap">
            <div class="howWorkMapTitle">
                <h1>Розробка та тестування</h1>
                <p>
                    Створюємо прототипи, випробовуємо їх у реальних умовах і вдосконалюємо до ідеального стану.
                </p>
            </div>

            @foreach ( $mapContent as $item )
            <div class="mapItem">
                <i class="{{ $item['icon'] }}"></i>
                <p>{{$item['text'] }}</p>
            </div>
            @endforeach
            <div class="howWorkMapMoveItem"></div>
        </div>
        <div class="sliderWrapper">
            <div class="swiper howWorkSlider">
                <div class="swiper-wrapper">
                    @foreach ($content as $slide)
                    <div class="swiper-slide">
                        <i class="{{ $slide['icon'] }}"></i>
                        <h2>{{ $slide['title'] }}</h2>
                        <p>{{ $slide['subtitle'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <button onclick="window.location.href='{{ route('home.page') }}'">Переглянути категорії <i class="ph ph-arrow-up-right"></i></button>
            <div class="swiper-pagination-progressBar"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>


</div>