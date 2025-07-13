<button id="{{ $content['id'] ?? '' }}" @if(!empty($content['route']))
onclick="window.location.href='{{ route($content['route']) }}'" @endif
    class="secondaryBtn {{ $content['class'] ?? '' }}">
    @if (!empty($content['iconLeft']))
        <i class="{{ $content['iconLeft'] }}" style="{{ $content['styles'] ?? '' }}"></i>
    @endif
    <p>{{ $content['text'] }}</p>
    @if (!empty($content['iconRight']))
        <i class="{{ $content['iconRight'] }}" style="{{ $content['styles'] ?? '' }}"></i>
    @endif
</button>