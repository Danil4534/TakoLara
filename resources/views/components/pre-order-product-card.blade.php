<div class="productCard" data-cost="{{ $preOrderProduct['cost'] ?? 0 }}">
    <div class="productCardMob">
        <div class="productCardMobHeader">
            <x-picture-tag src="{{ asset($preOrderProduct['img'][0] ?? '') }}"></x-picture-tag>
            <div class="productCardHeader">
                <h3>{{ $preOrderProduct['title'] ?? '' }}</h3>
                <div class="cardCounter">
                    <div class="counter" data-product-id="{{ $index }}">
                        <i class="ph ph-minus decrement"></i>
                        <input type="text" name="chooseCount" class="count-input" value="{{ $preOrderProduct['quantity'] ?? 1 }}" min="{{1}}">
                        <i class="ph ph-plus increment"></i>
                    </div>
                    <div class="cost">
                        <h4>
                            {{ $preOrderProduct['cost'] ?? '' }},00<span>грн</span>
                        </h4>
                        <p>собівартість за од.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardBottom">
            <div class="counter" data-product-id="{{ $index }}">
                <i class="ph ph-minus decrement" id="decrement"></i>
                <input type="text" name="chooseCount" class="count-input" value="{{ $preOrderProduct['quantity'] ?? 1 }}" min="{{1}}">
                <i class="ph ph-plus increment" id="increment"></i>
            </div>
            <div class="cost">
                <h4>
                    {{ $preOrderProduct['cost'] ?? '' }},00<span>грн</span>
                </h4>
                <p>собівартість за од.</p>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ route('remove.from.cart') }}">
        @csrf
        <input type="hidden" name="index" value="{{ $index }}">
        <button type="submit"> <i class="ph ph-trash-simple trash"></i></button>
    </form>
</div>