<div id="contactModal" class="modal">
    <div class="modal-content">
        <i class="ph ph-x close-btn" id="closeContactBtn"></i>
        <h4>Зв'язатися</h4>
        <p>Залиште своє запитання або повідомлення у формі нижче.</p>
        <form class="contactForm" action="{{ route('contactFormSubmit') }}" method="POST">
            @csrf
            <div class="userData">
                @include("ui.input", [
                'content' => [
                "label" => "Ім'я",
                "placeholder" => "Введіть ім'я",
                "name" => "name"
                ]
                ])
               
                @include("ui.input", [
                'content' => [
                "label" => "Номер телефону",
                "placeholder" => "+380",
                "name" => "phoneNumber"
                ]
                ])
            </div>
            @include("ui.input", [
            'content' => [
            "label" => "Пошта",
            "placeholder" => "Введіть пошту",
            "name" => "email",
            "type" => "email"
            ]
            ])
            @include("ui.input", [
            'content' => [
            "label" => "Тема",
            "placeholder" => "Оберіть тему",
            "name" => "theme",
            'type'=>'select',
        'options' => [
            '1' => 'Опція 1',
            '2' => 'Опція 2',
            '3' => 'Опція 3',
    ]
            ]
            ])
            @include("ui.textarea", [
            'content' => [
            "label" => "Коментар",
            "placeholder" => "Коментар",
            "name" => "comment"
            ]
            ])
            <button id="contactBtnSubmit" type="submit">Надіслати</button>
        </form>
    </div>
</div>