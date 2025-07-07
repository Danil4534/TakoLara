<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class headerMenu extends Component
{
    public $isOpen;
    public function __construct($isOpen)
    {
        $this->isOpen = $isOpen;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        if ($this->isOpen === true) {
            return view('components.header-menu');
        } else {
            return '';
        }
    }




}
