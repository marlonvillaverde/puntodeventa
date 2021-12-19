<?php

namespace App\Http\Livewire\Catalogos;
use Livewire\WithPagination;
use App\Models\Cliente;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;



class ShowClientes extends Component
{
    use WithPagination;

    protected $listeners = [ 'closed_me' => 'closed_me' ];

    public $showModal = False;

    public $filter ;

    public $fieldorder = "documento";

    public $order = "asc";


    public function filtrar( $fieldorder ){
        if ( $fieldorder == $this->fieldorder )
        {
            $this->order = ( $this->order == "asc" ? "desc" : "asc" );
        }

        else
        {
            $this->fieldorder = $fieldorder;
            $this->order = "asc";
        }
    }

    public function mostrar()
    {

    }

    public function closed_me(){
        $this->showModal = False;
    }

    public function render()
    {
        if ($this->showModal) {
        $clientes = Cliente::where( 'nombre', 'like', '%'.$this->filter.'%')
            ->orwhere( 'documento', 'like', '%'.$this->filter.'%')->orderBy( $this->fieldorder, $this->order )
            ->paginate(15);

            return view('catalogos.show-clientes', compact('clientes'));
        }
        else{
            return view('catalogos.show-clientes');   
        }
    }
}
