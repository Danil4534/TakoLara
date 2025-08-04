@php
$chooseProducts = session('chooseProducts');
@endphp


<div id="hidden_preOrder" class="preOrder">
    <div class="header_preOrder_container" id="hidden_preOrder_content">
        <i class="ph ph-x close-btn" id="closePreOrderBtn"></i>
        <h1>Передзамовлення</h1>
        <div class="preOrderWrapper">
            @if(empty($chooseProducts))
            <div class="preOrderModalContent">
                <x-picture-tag src="{{ asset('assets/emptyBasket.svg') }}" alt="" :lazy="true" />
                <h2>Кошик на дембель пішов — <span>нічого немає</span></h2>
                <p>Схоже що ваш кошик пустий</p>
            </div>
            <div class="preOrderBottomBox">
                <x-secondary-btn text="Переглянути категорії" class="preOrderBtn" styles="font-size: 28px" route="home.page"></x-secondary-btn>
                <div class="forSolders">
                    <p>🪖 Для військових — <span>безкоштовно</span></p>
                </div>
            </div>
            @else
            <div class="preOrderModalContent">
                @foreach ((array) $chooseProducts as $index=>$product )
                <x-pre-order-product-card :preOrderProduct="$product" :index="$index"></x-pre-order-product-card>
                @endforeach
            </div>
            <div class="preOrderBottomBox">
                <x-secondary-btn text="Оформити" class="preOrderBtn" styles="font-size: 28px" route="checkout.page"></x-secondary-btn>
                <div class="forSolders">
                    <p>🪖 Для військових — <span>безкоштовно</span></p>
                </div>
            </div>
            @endif
        </div>
    </div>

</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll(".productCard").forEach(card => {
            const decrementBtn = card.querySelector(".decrement");
            const incrementBtn = card.querySelector(".increment");
            const input = card.querySelector(".count-input");

            if (incrementBtn && decrementBtn && input) {
                incrementBtn.addEventListener("click", () => {
                    input.value = parseInt(input.value) + 1;
                });

                decrementBtn.addEventListener("click", () => {
                    let value = parseInt(input.value);
                    if (value > 1) {
                        input.value = value - 1;
                    }
                });
            }
        });
    });
</script>