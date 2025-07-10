<a href="{{ $content['modal'] ?? ""}}" class="secondaryBtn {{ $content['class'] ?? "" }}"
    id="{{ $content['id'] ?? "" }}">

    @if (!empty($content['iconLeft']))
        <i class="{{ $content['iconLeft'] }}" style="{{ $content['styles'] ?? " " }}"></i>
    @endif
    <p>

        {{ $content["text"] }}
    </p>

    @if (!empty($content['iconRight']))
        <i class="{{ $content['iconRight'] }}" style="{{ $content['styles'] ?? " " }}"></i>
    @endif


</a>