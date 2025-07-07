@php
    $links = [
        [
            "text" => "Головна",
            "anchor" => ""
        ],
        [
            "text" => "Для зброї",
            "anchor" => ""
        ],
        [
            "text" => "Про нас",
            "anchor" => ""
        ],
        [
            "text" => "Медицина",
            "anchor" => ""
        ],
        [
            "text" => "Як ми працюємо",
            "anchor" => ""
        ],
        [
            "text" => "Для рацій",
            "anchor" => ""
        ],
        [
            "text" => "Партнери",
            "anchor" => ""
        ],
        [
            "text" => "РЕБ / РЕР",
            "anchor" => ""
        ],
        [
            "text" => "Відгуки",
            "anchor" => ""
        ],
        [
            "text" => "Для дронів",
            "anchor" => ""
        ],
        [
            "text" => "ЗМІ про нас",
            "anchor" => ""
        ]
    ]

@endphp


<footer>
    <div class="footerContainer">
        <div class="footerContent">
            <div class="footerSlogan">
                <x-picture-tag src="{{ asset('assets/LogoLight.svg')  }}" alt="lightLogoFooter" :lazy="true" />

                <h2> Розвивайте технології разом із нами — обирайте якісні рішення,
                    підтримуйте виробництво та рухайте індустрію вперед!</h2>
            </div>
            <ul>
                @foreach ($links as $link)
                    <li>
                        <a href={{ $link['anchor'] }}>{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ul>

            <div class="socialLinks">
                <x-social-links></x-social-links>
            </div>
        </div>
    </div>

</footer>