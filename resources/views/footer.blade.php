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


<div class="footerContainer">

    <div class="footerContent">
        <div class="footerSlogan">
            <x-picture-tag src="{{ asset('assets/LogoLight.svg')  }}" alt="lightLogoFooter" :lazy="true" />
            <h2> Розвивайте технології разом із нами — обирайте якісні рішення,
                підтримуйте виробництво та рухайте індустрію вперед!</h2>
        </div>
        <ul class="links">
            @foreach ($links as $link)
                <li>
                    <a href={{ $link['anchor'] }}>{{ $link['text'] }}</a>
                </li>
            @endforeach
        </ul>
        <div class="socialLinksBox">
            @include("components.social-links", [
                'content' => [
                    "size" => "20px"
                ]
            ])
            <button>
                <i class="ph ph-envelope"></i>
                example@mail.com
            </button>
        </div>
    </div>
<ul class="links">
    @foreach ($links as $link)
        <li>
                <a href={{ $link['anchor'] }}>{{ $link['text'] }}</a>
            </li>
    @endforeach
    </ul>
    <hr />
    <p class="rights">© 2025 TAKO. All rights reserved</p>
</div>