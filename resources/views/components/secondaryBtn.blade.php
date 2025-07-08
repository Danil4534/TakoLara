<button class="secondaryBtn {{ $content['class'] ?? "" }}">
    {{ $content["text"] }}
    @if (!empty($content['icon']))
        <i class="{{ $content['icon'] }}" style="{{ $content['styles'] ?? " " }}"></i>
    @endif
</button>