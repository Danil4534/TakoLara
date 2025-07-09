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

<ul class="socialLinks">
    @foreach ($socialLinks as $socialLink)
        <li style="{{ $content['styles'] ?? "" }}">
            <i class="{{ $socialLink['icon'] }}" style="font-size:{{$content['size'] ?? ''  }}"></i>
        </li>
    @endforeach
</ul>