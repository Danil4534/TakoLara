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
            <form action="{{ route('getChooseProductsWithCount') }}" method="POST" id="preOrderForm">
                @csrf
                <div class="preOrderModalContent">
                    <div class="preOrderModalContentWrapper">
                        @foreach ((array) $chooseProducts as $index=>$product )
                        <x-pre-order-product-card :preOrderProduct="$product" :index="$index"></x-pre-order-product-card>
                        @endforeach
                    </div>
                </div>
                <div class="preOrderBottomBox">
                    <x-secondary-btn text="Оформити" class="preOrderBtn" value="order" name="action" styles="font-size: 28px" type="submit"></x-secondary-btn>
                    <div class="forSolders">
                        <p>🪖 Для військових — <span>безкоштовно</span></p>
                    </div>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll(".productCard").forEach(card => {
            const decrementBtns = card.querySelectorAll(".decrement");
            const incrementBtns = card.querySelectorAll(".increment");
            const inputs = card.querySelectorAll(".count-input");
            inputs.forEach(input => {
                if (input.value <= 1) {
                    decrementBtns.forEach(btn => btn.classList.add('disabled'))
                } else {
                    decrementBtns.forEach(btn => btn.classList.remove('disabled'))
                }
            })

            incrementBtns.forEach(btn => {
                btn.addEventListener("click", () => {
                    inputs.forEach((input) => {
                        input.value = +input.value + 1;
                        decrementBtns.forEach(btn => btn.classList.remove('disabled'))
                    });
                });
            });

            decrementBtns.forEach(btn => {
                btn.addEventListener("click", () => {
                    inputs.forEach(input => {
                        let value = +input.value;
                        if (value > 1) {
                            input.value = value - 1
                        } else {
                            decrementBtns.forEach(btn => btn.classList.add('disabled'))
                        };

                    });
                });
            });
        });
    });
</script>