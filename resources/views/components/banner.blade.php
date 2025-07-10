<div class="{{ $content['class'] ?? '' }}">
    <x-picture-tag :src="asset($content['banner'] ?? '')" alt="Logo" :lazy="true" />
    <div class="bannerContainer">
        <div class="bannerContent">
            <h1>{{ $content['bannerTitle'] ?? '' }}</h1>
            @if (!empty($content['subtitle']))
                @if ($content['subtitleActive'] === true)
                    <p class="bannerSubtitle">{{ $content['subtitle'] }}</p>
                @endif
            @endif

            @if (!empty($content['btnActive']) && $content['btnActive'] === true)
                <button class="bannerBtn">
                    <span>Підтримати TAKO</span>
                    <i class="ph ph-arrow-up-right bannerBtnArrowIcon" style="font-size: 28px;"></i>
                </button>
            @endif
        </div>
    </div>
</div>