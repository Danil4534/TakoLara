<div class="inputContainer">
    <label for="{{ $content['id']??"" }}" id="labelInput">
        {{ $content['label'] ?? '' }}
        <span>*</span>
    </label>

    @if(($content['type'] ?? 'text') === 'select')
    <div class="selectWrapper customSelect" data-id="{{ $content['id'] ?? '' }}">
        <div class="customSelect__box">
            <input type="text"
                class="customSelect__search"
                placeholder="{{ $content['placeholder'] }}"
                autocomplete="off" required>
            <i class="{{ $content['icon'] ?? 'ph ph-caret-down' }} inputIcon"></i>
        </div>

        <div class="customSelect__dropdown">
            @foreach($content['options'] ?? [] as $optionValue => $optionLabel)
            <div class="customSelect__option"
                data-value="{{ $optionLabel }}"
                @if(($content['value'] ?? '' )==$optionLabel) data-selected="true" @endif>
                {{ $optionLabel }}
            </div>
            @endforeach
        </div>
    </div>
    <input type="hidden"
        id="{{ $content['id'] ?? '' }}"
        name="{{ $content['name'] ?? '' }}"
        value="{{ $content['value'] ?? '' }}">
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

<style>
    .customSelect {
        position: relative;
        width: 100%;
        font-family: var(--font-family-Light);
        font-weight: 300;
        font-style: Light;
        font-size: 14px;
        leading-trim: NONE;
        line-height: 120%;
        letter-spacing: 1.6%;
        color: #6B6B6B;

    }

    .customSelect__box {
        display: flex;
        align-items: center;
        position: relative;
    }

    .customSelect__search {
        width: 100%;
        padding: 8px 32px 8px 8px;
        box-sizing: border-box;
        text-align: left;

    }

    .customSelect__box .inputIcon {
        position: absolute;
        right: 8px;
        pointer-events: none;
        font-size: 18px;
        color: #666;
    }

    .customSelect__dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        max-height: 150px;
        overflow-y: auto;
        background: white;
        border: 1px solid #ccc;
        display: none;
        z-index: 1000;
    }

    .customSelect__option {
        padding: 8px;
        cursor: pointer;
        font-family: var(--font-family-Light);
        font-weight: 300;
        font-style: Light;
        font-size: 14px;
        line-height: 120%;
        letter-spacing: 1.6%;
        color: #6B6B6B;
    }

    .customSelect__option:hover {
        background: #f0f0f0;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.customSelect').forEach(select => {
            const searchInput = select.querySelector('.customSelect__search');
            const dropdown = select.querySelector('.customSelect__dropdown');
            const options = dropdown.querySelectorAll('.customSelect__option');
            const hiddenInput = select.nextElementSibling;

            searchInput.addEventListener('focus', () => {
                dropdown.style.display = 'block';
            });

            searchInput.addEventListener('input', () => {
                const term = searchInput.value.toLowerCase();
                options.forEach(opt => {
                    opt.style.display = opt.textContent.toLowerCase().includes(term) ? 'block' : 'none';
                });
            });

            options.forEach(opt => {
                opt.addEventListener('click', () => {
                    searchInput.value = opt.textContent.trim();
                    hiddenInput.value = opt.dataset.value.trim();
                    dropdown.style.display = 'none';
                });
            });

            document.addEventListener('click', (e) => {
                if (!select.contains(e.target)) {
                    dropdown.style.display = 'none';
                }
            });

            const selected = dropdown.querySelector('[data-selected="true"]');
            if (selected) {
                searchInput.value = selected.textContent;
            }
        });
    });
</script>