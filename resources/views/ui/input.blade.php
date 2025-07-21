<div class="inputContainer">
    <label>{{ $content['label'] ?? '' }}</label>

    @if(($content['type'] ?? 'text') === 'select')
        <div class="selectWrapper">
            <select
                id="{{ $content['id'] ?? '' }}"
                name="{{ $content['name'] ?? '' }}"
            >
                @foreach($content['options'] ?? [] as $optionValue => $optionLabel)
                    <option value="{{ $optionValue }}"
                        @if(($content['value'] ?? '') == $optionValue) selected @endif
                    >
                        {{ $optionLabel }}
                    </option>
                @endforeach
            </select>
            <i class="{{ $content['icon'] ?? 'ph ph-caret-down' }} inputIcon"></i>
        </div>
    @else
    <div class="inputBox">
        <input
            type="{{ $content['type'] ?? 'text' }}"
        
            name="{{ $content['name'] ?? '' }}"
            value="{{ $content['value'] ?? '' }}"
            placeholder="{{ $content['placeholder'] ?? '' }}"
        >
        <i class="{{ $content['icon'] ?? '' }} copyIcon inputIcon btn" data-value="{{ $content['value'] ?? '' }}"></i>
        <i class="ph-fill ph-check-fat copyIcon inputIcon success" data-value="{{ $content['value'] ?? '' }}"></i>
    </div>
    @endif

    @error($content['name'] ?? '')
        <div class="error">
            <span><i class="ph ph-warning-circle"></i>Помилка!</span>
            <h6>{{ $message }}</h6>
        </div>
    @enderror
</div>