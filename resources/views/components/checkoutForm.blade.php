@php
$typeOfContact = [
[
'id' => 0,
"title" => "Номер телефону",
'active' => true
],
[
'id' => 1,
"title" => "Viber",
'active' => false
],
[
'id' => 2,
"title" => "Telegram",
'active' => false
],
[
'id' => 3,
"title" => "Whatsup",
'active' => false
],
[
'id' => 4,
"title" => "Signal",
'active' => false
],
];

$chooseProducts = session('chooseProduct')

@endphp

<div class="formContainer">
    <h1 class="checkoutTitle box">Оформити замовлення</h1>
    <form action="{{  route('checkout.submit')}}" class="checkoutForm" method="POST">
        @csrf
        <div class="formLeftSide">
            <div class="userData box">
                <h6>Контакти замовника</h6>
                <div class="inputsWrapper">

                    @include("ui.input", [
                    'content' => [
                    "label" => "Прізвище",
                    "placeholder" => "Введіть прізвище",
                    "name" => "surname"
                    ]
                    ])
                    @include("ui.input", [
                    'content' => [
                    "label" => "Ім'я",
                    "placeholder" => "Введіть ім'я",
                    "name" => "firstname"
                    ]
                    ])
                    @include("ui.input", [
                    'content' => [
                    "label" => "По батькові",
                    "placeholder" => "Введіть ",
                    "name" => "middlename"
                    ]
                    ]) @include("ui.input", [
                    'content' => [
                    "label" => "Номер телефону",
                    "placeholder" => "+380 ",
                    "name" => "phone"
                    ]
                    ])
                </div>
    
            </div>
            <div class="userData box">
                <h6>Доставка</h6>
                  <div class="inputsWrapper">
                @include("ui.input", [
                'content' => [
                "label" => "Місто / Населений пункт",
                "placeholder" => "Введіть ",
                "name" => "city",
                "icon"=>"ph ph-magnifying-glass"
              
                ]
                ])
                @include("ui.input", [
                'content' => [
                "label" => "Номер відділення",
                "placeholder" => "Введіть ім'я",
                "name" => "firstname",
                  'type'=>'select',    'options' => [
                '1' => '557234',
                '2' => '557234',
                '3' => '557234',
        ]
                ]
                ])
            </div>

            </div>
            <div class="userData box">
                <h6>Зручний метод зв'язку</h6>
                @include("components.filters", ['typeOfContact' => $typeOfContact])
                @include("ui.input", [
                'content' => [
                "label" => "Номер телефону",
                "placeholder" => "+380 ",
                "name" => "phone"
                ]
                ])
            </div>
        </div>

        <div class="userData box">
            <h6 class="title">Передзамовлення</h6>
            <div class="priceData">
                <hr>
                <p>собівартість виробів:</p>
                <h6>140,00 <span>грн</span></h6>
                <div class="forSolders">
                    <p><span class="icon">🪖</span> Для військових — <span>безкоштовно</span></p>
                </div>
            </div>
            <hr>
            <div class="btnSection">
                <button class="btnConfirm" type="submit" id="contactBtnSubmit">Підтвердити</button>
                @include('ui.secondaryBtn', ['content' => ['text' => 'Підтвердити та підтримати', 'class' =>
                'btnCheckout']])
            </div>

            <span>
                Залиште заявку — ми зв’яжемось із вами для уточнення деталей і підтвердження замовлення.
                <br />Жодної передоплати до підтвердження. Все просто і чесно.
            </span>
        </div>
    </form>
</div>
