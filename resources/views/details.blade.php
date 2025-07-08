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
                <div class="detailsInput">
                    <label for="data">{{ $item['label'] }}</label>
                    <input type="text" value="{{ $item['value'] ?? '' }}" id="data" name="detail">
                </div>
            @endforeach
        </div>

    </div>
    <div></div>
</div>