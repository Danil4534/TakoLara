@php
$typeOfContact = [
['id' => 0, 'title' => 'Номер телефону', 'active' => true],
['id' => 1, 'title' => 'Viber', 'active' => false],
['id' => 2, 'title' => 'Telegram', 'active' => false],
['id' => 3, 'title' => 'Whatsup', 'active' => false],
['id' => 4, 'title' => 'Signal', 'active' => false],
];


@endphp

@dump(session()->all())

<div class="formContainer">
    <div class="container">
        <div class="box">
            <h1 class="checkoutTitle">Оформити замовлення</h1>
            <div class="productBox">
                @foreach ( $products as $index=>$product )
                <x-pre-order-product-card :preOrderProduct="$product" :index="$index" id="checkoutProductCardMobile" />
                @endforeach
            </div>
        </div>
        <form action="{{ route('checkout.submit') }}" class="checkoutForm" method="POST">
            @csrf
            <div class="formLeftSide">
                <div class="userData box">

                    <h6>Контакти замовника</h6>
                    <div class="inputsWrapper">
                        @include("ui.input", ['content' => ["label" => "Прізвище", "placeholder" => "Введіть прізвище", "name" => "surname", "required"=>'true']])
                        @include("ui.input", ['content' => ["label" => "Ім'я", "placeholder" => "Введіть ім'я", "name" => "firstname", "required"=>'true']])
                        @include("ui.input", ['content' => ["label" => "По батькові", "placeholder" => "Введіть", "name" => "middlename", "required"=>'true']])
                        @include("ui.input", ['content' => ["label" => "Номер телефону", "placeholder" => "+380", "name" => "phoneNum", "required"=>'true', 'value'=> "+380",]])
                    </div>
                </div>

                <div class="userData box">
                    <h6>Доставка</h6>
                    <div class="inputsWrapper">
                        @include("ui.input", ['content' => ["label" => "Місто / Населений пункт", "placeholder" => "Введіть", "name" => "city", 'type' => 'select', "icon" => "ph ph-magnifying-glass", "required"=>'true','options' => [ '1'=>'Київ', '2'=>'Миколаїв','3'=>'Вінниця', '4'=>"Харків"]]])
                        @include("ui.input", ['content' => ["label" => "Номер відділення", "placeholder" =>"Оберіть номер відділення НП", "name" => "department", 'type' => 'select', "required"=>'true', 'options' => [ '1' => '557234', '2' => '557234']]])
                    </div>
                </div>

                <div class="userData box">
                    <h6>Зручний метод зв'язку</h6>
                    @include("components.filters", ['typeOfContact' => $typeOfContact])
                    @include("ui.input", [
                    'content' => [
                    "label" => "Номер телефону",
                    "placeholder" => "+380 ",
                    "name" => "contact_phone",
                    "id" => "contactPhoneInput",
                    "required"=>'true'
                    ]
                    ])

                </div>
            </div>

            <div class="userData box">
                <h6 class="title">Передзамовлення</h6>
                <div class="productBox">
                    @foreach ((array) $products as $index=>$product )
                    <x-pre-order-product-card :preOrderProduct="$product" :index="$index" id="checkoutProductCard" />
                    @endforeach
                </div>
                <div class="priceData">
                    <hr>
                    <p>собівартість виробів:</p>
                    <h6 id="totalPrice">0,00<span>грн</span></h6>
                    <div class="forSolders">
                        <p><span class="icon">🪖</span> Для військових — <span>безкоштовно</span></p>
                    </div>
                </div>

                <hr>
                <div class="btnSection">
                    <button class="btnConfirm" type="submit" name="action" value="confirm" disabled>
                        Підтвердити
                    </button>

                    <button class="btnCheckout" id="btnRedirectSupportSuccess" type="submit" name="action" value="support" disabled>
                        Підтвердити та підтримати
                    </button>
                </div>
                <span>
                    Залиште заявку — ми зв’яжемось із вами для уточнення деталей і підтвердження замовлення.
                    <br />Жодної передоплати до підтвердження. Все просто і чесно.
                </span>
            </div>
        </form>
    </div>
</div>

<script>
    const contactOptions = ["Номер телефону", "Viber", "Telegram", "Whatsup", "Signal"];

    function handleMethodToConnect(selectedIndex) {
        const labels = document.querySelectorAll('.radioLabel');
        const phoneInputLabel = document.querySelector('label[for="contactPhoneInput"]');
        const phoneInput = document.getElementById('contactPhoneInput');

        labels.forEach((label, index) => {
            const input = label.querySelector('input[type="radio"]');
            if (index === selectedIndex) {
                input.checked = true;
                label.classList.add('active');

                if (phoneInputLabel) phoneInputLabel.innerText = contactOptions[selectedIndex];
                if (phoneInput) {
                    phoneInput.placeholder = contactOptions[selectedIndex] === "Номер телефону" ? "+380 " : contactOptions[selectedIndex];
                }
            } else {
                label.classList.remove('active');
            }
        });
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const desktopCards = document.querySelectorAll('#checkoutProductCard');
        const mobileCards = document.querySelectorAll('#checkoutProductCardMobile');
        const totalPriceElement = document.getElementById('totalPrice');

        function formatPrice(value) {
            return value.toFixed(2).replace('.', ',');
        }

        function calcSum(cards) {
            let total = 0;
            cards.forEach(card => {
                if (card.offsetParent !== null) {
                    const cost = parseFloat(card.dataset.cost || '0');
                    const quantityInput = card.querySelector('.count-input');
                    const quantity = parseInt(quantityInput?.value || '1');
                    total += cost * quantity;
                }
            });
            return total;
        }

        function updateTotalPrice() {
            let sum = 0;
            if ([...desktopCards].some(card => card.offsetParent !== null)) {
                sum = calcSum(desktopCards);
            } else {
                sum = calcSum(mobileCards);
            }
            totalPriceElement.innerHTML = `${formatPrice(sum)}<span>грн</span>`;
        }

        [...desktopCards, ...mobileCards].forEach(card => {
            const decrementBtn = card.querySelector('.decrement');
            const incrementBtn = card.querySelector('.increment');
            const input = card.querySelector('.count-input');

            incrementBtn?.addEventListener('click', () => {
                input.value = parseInt(input.value) + 1;
                updateTotalPrice();
            });

            decrementBtn?.addEventListener('click', () => {
                input.value = Math.max(1, parseInt(input.value) - 1);
                updateTotalPrice();
            });

            input?.addEventListener('input', () => {
                if (!parseInt(input.value) || parseInt(input.value) < 1) {
                    input.value = 1;
                }
                updateTotalPrice();
            });
        });

        updateTotalPrice();
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const form = document.querySelector(".checkoutForm");
        const submitBtn = document.querySelector(".btnConfirm");
        const submitBtnSupport = document.querySelector(".btnCheckout");
        const checkForm = () => {
            const requiredFields = form.querySelectorAll("[required]");
            let allFilled = true;
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    allFilled = false;
                }
            });
            submitBtn.disabled = !allFilled;
            submitBtnSupport.disabled = !allFilled
        };
        checkForm();
        form.addEventListener("input", checkForm);
    });
</script>