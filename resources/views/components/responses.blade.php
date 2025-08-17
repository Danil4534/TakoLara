@php
$sliderContent = [
['img' => "assets/sliderBg.svg", "content" => "1",'type'=>"picture"],
['img' => "assets/sliderBg.svg", "content" => "2",'type'=>"video"],
['img' => "assets/sliderBg.svg", "content" => "3",'type'=>"picture"],
['img' => "assets/sliderBg.svg", "content" => "4",'type'=>"video"],
['img' => "assets/sliderBg.svg", "content" => "1",'type'=>"picture"],
['img' => "assets/sliderBg.svg", "content" => "2",'type'=>"video"],
['img' => "assets/sliderBg.svg", "content" => "3",'type'=>"picture"],
['img' => "assets/sliderBg.svg", "content" => "4", 'type'=>"video"],
];
@endphp

<style>
    .swiper {
        width: 100%;
        height: 100%;
    }



    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<div class="responsesContainer">
    <div class="container">

        <div class="responsesHeader">
            <h1>Відгуки про все</h1>
            <hr />
            <div class="subtitle">
                <p>
                    Слідкуйте за нами у Facebook та Instagram, щоб бути в курсі всіх
                    оновлень, бачити нашу діяльність у дії та разом наближати перемогу!
                    💙💛
                </p>
                @include('components.social-links', ['content' => ['class' => "socialLinkStyles"]])
            </div>
        </div>

        <div class="swiper responseSlider">
            <div class="swiper-wrapper">
                @foreach ($sliderContent as $item)
                <div class="swiper-slide">
                    <div class="slide">
                        @if($item['type']=== 'picture')
                        <div class="slide_hover_block photo">
                            <button class="previewTrigger" data-current="{{ $loop->index }}" data-imgs='@json(array_column($sliderContent, "img"))'>
                                <span>Переглянути</span>
                                <i class="ph ph-eye"></i>
                            </button>
                        </div>
                        @else
                        <div class="slide_hover_block video">
                            <button class="previewTrigger" data-video="{{ asset('assets/' . $item['img']) }}">
                                <i class="ph ph-play"></i>
                            </button>
                        </div>
                        @endif
                        <x-picture-tag src="{{ asset('assets/sliderBg.svg') }}"></x-picture-tag>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="slider__nav">
                <x-secondary-btn id="prevBtn" text="Назад" class="btnPrev" iconLeft="ph ph-caret-left icon" />
                <x-secondary-btn id="nextBtn" text="Вперед" class="btnNext" iconRight="ph ph-caret-right icon" />
            </div>

            <div class="slider_bottom_nav"></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>