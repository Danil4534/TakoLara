<div class="productCard">
    <div class="productCardMobHeader">
        <x-picture-tag src="{{ asset($preOrderProduct['img'] ?? '') }}" :lazy="true"></x-picture-tag>
        <h3>{{ $preOrderProduct['title'] ?? '' }}</h3>
    </div>
    <div class="productCardWrapper">
        <div class="productCardHeader">
            <h3>{{ $preOrderProduct['title'] ?? '' }}</h3>
        </div>
        <div class="productCardBottom">
            <div class="counter" data-product-id="{{ $index }}">
                <i class="ph ph-minus decrement"></i>
                <input type="text" class="count-input" value="{{ $preOrderProduct['quantity'] ?? 0 }}" min="1">
                <i class="ph ph-plus increment"></i>
            </div>
            <div class="cost">
                <h3>
                    {{ $preOrderProduct['cost'] ?? '' }},00<span>грн</span>
                </h3>
                <p>собівартість за од.</p>
            </div>
        </div>
    </div>
    <div class="productCardBottom">
        <div class="counter" data-product-id="{{ $index }}">
            <i class="ph ph-minus decrement"></i>
            <input type="text" class="count-input" value="{{ $preOrderProduct['quantity'] ?? 0 }}" min="1">
            <i class="ph ph-plus increment"></i>
        </div>
        <div class="cost">
            <h3>
                {{ $preOrderProduct['cost'] ?? '' }},00<span>грн</span>
            </h3>
            <p>собівартість за од.</p>
        </div>
    </div>
    <form method="POST" action="{{ route('remove.from.cart') }}">
        @csrf
        <input type="hidden" name="index" value="{{ $index }}">
        <button type="submit"> <i class="ph ph-trash-simple trash"></i></button>
    </form>

</div>