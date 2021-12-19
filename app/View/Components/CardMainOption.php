<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardMainOption extends Component
{
    public $faimg;
    public $title;
    public $text;
    public $ruta;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $title, $text, $faimg='fa-check', $ruta = "#")
    {
        $this->title = $title;
        $this->text = $text;
        $this->faimg = $faimg;
        $this->ruta = $ruta;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-main-option');
    }
}
