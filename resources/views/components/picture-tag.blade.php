<picture>
    <source srcset="{{ $webpSrc() }}" type="image/webp">
    <img src="{{ $src }}" alt="{{ $alt }}" class="{{ $class }}" @if($lazy) loading="lazy" @endif>
</picture>
{{ $slot }}