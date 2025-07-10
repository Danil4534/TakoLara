<div class="inputContainer">
    <label for="data">{{ $content['label'] ?? "" }}</label>
    <input type="{{ $content['type'] ?? "text" }}" value="{{ $content['value'] ?? '' }}" id="data" name="detail">
    <i class="{{ $content['icon'] ?? ""}}"></i>
</div>