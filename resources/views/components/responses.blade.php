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
            @include("ui.secondaryBtn", [
            "content" => [
            "text" => "Назад",
            "class" => "btnPrev",
            "id" => "prevBtn",
            "iconLeft" => "ph ph-caret-left icon"
            ]
            ])
            @include("ui.secondaryBtn", [
            "content" => [
            "text" => "Вперед",
            "class" => "btnNext",
            "id" => "nextBtn",
            "iconRight" => "ph ph-caret-right icon"
            ]
            ])

        </div>
        <div class="slider_bottom_nav">
            @for ($i = 0; $i < ceil(count($sliderContent) / 2); $i++) <div class="slider__nav_item">
        </div>
        @endfor

    </div>
    </di v>
    </di v>

    <scr ipt>
        document.addEventListener("DOMContentLoaded", () => {
        const slider = document.getElementById("sliderContent");
        const prevBtn = document.getElementById("prevBtn");
        cons t nextBtn = document.getElementById("nextBtn");
        cons t cards = slider.querySelectorAll(".slider__item");
        const na vDots = document.querySelectorAll(".slider__nav_item");


        const cardsPerPage = 3;
        const cardWidth = cards[0].offsetWidth;
        const gap = 32;
        const scrollStep = (cardWidth + gap) * cardsPerPage;

        let currentPage = 0;


        function updateActiveDot(index) {
        navDots.forEach(dot => dot.classList.remove("active"));
        if (navDots[index]) {
        navD ots[index].classList.add("active");
        }
        }


        func tion updateButtons() {
        cons t maxPage = Math.ceil(cards.length / cardsPerPage) - 1;
        prev Btn.disabled = currentPage <= 0; nextBtn.disabled=currentPage>= maxPage;
            }


            prev Btn.addEventListener("click", () => {
            if (currentPage > 0) {
            currentPage--;
            slid er.scrollTo({
            left: scrollStep * currentPage,
            beha vior: "smooth"
            });
            upda teActiveDot(currentPage);
            upda teButtons();
            }
            });


            next Btn.addEventListener("click", () => {
            cons t maxPage = Math.ceil(cards.length / cardsPerPage) - 1;
            if ( currentPage < maxPage) { curr entPage++; slid er.scrollTo({ left: scrollStep * currentPage,
                behavior: "smooth" }); updateActiveDot(currentPage); updateButtons(); } }); navDots.forEach((dot,
                index)=> {
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
                }); < /scr>