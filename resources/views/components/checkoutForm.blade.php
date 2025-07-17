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
    ]
@endphp

<div class="formContainer">
    <h1 class="checkoutTitle box">Оформити замовлення</h1>
    <form action="" class="checkoutForm">
        @csrf

        <div class="userData box">
            <h6>Контакти замовника</h6>
            @include("ui.input", [
                'content' => [
                    "label" => "Прізвище",
                    "placeholder" => "Введіть прізвище",
                    "name" => "name"
                ]
            ])
                                                                                                                                                                                                                                                                @include("ui.input", [
                                                                                                                                                                                                                                                                    'content' => [
                                                                                                                                                                                                                                                                        "label" => "Ім'я",
                                                                                                                                                                                                                                                                        "placeholder" => "Введіть ім'я",
                                                                                                                                                                                                                                                                        "name" => "name"
                                                                                                                                                                                                                                                                    ]
                                                                                                                                                                                                                                                                ])
@include("ui.input", [
    'content' => [
        "label" => "По батькові",
        "placeholder" => "Введіть ",
        "name" => "name"
    ]
])       @include("ui.input", [
    'content' => [
        "label" => "Номер телефону",
        "placeholder" => "+380 ",
        "name" => "name"
    ]
])
                                                                                                                        
                                                                               </div><div class="userData box">
                                                                                                                <h6>Доставка</h6>
                                                            @include("ui.input", [
                                                                'content' => [
                                                                    "label" => "Місто / Населений пункт",
                                                                    "placeholder" => "Введіть ",
                                                                    "name" => "name"
                                                                ]
                                                            ])
    @include("ui.input", [
        'content' => [
            "label" => "Ім'я",
            "placeholder" => "Введіть ім'я",
            "name" => "name"
        ]
    ])

</div>
<div class="userData box">
<h6>Зручний метод зв'язку</h6>
@include("components.filters", ['typeOfContact' => $typeOfContact])
@include("ui.input", [
    'content' => [
        "label" => "Номер телефону",
        "placeholder" => "+380 ",
        "name" => "name"
    ]
])


</div>
<div class="userData box">
    <div class="priceData">
        <p>собівартість виробів:</p>
        <h6>140,00 <span>грн</span></h6>
         <div class="forSolders">
            <p><span class="icon">🪖</span> Для військових — <span>безкоштовно</span></p>
        </div>
    </div>
    <hr>
    <div class="btnSection">
        <button class="btnConfirm">Підтвердити</button>
        @include('ui.secondaryBtn', ['content' => ['text' => 'Підтвердити та підтримати', 'class' => 'btnCheckout']])
    </div>

    <span>
        Залиште заявку — ми зв’яжемось із вами для уточнення деталей і підтвердження замовлення. 
        <br/>Жодної передоплати до підтвердження. Все просто і чесно.
    </span>
</div>
</form>
</div>
