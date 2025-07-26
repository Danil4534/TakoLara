@php
$sliderContent = [
['img' => "", "content" => "1"],
['img' => "", "content" => "2"],
['img' => "", "content" => "3"],
['img' => "", "content" => "4"],
['img' => "", "content" => "1"],
['img' => "", "content" => "2"],
['img' => "", "content" => "3"],
['img' => "", "content" => "4"],
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
                <x-picture-tag src="{{ asset('assets/sliderBg.svg') }}"></x-picture-tag>
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

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const windowWidth = window.innerWidth;


        new Swiper('.responseSlider', {
            slidesPerView: windowWidth <= 376 ? windowWidth <= 768 ? 3 : 4 : 4,
            spaceBetween: windowWidth <= 375 ? 16 : 32,
            slidesPerGroup: 2,
            loop: true,
            keyboard: {
                enabled: true
            },
            pagination: {
                el: ".slider_bottom_nav",
                clickable: true,

            },
            navigation: {
                nextEl: "#nextBtn",
                prevEl: "#prevBtn",
            }
        });
    });
</script>