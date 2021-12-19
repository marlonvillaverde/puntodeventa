<div id="newSale" >
    <x-slot name="header">
        <x-header-layout/>
    </x-slot>    

    <div class="bg-blue-200 w-auto border-2">DATOS DEL CLIENTE
    </div>
    
    <div class="transparent flex">DOCUMENTO
        <div class="ml-2 flex-initial">Tipo
        </div>
        <div >
            <select  wire:model="tipodocumento" name="tipodocumento">
                @foreach( $tdc as $tipdoc)                
                <option value={{$tipdoc->tipodocumentocliente_id}} >{{$tipdoc->detalle}}</option>
                @endforeach
            </select>
        </div>
        <div class="col ml-2 flex-1">
            <x-input-text labelvar="Documento " varname="documento"></x-input-text>        
        </div>
    </div>

    <x-input-text labelvar="Nombre " varname="nombre"></x-input-text>
    <x-input-text labelvar="Direccion " varname="direccion"></x-input-text>
    <x-input-text labelvar="Telefono " varname="telefono"></x-input-text>
    <x-input-text labelvar="E-mail " varname="email"></x-input-text>
    <x-input-text labelvar="Fecha de emisión " varname="fecha" ></x-input-text>

   

    @livewire( 'catalogos.show-clientes')

    @livewire( 'ventas.show-articles')

    

    <div class="float">    
    <x-jet-button wire:click="facturar('FS')">F5 - FACTURA SIMPLE</x-jet-button>
    <x-jet-button wire:click="facturar('FP')">F6 - FACTURA POS</x-jet-button>
    <x-jet-button wire:click="facturar('FE')">F7 - FACTURA ELECTRONICA</x-jet-button>
    <x-jet-button wire:click="facturar('CO')">F8 - COTIZACION</x-jet-button>
    <x-jet-button wire:click="facturar('NE')">F9 - NOTA ENTREGA</x-jet-button>
    </div>

   
    <x-jet-dialog-modal wire:model="showResFact">
        <x-slot name="title">
            {{$tipofactura}}
        </x-slot>
        <x-slot name="content">


<!--
    public $tipodocumento;
    public $saldo = 0;
    public $fecha;
    public $showResFact = False;
    public $tipofactura;
--->


            <div>Tipo Doc: </div>
            <div>Nro. Doc: {{$documento}}</div> 
            <div>Cliente: {{$nombre}}</div>      
            <div>Dirección: {{$direccion}}</div>
            <div>Teléfono: {{$telefono}}</div>
            <div>E-mail: {{$email}}</div>
        </x-slot>
        <x-slot name="footer">
        </x-slot>
    </x-jet-dialog-modal>

    @livewire( 'catalogos.show-articles')

 

    <x-slot name="footer">
        <x-footer-layout/>
    </x-slot>
</div>