<?php

namespace App\Http\Livewire\Ventas;
use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\SalesDetails;


class ShowArticles extends Component
{
    use WithPagination;

    protected $listeners = [ 'refresh_articles' => 'refreshArticles' ];

    public $iva=0;    

    public $sbt=0;

    public $total=0;


    public function delete_item( $item_id ){
        SalesDetails::find( $item_id )->delete();
        $this->refreshArticles();
    }

    public function refreshArticles(){
        $this->render();
    }
    

    public function render()
    {       


        $articles = SalesDetails::where('user_id','=', Auth::user()->user_id)->get();

        $this->total = 0;
        $this->iva = 0;
        $this->sbt = 0;

        foreach ( $articles as $article )
        {            
            $iva = ( $article->cant * $article->pvpunit ) * $article->iva / 100;
            $total = $article->cant * $article->pvpunit ;
            $sbt = $total - $iva;
            
            $this->total += $total;
            $this->iva += $iva;
            $this->sbt += $sbt;
        }

        return view('ventas.show-articles', compact( 'articles') );
    }
}
