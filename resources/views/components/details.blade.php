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
                @include("ui.input", ["content" => ["label" => $item["label"], "value" => $item['value'], "icon" => "ph ph-copy"]])
            @endforeach
        </div>

    </div>
    <div></div>
</div>