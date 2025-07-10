<div class="gratitudeContainer">
    <div class="gratitudeHeader">
        <h1>
            Подяки
        </h1>
        <hr />
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        </p>
    </div>
    <div class="gratitudeRightSide">
        <div class="slider">
            <div class="slider__content" id="sliderContent2">
                @for ($i = 0; $i < 10; $i++)
                    <div class="slider__item2">
                        <div class="slider__info">
                            <!-- <h2>This is a card</h2> -->
                        </div>
                    </div>
                @endfor
            </div>
            <div class="slider__nav">
                @include("ui.secondaryBtn", [
                    "content" => [
                        "text" => "Назад",
                        "class" => "btnPrev",
                        "id" => "prevBtn2",
                        "styles" => "font-size: 28px",
                        "iconLeft" => "ph ph-caret-left icon"
                    ]
                ]) 
                  @include("ui.secondaryBtn", [
                    "content" => [
                        "text" => "Вперед",
                        "class" => "btnNext",
                        "id" => "nextBtn2",
                        "styles" => "font-size: 28px ",
                        "iconRight" => "ph ph-caret-right icon"
                    ]
                ])
                
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const slider = document.getElementById("sliderContent2");
        const prevBtn = document.getElementById("prevBtn2");
        const nextBtn = document.getElementById("nextBtn2");
        const card = slider.querySelector(".slider__item2");
       
        function updateButtons() {
           const scrollLeft =slider.scrollLeft ; 
            const maxScrollLeft = slider.scrollWidth - slider.clientWidth;
            prevBtn.disabled = scrollLeft <= 0;
            nextBtn.disabled = scrollLeft >= maxScrollLeft - 1;
        }

        prevBtn.addEventListener("click", () => {
            const cardWidth =  card.offsetWidth + 35;

            slider.scrollBy({
                left: -cardWidth,
                behavior: 'smooth'
            });
        });

        nextBtn.addEventListener("click", () => {
             const cardWidth =  card.offsetWidth + 30;
            slider.scrollBy({
                left: cardWidth,
                behavior: 'smooth'
            });
        });

        slider.addEventListener("scroll", updateButtons);
        updateButtons();
    });
</script>