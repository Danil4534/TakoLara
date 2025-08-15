<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SecondaryBtn extends Component
{
    public $id = '';
    public $text;
    public $class;

    public $modal;
    public $route;
    public $iconLeft;
    public $iconRight;
    public $styles;
    public $type;
    public $name;
    public $value;
    public function __construct(
        string $name = '',
        string $value = '',
        string $id = '',
        string $text = '',
        string $class = '',
        string $modal = '',
        string $route = '',
        string $styles = '',
        string $iconLeft = '',
        string $iconRight = '',
        string $type = ''
    ) {
        $this->id = $id;
        $this->text = $text;
        $this->class = $class;
        $this->modal = $modal;
        $this->route = $route;
        $this->styles = $styles;
        $this->iconLeft = $iconLeft;
        $this->iconRight = $iconRight;
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.secondary-btn');
    }
}
