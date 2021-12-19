<?php

namespace App\Http\Livewire\Ventas;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\TipoDocumentoCliente;


class Ventas extends Component
{
    //
    protected $listeners = [ 'select_article' => 'select_article', 
                             'select_cliente' => 'select_cliente' 
                            ];

    // Datos del cliente al que va la factura 
    public $tipodocumento;

    public $tipodocumentocliente;

    public $documento;

    public $nombre;

    public $direccion;

    public $telefono;

    public $email;

    public $saldo = 0;
    
    public $fecha;

    public $showResFact = False;

    public $tipofactura;


    public function mount(){
        $this->fecha = date('d-m-yy');
        $this->tipofactura = "CULO";
    }


    /* Facturar */
    public function facturar( $tipo ){        

        $tipos = [
            'FS' => 'Factura Simple',
            'FP' => 'Factura Pos',
            'FE' => 'Factura Electrónica',
            'CO' => 'Cotización',
            'NE' => 'Nota de Entrega',            
        ];

        $this->showResFact = True;
        $this->tipofactura = $tipos[ $tipo ];
        $this->render();
    }

    
    // Para agregar elementos a la tabla auxiliar del carrito de compras
    public function select_article( $regJson ) {

        $register = json_decode( $regJson );


        DB::table( 'salesdetails')->insert( [
            'user_id' => Auth::user()->user_id,
            'inventario_id' => $register->inventario_id,
            'codigo' => $register->codigo,
            'detalle' => $register->detalle,
            'presentacion_id' => $register->presentacion_id,
            'presentacion' => $register->presentacion,
            'marca' => $register->marca,
            'pvpunit' => $register->pventa,
            'cant' => $register->cantidad,
            'iva' => $register->iva,
            'inc' => $register->inc,
        ] );

        $this->emit('refresh_articles');

        $this->render();
        
    }

    /* Cuando el usuario selecciona un cliente del listado devuelve sus datos */
    public function select_cliente( $regJson ){
        $register = json_decode( $regJson );
        
         $this->tipodocumento = $register->tipodocumentocliente_id;
         $this->documento = $register->documento;
         $this->nombre = $register->nombre;
         $this->direccion = $register->direccion;
         $this->telefono = $register->telefono;
         $this->email = $register->email;
         $this->saldo = 0;


    }
    

    public function render(){

        $tdc = TipoDocumentoCliente::get();
        return view('ventas.newsale', compact('tdc'));
    }
}
