@php
$sliderContent = [
['img' => "", "content" => "1"],
['img' => "", "content" => "2"],
['img' => "", "content" => "3"],
['img' => "", "content" => "4"],
['img' => "", "content" => "5"],
['img' => "", "content" => "6"],
['img' => "", "content" => "7"],
['img' => "", "content" => "8"],
]

@endphp



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

    <div class="slider">
        <div class="slider__content" id="sliderContent">
            @foreach ($sliderContent as $item)
            <div class="slider__item">
                <div class="slider__info">
                    {{ $item['content'] }}
                </div>
            </div>
            @endforeach
        </div>

        <div class="slider__nav">
            <x-secondary-btn id="prevBtn" text="Назад" class="btnPrev" iconLeft="ph ph-caret-left icon"></x-secondary-btn>

            <x-secondary-btn id="nextBtn" text="Вперед" class="btnNext" iconRight="ph ph-caret-right icon"></x-secondary-btn>



        </div>
        <div class="slider_bottom_nav">
            @for ($i = 0; $i < ceil(count($sliderContent) / 2); $i++) <div class="slider__nav_item">
        </div>
        @endfor

    </div>
</div>
</div>

<script>

</script>