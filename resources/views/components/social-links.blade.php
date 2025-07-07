@php
    $socialLinks = [
        [
            "icon" => "ph ph-instagram-logo",

        ],
        [
            "icon" => "ph ph-facebook-logo",

        ],
        [
            "icon" => "ph ph-tiktok-logo",

        ],
        [
            "icon" => "ph ph-youtube-logo",
        ]
    ]

@endphp

<div class="socialLinks">
    @foreach ($socialLinks as $socialLink)
        <div>
            <i class="{{ $socialLink['icon'] }}"></i>
        </div>
    @endforeach

</div>