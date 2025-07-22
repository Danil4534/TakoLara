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
                <x-secondary-btn id="btnConnect" text="Переглянути категорії" class="preOrderBtn" styles="font-size: 28px" route="home.page"></x-secondary-btn>
                <div class="forSolders">
                    <p>🪖 Для військових — <span>безкоштовно</span></p>
                </div>
            </div>
            @else
            <div class="preOrderModalContent">
                @foreach ((array) $chooseProducts as $product )
                <div class="productCard">
                    <div class="productCardWrapper">
                        <div class="productCardHeader">
                            <x-picture-tag src="{{ asset($product['img'] ?? '') }}" lazy="true"></x-picture-tag>
                            <h3>{{ $product['title'] ?? '' }}</h3>
                        </div>
                        <div class="productCardBottom">
                            <div class="counter" data-product-id="{{ $loop->index }}">
                                <i class="ph ph-minus decrement"></i>
                                <input type="text" class="count-input" value="{{ $product['cartCount'] ?? 1 }}" min="1">
                                <i class="ph ph-plus increment"></i>
                            </div>
                            <div class="cost">
                                <h3>
                                    {{ $product['cost'] ?? '' }},00<span>грн</span>
                                </h3>
                                <p>
                                    собівартість за од.
                                </p>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('remove.from.cart') }}">
                        @csrf
                        <input type="hidden" name="index" value="{{ $loop->index }}">
                        <button type="submit"> <i class="ph ph-trash-simple trash"></i></button>
                    </form>

                </div>
                @endforeach
            </div>
            <div class="preOrderBottomBox">
                <x-secondary-btn id="btnConnect" text="Оформити" class="preOrderBtn" styles="font-size: 28px" route="checkout.page"></x-secondary-btn>
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