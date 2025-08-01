@php
$sliderContent = [
['img' => "", "content" => "1",'type'=>"picture"],
['img' => "", "content" => "2",'type'=>"video"],
['img' => "", "content" => "3",'type'=>"picture"],
['img' => "", "content" => "4",'type'=>"video"],
['img' => "", "content" => "1",'type'=>"picture"],
['img' => "", "content" => "2",'type'=>"video"],
['img' => "", "content" => "3",'type'=>"picture"],
['img' => "", "content" => "4", 'type'=>"video"],
];

@endphp


<div class="gratitudeContainer">
    <div class="gratitudeHeader">
        <h1>
            Подяки
        </h1>
        <hr />
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        </p>
        <hr />
    </div>
    <div class="gratitudeRightSide">

        <div class="swiper gratitudeSlider">
            <div class="swiper-wrapper">
                @foreach ($sliderContent as $item)
                <div class="swiper-slide">
                    <div class="slide">
                        @if($item['type']==='picture')
                        <div class="slide_hover_block photo">
                            <button><span>Переглянути</span> <i class="ph ph-eye"></i></button>
                        </div>
                        @else
                        <div class="slide_hover_block video">
                            <button><i class="ph ph-play"></i></button>
                        </div>
                        @endif
                        <x-picture-tag src="{{ asset('assets/sliderBg.svg') }}"></x-picture-tag>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="slider__nav">
                <x-secondary-btn id="prevBtnGrad" text="Назад" class="btnPrev" iconLeft="ph ph-caret-left icon" />
                <x-secondary-btn id="nextBtnGrad" text="Вперед" class="btnNext" iconRight="ph ph-caret-right icon" />
            </div>

            <div class="slider_bottom_navGratitude"></div>
        </div>
    </div>
</div>
</div>