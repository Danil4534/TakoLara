  @php
  $img = isset($preOrderProduct['img'])
  ? (is_array($preOrderProduct['img']) ? ($preOrderProduct['img'][0] ?? '') : $preOrderProduct['img'])
  : '';
  @endphp

  <div class="productCard" data-cost="{{ $preOrderProduct['cost'] ?? 0 }}" id="{{ $id ??'' }}">
      <input type="hidden" name="products[{{ $index }}][id]" value="{{ $preOrderProduct['id'] ?? $index }}">
      <input type="hidden" name="products[{{ $index }}][title]" value="{{ $preOrderProduct['title'] ?? '' }}">
      <input type="hidden" name="products[{{ $index }}][cost]" value="{{ $preOrderProduct['cost'] ?? 0 }}">
      <input type="hidden" name="products[{{ $index }}][img]" value="{{ $img }}">

      <div class="productCardMob">
          <div class="productCardMobHeader">
              <x-picture-tag src="{{ asset($img) }}"></x-picture-tag>
              <div class="productCardHeader">
                  <h3>{{ $preOrderProduct['title'] ?? '' }}</h3>
                  <div class="cardCounter">
                      <div class="counter">
                          <i class="ph ph-minus decrement"></i>
                          <input type="text" name="products[{{ $index }}][quantity]"
                              class="count-input"
                              value="{{ $preOrderProduct['quantity'] ?? 1 }}"
                              min="1">
                          <i class="ph ph-plus increment"></i>
                      </div>
                      <div class="cost">
                          <h4>{{ $preOrderProduct['cost'] ?? '' }},00<span>грн</span></h4>
                          <p>собівартість за од.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="cardBottom">
              <div class="counter">
                  <i class="ph ph-minus decrement"></i>
                  <input type="text" name="products[{{ $index }}][quantity]"
                      class="count-input"
                      value="{{ $preOrderProduct['quantity'] ?? 1 }}">
                  <i class="ph ph-plus increment"></i>
              </div>
              <div class="cost">
                  <h4>{{ $preOrderProduct['cost'] ?? '' }},00<span>грн</span></h4>
                  <p>собівартість за од.</p>
              </div>
          </div>
      </div>
      <button type="submit" name="action" value="remove_{{ $index }}" class="removeBtn">
          <i class="ph ph-trash-simple trash"></i>
      </button>
  </div>