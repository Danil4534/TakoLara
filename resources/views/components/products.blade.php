<div class="productsContainer">
    <div class="container">
        <div class="filtersContainer">
            @include('components.filters')
        </div>
        <hr />
        <ul>
            @foreach ($products as $product)
            @if ($product)
            <x-product-card :product="$product" />
            @endif
            @endforeach
        </ul>
    </div>
</div>