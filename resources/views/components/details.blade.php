@php

$details = [
['label' => "iBan рахунок: ", 'value' => "UA393052990000026006036707396"],
['label' => "USDT (TRC20):", 'value' => "TBADxfHcg8UkCUiAMQsgpfu4YAUU3Vr5sD"],
['label' => "BTC:", 'value' => "1GgPsc38dMJ54uWGFsnEBMd2ZamDXxrAfA"]
]
@endphp
<div class="detailsContainer">
    <div class="leftSideDetails">
        <h5>
            Основні реквізити нашої команди:
        </h5>
        <div class="detailsWrapper">
            @foreach ($details as $item)
            @include("ui.input", ["content" => ["label" => $item["label"], "value" => $item['value'], "icon" =>
            "ph ph-copy-simple" , "readonly"=>'readonly']])
            @endforeach
        </div>
    </div>
    <div class="rightSideDetails">
        <div class="yellowBox">
            <x-picture-tag src="{{ asset('assets/YellowBox.svg') }}" alt="Logo" :lazy="false" />
        </div>
        <h1>
            Наближуй перемогу разом з нами
        </h1>
        <x-picture-tag src="{{ asset('assets/Qr_code.svg') }}" alt="Logo" :lazy="true" class="qr_code" />
        <button onclick="window.location.href='{{ route('support.page') }}'">Задонатити ТА-КО</button>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const icons = document.querySelectorAll(".copyIcon");
        icons.forEach((icon) => {
            icon.addEventListener('click', () => {
                const value = icon.getAttribute('data-value');
                icon.style.display = 'none'
                navigator.clipboard.writeText(value).then(() => {
                    let success = icon.parentElement.querySelector('.success');
                    if (!success) {
                        success = document.createElement('span');
                        success.classList.add('success');

                        icon.parentElement.appendChild(success);
                    }
                    success.style.display = 'block';

                    setTimeout(() => {
                        success.style.display = 'none';
                        icon.style.display = 'block'
                    }, 2000);
                }).catch(err => {
                    console.log("Помилка копіювання:", err);
                });
            });
        });
    });
</script>