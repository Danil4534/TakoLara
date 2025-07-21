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
                @include("ui.secondaryBtn", [
                "content" => [
                "id" => "btnConnect",
                'text' => "Переглянути категорії",
                'class' => "preOrderBtn",
                'styles' => 'font-size: 28px',
                'route'=>'checkout.page'
                ]
                ])
                <div class="forSolders">
                    <p>🪖 Для військових — <span>безкоштовно</span></p>
                </div>
            </div>
            @else
            @foreach ($chooseProducts as $product )
       <div></div>
            @endforeach
            @endif
        </div>
    </div>

</div>