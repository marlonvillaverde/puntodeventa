<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputText extends Component
{

    // Nombre de la variable
    public $varname;

    // Etiqueta o caption para la entrada
    public $labelvar;

    // Texto para la opcion autocomplete del input
    public $autocomplete;

    // valor que tendra por defecto
    public $value;

    // Que tipo de entrada sera (text, mail phone, blablabla)
    public $type;

    public $class;

    public function __construct( $varname, $labelvar="", $autocomplete="", $value = "", $type="text", $class = "")
    {
        //
        $this->varname = $varname;

        $this->labelvar = $labelvar;

        $this->autocomplete = $autocomplete;

        $this->value = $value;

        $this->type = $type;

        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-text');
    }
}
