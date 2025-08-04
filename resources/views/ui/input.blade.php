<div class="inputContainer">
    <label for="{{ $content['id']??"" }}" id="labelInput">{{ $content['label'] ?? '' }} <span>{{ (!empty($content['required']) && $content['required'] === 'true') ? '*' : '' }}</span> </label>
    @if(($content['type'] ?? 'text') === 'select')
    <div class="selectWrapper">
        <select
            id="{{ $content['id'] ?? '' }}"
            name="{{ $content['name'] ?? '' }}">
            @foreach($content['options'] ?? [] as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}"
                @if(($content['value'] ?? '' )==$optionValue) selected @endif>
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
            id="{{ $content['id'] ?? '' }}"
            name="{{ $content['name'] ?? '' }}"
            value="{{ $content['value'] ?? '' }}"
            placeholder="{{ $content['placeholder'] ?? '' }}"
            @if(!empty($content['readonly'])) readonly @endif>
        <i class="{{ $content['icon'] ?? '' }} copyIcon inputIcon btn" data-value="{{ $content['value'] ?? '' }}"></i>
        <i class="ph-fill ph-check-fat inputIcon success"></i>
    </div>
    @endif

    @error($content['name'] ?? '')
    <div class="error">
        <span><i class="ph ph-warning-circle"></i></span>
        <h4>{{ $message }}</h4>
    </div>
    @enderror
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const phoneInput = document.querySelector('input[name="phoneNumber"]');
        const prefix = '+380';

        if (phoneInput && !phoneInput.value.startsWith(prefix)) {
            phoneInput.value = prefix;
        }

        phoneInput.addEventListener('input', function() {
            if (!this.value.startsWith(prefix)) {
                this.value = prefix;
            }
        });

        phoneInput.addEventListener('keydown', function(e) {
            if (this.selectionStart < prefix.length && ['Backspace', 'Delete'].includes(e.key)) {
                e.preventDefault();
            }
        });
    });
</script>