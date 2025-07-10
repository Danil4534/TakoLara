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
            @include('components.social-links', ['content' => ['styles' => "width:72px; height:72px; font-size:28px"]])
        </div>
    </div>

    <div class="slider">
        <div class="slider__content" id="sliderContent">
            @for ($i = 0; $i < 11; $i++)
                <div class="slider__item">
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
                    "id" => "prevBtn",
                    "styles" => "font-size: 28px",
                    "iconLeft" => "ph ph-caret-left icon"
                ]
            ]) 
              @include("ui.secondaryBtn", [
                "content" => [
                    "text" => "Вперед",
                    "class" => "btnNext",
                    "id" => "nextBtn",
                    "styles" => "font-size: 28px ",
                    "iconRight" => "ph ph-caret-right icon"
                ]
            ])
            
        </div>
    </div>
</div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
        const slider = document.getElementById("sliderContent");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");
        const card = slider.querySelector(".slider__item");
       
        function updateButtons() {
           const scrollLeft =slider.scrollLeft ; 
            const maxScrollLeft = slider.scrollWidth - slider.clientWidth;
            prevBtn.disabled = scrollLeft <= 0;
            nextBtn.disabled = scrollLeft >= maxScrollLeft - 1;
        }

        prevBtn.addEventListener("click", () => {
            const cardWidth =  card.offsetWidth+32;

            slider.scrollBy({
                left: -cardWidth,
                behavior: 'smooth'
            });
        });

        nextBtn.addEventListener("click", () => {
             const cardWidth =  card.offsetWidth+32;
            slider.scrollBy({
                left: cardWidth,
                behavior: 'smooth'
            });
        });

        slider.addEventListener("scroll", updateButtons);
        updateButtons();
    });
</script>