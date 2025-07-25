<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class preOrderProductCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $preOrderProduct;
    public $index;
    public function __construct($preOrderProduct, $index = null)
    {
        $this->preOrderProduct = $preOrderProduct;
        $this->index = $index;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pre-order-product-card');
    }
}
