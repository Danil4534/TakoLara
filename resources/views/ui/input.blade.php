<div class="inputContainer">
    <label for="data">{{ $content['label'] ?? "" }}</label>
    <input type="{{ $content['type'] ?? "text" }}" value="{{ $content['value'] ?? '' }}" id="data" name="detail"
        placeholder="{{ $content['placeholder'] ?? "" }}">
    <i class="{{ $content['icon'] ?? ""}}  copyIcon" data-value="{{ $content['value'] ?? ""}}"></i>

</div>