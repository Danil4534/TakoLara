<div class="numbersContainer">
    <div class="container">
        <div class="numbersTitle">
            <h1>Ми у цифрах</h1>
            <p>
                За кожною цифрою – історія. За кожним виробом – врятоване життя,
                збережене обладнання або виконане бойове завдання.
            </p>
        </div>
        <hr />
        <div class="statisticBoxUp">
            <div class="boxWrapper">

                <div class="boxUp">
                    <div class="yellowBoxUp">
                    </div>
                    <div class="yellowBoxDown"></div>
                </div>

                <div class="boxUp">
                    <div class="boxContent">
                        <h1 class="animateNumber" data-value="10043">
                            0<span>од</span>
                        </h1>
                        <p>Виробів відправлено</p>
                    </div>
                    <x-picture-tag src="{{ asset('assets/item.svg') }}" alt="Logo" :lazy="true" class="item" />
                </div>
                <div class="boxUp">
                    <div class="yellowBoxUp">
                    </div>
                    <div class="yellowBoxDown"></div>
                </div>
                <div class="boxUp">
                    <div class="boxContent">
                        <h1 class="animateNumber" data-value="432100">
                            0<span>грн</span>
                        </h1>
                        <p>Витрачено на виготовлення</p>
                    </div>
                    <x-picture-tag src="{{ asset('assets/printersvg.svg') }}" alt="Logo" :lazy="true" class="item" />
                </div>

                <div class="boxUp">
                    <div class="boxContent">
                        <h1 class="animateNumber" data-value="173213">
                            0<span>грн</span>
                        </h1>
                        <p>Отримано донатами</p>
                    </div>
                    <x-picture-tag src="{{ asset('assets/GlassCan.svg') }}" alt="Logo" :lazy="true" class="item" />
                </div>
            </div>
        </div>

        <div class="statisticBoxDown">
            <div class="boxDown">
                <div class="boxContent">
                    <h1 class="animateNumber" data-value="730">
                        0<span>км</span>
                    </h1>
                    <p>Пластикової нитки перетворено на допомогу</p>
                </div>
            </div>

            <div class="boxDown">
                <div class="boxContent">
                    <h1 class="animateNumber" data-value="90000">
                        0<span>од</span>
                    </h1>
                    <p>Посилок відправлено</p>
                </div>
            </div>

            <div class="boxDown">
                <div class="boxContent">
                    <h1 class="animateNumber" data-value="8760">
                        0<span>год</span>
                    </h1>
                    <p>Людської праці вкладено (і це лише початок!)</p>
                </div>
            </div>
        </div>

        <button class="bannerBtn">
            <p>Збільшити цифри</p>
            <i class="ph ph-arrow-up-right bannerBtnArrowIcon"></i>
        </button>
    </div>
</div>