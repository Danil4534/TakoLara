@php
$statisticData =[
['count'=>'8760','unit'=>'год','subtitle'=>'Людської праці вкладено (і це лише початок!'],
['count'=>'90000','unit'=>'од','subtitle'=>'Посилок відправлено'],
['count'=>'730','unit'=>'км','subtitle'=>'Пластикової нитки перетворено на допомогу']
]

@endphp

<div class="statistic__container">
    <div class="statistic__body">
        <hr />
        <ul>
            @foreach ($statisticData as $item )
            <li>
                <h1 class="animateNumber" data-value="{{ $item['count'] }}">{{ $item['count'] }}<span>{{ $item['unit'] }}</span></h1>
                <p>{{ $item['subtitle'] }}</p>
            </li>
            @endforeach
        </ul>
    </div>
</div>