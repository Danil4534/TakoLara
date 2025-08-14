<div id="contactModal" class="modal">
    <div class="modal-content" id="contactModalContent">
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
                "name" => "name",
                "required"=>'true'
                ]
                ])

                @include("ui.input", [
                'content' => [
                "label" => "Номер телефону",
                "placeholder" => "+380",
                'value'=> "+380",
                "name" => "phoneNum",
                "required"=>'true'
                ]
                ])
            </div>
            @include("ui.input", [
            'content' => [
            "label" => "Пошта",
            "placeholder" => "Введіть пошту",
            "name" => "email",
            "type" => "email","required"=>'true'
            ]
            ])
            @include("ui.input", [
            'content' => [
            "label" => "Тема",
            "placeholder" =>"Оберіть тему",
            "name" => "theme",
            'type'=>'select',
            "required"=>'true',
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
            <button id="contactBtnSubmit" disabled type="submit" name="action" value="success">Надіслати</button>
        </form>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const form = document.querySelector(".contactForm");
        const submitBtn = document.getElementById("contactBtnSubmit");
        const checkForm = () => {
            const requiredFields = form.querySelectorAll("[required]");
            let allFilled = true;
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    allFilled = false;
                }
            });
            submitBtn.disabled = !allFilled;
        };
        checkForm();
        form.addEventListener("input", checkForm);
    });
</script>