<button class="primaryBtn">
    @if (!empty($content['icon']))
        <i class="{{ $content['icon'] }}" style="{{ $content['styles'] }}"></i>
    @endif

    <span class="btnContent">
        {{ $content['text'] ?? 'Button' }}
    </span>

    @if (!empty($content['count']))
        <div class="counter">
            <p>
                {{ $content['count'] }} <span>+</span>
            </p>
        </div>
    @endif
</button>