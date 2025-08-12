@php
$links = [
[
"text" => "Головна",
"anchor" => ""
],
[
"text" => "Про нас",
"anchor" => ""
],
[
"text" => "Як ми працюємо",
"anchor" => ""
],
[
"text" => "Партнери",
"anchor" => ""
],
[
"text" => "Відгуки",
"anchor" => ""
],
[
"text" => "ЗМІ про нас",
"anchor" => ""
],

];
$secondLinks = [
[
"text" => "Для зброї",
"anchor" => ""
],
[
"text" => "Медицина",
"anchor" => ""
],
[
"text" => "Для рацій",
"anchor" => ""
],
[
"text" => "РЕБ / РЕР",
"anchor" => ""
],
[
"text" => "Для дронів",
"anchor" => ""
]
]

@endphp


<div class="footerContainer">

    <div class="footerContent">
        <div class="footerSloganWrapper">
            <div class="footerSlogan">
                <x-picture-tag src="{{ asset('assets/LogoLight.svg')  }}" alt="lightLogoFooter" :lazy="true" />
                <h2> Розвивайте технології разом із нами — обирайте якісні рішення, підтримуйте виробництво та рухайте
                    індустрію вперед!</h2>
            </div>
            <div class="socialLinksBoxUp">
                @include("components.social-links", [
                'content' => [
                "classIcon" => "icon"
                ]
                ])
                <button>
                    <i class="ph ph-envelope icon"></i>
                    example@mail.com
                </button>
            </div>
        </div>
        <div class="linksWrapper">
            <div class="linksWrapperContent">
                <ul class="linksDesktop">
                    @foreach ($links as $link)
                    <li>
                        <a href={{ $link['anchor'] }}>{{ $link['text'] }}</a>
                    </li>
                    @endforeach
                </ul>
                <ul class="linksDesktop">
                    @foreach ($secondLinks as $link)
                    <li>
                        <a href={{ $link['anchor'] }}>{{ $link['text'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
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
    </div>
    <div class="footerBottom">

        <p class="rights">© 2025 TAKO. All rights reserved</p>
    </div>

</div>