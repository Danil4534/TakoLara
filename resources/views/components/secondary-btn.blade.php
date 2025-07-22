<button id="{{ $id ?? '' }}" @if(!empty($route))
    onclick="window.location.href='{{ route($route) }}'" @endif
    class="secondaryBtn {{ $class ?? '' }}">
    @if (!empty($iconLeft))
    <i class="{{ $iconLeft }}" style="{{ $styles ?? '' }}"></i>
    @endif
    <p>{{ $text }}</p>
    @if (!empty($iconRight))
    <i class="{{ $iconRight }}" style="{{ $styles ?? '' }}"></i>
    @endif
</button>