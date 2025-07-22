@php
$sliderContent =[
['img'=>"", "content"=>"1"],
['img'=>"", "content"=>"2"],
['img'=>"", "content"=>"3"],
['img'=>"", "content"=>"4"],
['img'=>"", "content"=>"5"],
['img'=>"", "content"=>"6"],
['img'=>"", "content"=>"7"],
['img'=>"", "content"=>"8"],
]

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
        <div class="slider">
            <div class="slider__content" id="sliderContent2">
                @foreach ($sliderContent as $item )
                <div class="slider__item2">
                    <div class="slider__info">
                        <x-picture-tag src="{{ asset('assets/sliderBg.svg') }}"></x-picture-tag>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="slider__nav">
                <x-secondary-btn id="prevBtn2" text="Назад" class="btnPrev" iconLeft="ph ph-caret-left icon"></x-secondary-btn>
                <x-secondary-btn id="nextBtn2" text="Вперед" class="btnNext" iconRight="ph ph-caret-right icon"></x-secondary-btn>
            </div>
            <div class="slider_bottom_nav">
                @for ($i = 0; $i < ceil(count($sliderContent) / 2); $i++)
                    <div class="slider__nav_item2">
            </div>
            @endfor

        </div>
    </div>
</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const slider = document.getElementById("sliderContent2");
        const prevBtn = document.getElementById("prevBtn2");
        const nextBtn = document.getElementById("nextBtn2");
        const cards = slider.querySelectorAll(".slider__item2");
        const navDots = document.querySelectorAll(".slider__nav_item2");

        const cardsPerPage = 2;
        const cardWidth = cards[0].offsetWidth;
        const windowWidth = window.innerWidth;
        const gap = (windowWidth <= 375) ? 16 : 32;
        const scrollStep = (cardWidth + gap) * cardsPerPage;
        let currentPage = 0;

        function updateActiveDot(index) {
            navDots.forEach(dot => dot.classList.remove("active"));
            if (navDots[index]) {
                navDots[index].classList.add("active");
            }
        }

        function updateButtons() {
            const maxPage = Math.ceil(cards.length / cardsPerPage) - 1;
            prevBtn.disabled = currentPage <= 0;
            nextBtn.disabled = currentPage >= maxPage;
        }
        prevBtn.addEventListener("click", () => {
            if (currentPage > 0) {
                currentPage--;
                slider.scrollTo({
                    left: scrollStep * currentPage,
                    behavior: "smooth"
                });
                updateActiveDot(currentPage);
                updateButtons();
            }
        });
        nextBtn.addEventListener("click", () => {
            const maxPage = Math.ceil(cards.length / cardsPerPage) - 1;
            if (currentPage < maxPage) {
                currentPage++;
                slider.scrollTo({
                    left: scrollStep * currentPage,
                    behavior: "smooth"
                });
                updateActiveDot(currentPage);
                updateButtons();
            }
        });


        navDots.forEach((dot, index) => {
            dot.addEventListener("click", () => {
                currentPage = index;
                slider.scrollTo({
                    left: scrollStep * index,
                    behavior: "smooth"
                });
                updateActiveDot(index);
                updateButtons();
            });
        });

        updateActiveDot(currentPage);
        updateButtons();
    });
</script>