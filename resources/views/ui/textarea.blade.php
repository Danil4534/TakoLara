<div class="inputContainer">
    <label for="{{ $content['name'] ?? 'message' }}">{{ $content['label'] ?? '' }}</label>

    <textarea id="{{ $content['name'] ?? 'message' }}" name="{{ $content['name'] ?? 'message' }}"
        placeholder="{{ $content['placeholder'] ?? '' }}">{{ old($content['name'] ?? 'message') }}</textarea>

    @error($content['name'] ?? 'message')
        <p class="error">{{ $message }}</p>
    @enderror
</div>