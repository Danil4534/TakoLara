<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class productCard extends Component
{
    public $img;
    public $cost=0;
    public $title;
    public $details;
    public function __construct(string $img ='', int $cost , string $title ='', string $details='')
    {
        $this->img = $img;
        $this->cost = $cost;
        $this->title = $title;
        $this->details = $details;   
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}