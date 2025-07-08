<div class="numbersContainer">
    <div class="numbersTitle">
        <h1>Ми у цифрах</h1>
        <p>
            За кожною цифрою – історія. За кожним виробом – врятоване життя,
            збережене обладнання або виконане бойове завдання.
        </p>
    </div>
    <hr />
    <div class="statisticBoxUp">
        <div class="boxUp">
            <div class="boxContent">
                <h1>
                    10 043<span>од</span>
                </h1>
                <p>Виробів відправлено</p>
            </div>
            <x-picture-tag src="{{ asset('assets/item.svg') }}" alt="Logo" :lazy="true" class="item" />
        </div>
        <div class="boxUp">
            <div class="yellowBox">
                <div class=" blueBox"></div>
            </div>
        </div>
        <div class="boxUp">
            <div class="boxContent">
                <h1>
                    432 100<span>грн</span>
                </h1>
                <p>Витрачено на виготовлення</p>
            </div>
            <x-picture-tag src="{{ asset('assets/printersvg.svg') }}" alt="Logo" :lazy="true" class="item" />
        </div>
        <div class="boxUp">
            <div class="boxContent">
                <h1>
                    173 213<span>грн</span>
                </h1>
                <p>Отримано донатами</p>
            </div>
            <x-picture-tag src="{{ asset('assets/GlassCan.svg') }}" alt="Logo" :lazy="true" class="item" />
        </div>
    </div>
    <div class=" statisticBoxDown">
        <div class=" boxDown">
            <div class=" boxContent">
                <h1>
                    730<span>км</span>
                </h1>
                <p>Пластикової нитки перетворено на допомогу</p>
            </div>
        </div>
        <div class="boxDown">
            <div class="boxContent">
                <h1>
                    90 000<span>од</span>
                </h1>
                <p>Посилок відправлено</p>
            </div>
        </div>
        <div class="boxDown">
            <div class="boxContent">
                <h1>
                    8 760<span>год</span>
                </h1>
                <p>Людської праці вкладено (і це лише початок!)</p>
            </div>
        </div>
    </div>
    <button class=" bannerBtn">
        <span>Збільшити цифри</span>
        <i class="ph ph-arrow-up-right bannerBtnArrowIcon" style="font-size:28px"></i> </button>
</div>