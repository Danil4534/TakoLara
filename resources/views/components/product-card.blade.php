<li class="card">
    <div class="productContent">
        <div class="slider">
            <div class="swiper productSlider">
                <div class="swiper-wrapper">
                    @foreach ($product['img'] as $picture)
                    <div class="swiper-slide productSlide">
                        <x-picture-tag src="{{ asset($picture) }}"></x-picture-tag>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-scrollbar"></div>
                <div class="swiper-button-prev-product" id="swiper-button-prev-product"> <i class="ph ph-caret-left"></i></div>
                <div class="swiper-button-next-product" id="swiper-button-next-product"><i class="ph ph-caret-right"></i></div>
            </div>
            <div class="productPictures">
                <x-picture-tag src="{{ asset('assets/product.svg') }}" alt="Logo" :lazy="true" class="Logo" />
                <div class="slider_bottom">
                    <x-picture-tag src="{{ asset('assets/product.svg') }}" alt="Logo" :lazy="true" class="Logo" />
                    <x-picture-tag src="{{ asset('assets/product.svg') }}" alt="Logo" :lazy="true" class="Logo" />
                    <x-picture-tag src="{{ asset('assets/product.svg') }}" alt="Logo" :lazy="true" class="Logo" />
                </div>
            </div>

        </div>
        <div class="productDataWrapper">
            <div class="productData">
                <h1>{{ $product['title'] }}</h1>
                <div class="productCharacter">
                    @foreach ($product['characteristics'] as $character)
                    <span>{{ $character }}</span>
                    @endforeach
                </div>
                <div class="productDetailsWrap">
                    <p class="productSubtitle">{{ $product['subtitle'] }}</p>
                    <input type="checkbox" id="toggleDetails{{ $loop->index }}" class="toggleCheckbox" hidden>
                    <label for="toggleDetails{{ $loop->index }}" class="toggleLabel">Більше</label>
                    <div class="productDetails">
                        <ol class="toggleContent">
                            @foreach ($product['details'] as $details)
                            <li>{{ $details }}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>
                <div class="productBenefits">
                    @foreach ($product['benefits'] as $benefit)
                    <p>{{ $benefit }}</p>
                    @endforeach
                </div>
            </div>

            <div class="productCostCount">
                <div class="costCountUp">
                    <div class="cost">
                        <p>
                            {{ $product['count'] }} <span class="SI">од.</span>
                        </p>
                        <span>передано</span>
                    </div>
                    <div class="count">
                        <p>
                            {{ $product['cost'] }},00 <span class="SI">грн</span>
                        </p>
                        <span>собівартість за од.</span>
                    </div>
                </div>
                <form action="{{ route('addProduct.to.cart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product" value="{{ base64_encode(json_encode($product)) }}">
                    <button type="submit">Замовити <i class="ph ph-plus"></i></button>
                </form>
            </div>
        </div>
    </div>
</li>