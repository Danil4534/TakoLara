<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PictureTag extends Component
{
    public $src;
    public $alt;
    public $class;
    public $lazy;

    public function __construct(string $src, string $alt = '', string $class = '', bool $lazy = true)
    {
        $this->src = $src;
        $this->alt = $alt;
        $this->class = $class;
        $this->lazy = $lazy;
    }

    public function render()
    {
        return view('components.picture-tag');
    }

    public function webpSrc()
    {
        return preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $this->src);
    }

}
