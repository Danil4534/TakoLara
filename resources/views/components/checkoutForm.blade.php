@php
$typeOfContact = [
['id' => 0, 'title' => 'Номер телефону', 'active' => true],
['id' => 1, 'title' => 'Viber', 'active' => false],
['id' => 2, 'title' => 'Telegram', 'active' => false],
['id' => 3, 'title' => 'Whatsup', 'active' => false],
['id' => 4, 'title' => 'Signal', 'active' => false],
];
$chooseProducts = session('chooseProducts');
@endphp

<div class="formContainer">
    <div class="box">
        <h1 class="checkoutTitle">Оформити замовлення</h1>
        <div class="productBox">
            @foreach ((array) $chooseProducts as $product )
            <div class="productCard" data-cost="{{ $product['cost'] ?? 0 }}" data-quantity="{{ $product['quantity'] ?? 0 }}">
                <div class="productCardMobHeader">
                    <x-picture-tag src="{{ asset($product['img'] ?? '') }}" lazy="true"></x-picture-tag>
                    <h3>{{ $product['title'] ?? '' }}</h3>
                </div>
                <div class="productCardWrapper">
                    <div class="productCardHeader">
                        <h3>{{ $product['title'] ?? '' }}</h3>
                    </div>
                    <div class="productCardBottom">
                        <div class="counter" data-product-id="{{ $loop->index }}">
                            <i class="ph ph-minus decrement"></i>
                            <input type="text" class="count-input" value="{{ $product['quantity'] ?? 0 }}" min="1">
                            <i class="ph ph-plus increment"></i>
                        </div>
                        <div class="cost">
                            <h3>
                                {{ $product['cost'] ?? '' }},00<span>грн</span>
                            </h3>
                            <p>собівартість за од.</p>
                        </div>
                    </div>
                </div>
                <div class="productCardBottom">
                    <div class="counter" data-product-id="{{ $loop->index }}">
                        <i class="ph ph-minus decrement"></i>
                        <input type="text" class="count-input" value="{{ $product['quantity'] ?? 0 }}" min="1">
                        <i class="ph ph-plus increment"></i>
                    </div>
                    <div class="cost">
                        <h3>
                            {{ $product['cost'] ?? '' }},00<span>грн</span>
                        </h3>
                        <p>собівартість за од.</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('remove.from.cart') }}">
                    @csrf
                    <input type="hidden" name="index" value="{{ $loop->index }}">
                    <button type="submit"><i class="ph ph-trash-simple trash"></i></button>
                </form>
            </div>
            @endforeach
        </div>
    </div>

    <form action="{{ route('checkout.submit') }}" class="checkoutForm" method="POST">
        @csrf
        <div class="formLeftSide">
            <div class="userData box">
                <h6>Контакти замовника</h6>
                <div class="inputsWrapper">
                    @include("ui.input", ['content' => ["label" => "Прізвище", "placeholder" => "Введіть прізвище", "name" => "surname"]])
                    @include("ui.input", ['content' => ["label" => "Ім'я", "placeholder" => "Введіть ім'я", "name" => "firstname"]])
                    @include("ui.input", ['content' => ["label" => "По батькові", "placeholder" => "Введіть", "name" => "middlename"]])
                    @include("ui.input", ['content' => ["label" => "Номер телефону", "placeholder" => "+380", "name" => "phone"]])
                </div>
            </div>

            <div class="userData box">
                <h6>Доставка</h6>
                <div class="inputsWrapper">
                    @include("ui.input", ['content' => ["label" => "Місто / Населений пункт", "placeholder" => "Введіть", "name" => "city", "icon" => "ph ph-magnifying-glass"]])
                    @include("ui.input", ['content' => ["label" => "Номер відділення", "placeholder" => "Оберіть", "name" => "department", 'type' => 'select', 'options' => ['1' => 'Оберіть номер відділення НП', '2' => '557234', '3' => '557234']]])
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
                "id" => "contactPhoneInput"
                ]
                ])
            </div>
        </div>

        <div class="userData box">
            <h6 class="title">Передзамовлення</h6>
            <div class="productBox">
                @foreach ((array) $chooseProducts as $product )
                <div class="productCard" data-cost="{{ $product['cost'] ?? 0 }}" data-quantity="{{ $product['quantity'] ?? 1 }}">
                    <x-picture-tag src="{{ asset($product['img'] ?? '') }}" lazy="true"></x-picture-tag>
                    <div class="productCardWrapper">
                        <div class="productCardHeader">
                            <h3>{{ $product['title'] ?? '' }}</h3>
                        </div>
                        <div class="productCardBottom">
                            <div class="counter" data-product-id="{{ $loop->index }}">
                                <i class="ph ph-minus decrement"></i>
                                <input type="text" class="count-input" value="{{ $product['quantity'] ?? 1 }}" min="1">
                                <i class="ph ph-plus increment"></i>
                            </div>
                            <div class="cost">
                                <h3>{{ $product['cost'] ?? '' }},00<span>грн</span></h3>
                                <p>собівартість за од.</p>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('remove.from.cart') }}" id="form">
                        @csrf
                        <input type="hidden" name="index" value="{{ $loop->index }}">

                        <button type="submit"><i class="ph ph-trash-simple trash"></i></button>
                    </form>
                </div>
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
                <button class="btnConfirm" type="submit" id="contactBtnSubmit">Підтвердити</button>
                <x-secondary-btn text="Підтвердити та підтримати" class="btnCheckout"></x-secondary-btn>
            </div>

            <span>
                Залиште заявку — ми зв’яжемось із вами для уточнення деталей і підтвердження замовлення.
                <br />Жодної передоплати до підтвердження. Все просто і чесно.
            </span>
        </div>
    </form>
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
        const productCards = document.querySelectorAll('.productCard');
        const totalPriceElement = document.getElementById('totalPrice');

        function formatPrice(value) {
            return value.toFixed(2).replace('.', ',');
        }

        function updateTotalPrice() {
            let total = 0;

            productCards.forEach(card => {
                const cost = parseFloat(card.dataset.cost || '0');
                const quantityInput = card.querySelector('.count-input');
                const quantity = parseInt(quantityInput.value || '1');
                total += cost * quantity;
            });

            totalPriceElement.innerHTML = `${formatPrice(total)}<span>грн</span>`;
        }

        updateTotalPrice();

        productCards.forEach(card => {
            const decrementBtn = card.querySelector('.decrement');
            const incrementBtn = card.querySelector('.increment');
            const input = card.querySelector('.count-input');

            incrementBtn?.addEventListener('click', () => {
                input.value = parseInt(input.value) + 1;
                updateTotalPrice();
            });

            decrementBtn?.addEventListener('click', () => {
                const newVal = Math.max(1, parseInt(input.value) - 1);
                input.value = newVal;
                updateTotalPrice();
            });

            input?.addEventListener('input', () => {
                const val = parseInt(input.value);
                if (!val || val < 1) input.value = 1;
                updateTotalPrice();
            });
        });
    });
</script>