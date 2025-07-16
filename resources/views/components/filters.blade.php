@php

    $filters = [
        [
            'id' => 0,
            "title" => "Усі",
            'active' => true
        ],
        [
            'id' => 1,
            "title" => "Швидке введення ліків",
            'active' => false
        ],
        [
            'id' => 2,
            "title" => "Без додаткових інструментів для відкриття",
            'active' => false
        ],
        [
            'id' => 3,
            "title" => "Захист від розбиття ампули",
            'active' => false
        ],
        [
            'id' => 4,
            "title" => "Ефективний в темряві зусиль при заряджанні",
            'active' => false
        ],
        [
            'id' => 5,
            "title" => "Захист шприца й голки при транспортуванні",
            'active' => false
        ],
        [
            'id' => 6,
            "title" => "Можливість кольорового кодування",
            'active' => false
        ],
        [
            'id' => 7,
            "title" => "Сприяє при низькому тиску",
            'active' => false
        ],
        [
            'id' => 8,
            "title" => "Допомога новачкам",
            'active' => false
        ],
        [
            'id' => 9,
            "title" => "Менше часу і травм",
            'active' => false
        ]

    ]

@endphp

<div class="filters">
    @foreach (!empty($typeOfContact)? $typeOfContact:$filters as $index => $item)
        <label for="contact-{{ $index }}" class="{{ $item['active'] ? 'radioLabel active' : 'radioLabel' }}"
            onclick="handleMethodToConnect({{ $item['id'] }})">
            <input type="radio" id="contact-{{ $index }}" name="contact" value="{{ $item['title'] }}" @if ($item['active'])
            checked @endif readonly class="radioInput" />
            {{ $item['title'] }}
        </label>
    @endforeach
</div>

<script>
    function handleMethodToConnect(selectedIndex) {
        const labels = document.querySelectorAll('.radioLabel');
        console.log(labels)
        labels.forEach((label, index) => {
            const input = label.querySelector('input[type="radio"]');
            if (index === selectedIndex) {
                input.checked = true;
                label.classList.add('active');
            } else {
                label.classList.remove('active');
            }
        });
    }
</script>