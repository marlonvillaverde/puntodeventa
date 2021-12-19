<?php

namespace App\Http\Livewire\Catalogos;
use Livewire\WithPagination;
use App\Models\Inventario;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;



class ShowArticles extends Component
{
    use WithPagination;

    protected $listeners = [ 'closed_me' => 'closed_me' ];

    public $showModal = False;

    public $filter ;

    public $fieldorder = "codigo";

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



    public function getSubTotal($article){
        return $article->pvpunit * $article->cantidad - ( $article->pvpunit * $article->cantidad * $article->iva/100 );
    }
    

    public function mostrar()
    {

    }

    public function closed_me(){
        $this->showModal = False;
    }

    public function render()
    {
        if ( $this->showModal ) {
        $articles = Inventario::with('Existencias')->with('Marca')->where( 'nombre', 'like', '%'.$this->filter.'%')
            ->orwhere( 'codigo', 'like', '%'.$this->filter.'%')->orderBy( $this->fieldorder, $this->order )
            ->paginate(15);
            return view('catalogos.show-articles', compact('articles'));
        }
        else
            return view('catalogos.show-articles');   

            
        
    }
}
