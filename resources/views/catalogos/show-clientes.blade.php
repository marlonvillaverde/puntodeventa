<div x-data="init_Ctes()" x-init="initCtes()" class="m-2">
    <div >

    <x-jet-button wire:click="$set('showModal','True')">F11 Clientes</x-jet-button>

    <x-jet-dialog-modal wire:model="showModal" maxWidth="5xl" >
        <x-slot name="title">
            <div class="text-center bg-blue-200 w-full m-0">CLIENTES REGISTRADOS</div>
            <div class="px-2 pt-2 w-full">
                {{-- <label>Introduzca un texto </label> --}}
                <x-jet-input wire:model.defer="filter" placeholder="Introduzca texto a buscar" class="ml-2 mb-2 px-2">
                </x-jet-input>
                <x-jet-secondary-button wire:click="mostrar">Buscar</x-jet-button>

            </div>
        </x-slot>

        <x-slot name="content">
            <div class="m-2 rounded-lg flex border-2 w-auto">
                    <div>
                        <x-table-blade>
                            <table class="tabla w-auto">
                                <thead class="py-2">
                                    <tr>
                                        <th wire:click="filtrar('documento')" scope="col">DOCUMENTO</th>
                                        <th class="w-64" wire:click="filtrar('nombre')" scope="col">NOMBRE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if( isset( $clientes ) )
                                    @foreach ($clientes as $cliente)
                                        <tr x-on:click="mostrar( {{ $cliente }} )"
                                            {{-- x-on:mousemove="mostrar( {{ $cliente }} )" --}}
                                            >
                                            <td>{{ $cliente->documento }}</td>
                                            <td>{{ $cliente->nombre }}</td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            {{-- <x-slot name="links">
                           <!-- {{ $clientes->links() }} --> 
                        </x-slot> --}}
                        </x-table-blade>
                    </div>

                    <div class="flex-1 m-2  rounded-lg">
                        <div class="px-2 m-2 w-full h-full">
                            <!--
                            <div>
                                <input type="hidden" name="xid" x-model="inventario_id">
                                <label for="xcodigo">Código</label>
                                <div>
                                    <input type="text" name="xcodigo" x-model="codigo" disabled="disabled">
                                </div>
                            </di v>
                            <div>
                                <label for="xdetalle">Detalle</label>
                                <div>
                                    <input type="text" name="xdetalle" x-model="detalle" disabled="disabled">
                                </div>
                            </div>
                            -->
                            <div>
                                <label for="xdocumento">Documento</label>
                                <div>
                                    <input type="text" name="xdocumento" x-model="documento">
                                </div>
                            </div>

                            <div>
                                <label for="xnombre">Nombre</label>
                                <div>
                                    <input type="text" name="xnombre" x-model="nombre">
                                </div>
                            </div>
                       
                            <div>                       
                                <div class="flex mt-2">
                                    <x-jet-secondary-button x-on:click="selectCliente">Seleccionar</x-jet-secondary-button>
                                    <x-jet-danger-button class="ml-2" x-on:click="cancelar">Cancelar</x-jet-danger-button>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>

        </x-slot>


        <x-slot name="footer">

        </x-slot>


    </x-jet-dialog-modal>
    </div>
</div>

<script>
    function init_Ctes() {
        return {

            cliente_id: 0,
            tipodocumentocliente_id: 0,
            tipodocumentocliente: '',
            documento: '',
            nombre: '',
            direccion: 0,
            email: '',
            telefono: '',
            saldo: 0,
            

            /* Funcion que se ejecutar al no mas cargar el componente */
            initCtes() {
                variable = ''
            },

            /* Para mostrar los datos del articulo seleccionado */
            mostrar(item) {
                this.cliente_id = item.cliente_id;
                this.tipodocumentocliente_id = item.tipodocumentocliente_id;
                this.tipodocumentocliente = item.tipodocumentocliente;
                this.documento = item.documento;
                this.nombre = item.nombre;
                this.direccion = item.direccion;
                this.email = item.email;
                this.telefono = item.telefono;
                this.saldo = item.saldo;                
            },


            /* en el caso de que cancele la seleccion */
            cancelar(){
                Livewire.emit( 'closed_me' );
            },

            /* Este es el procedimiento que activara el guardado del articulo */
            selectCliente(){
                    
                /* prepara los datos de registro */
                item = new Object();
                item.cliente_id = this.cliente_id;
                item.documento = this.documento;
                item.tipodocumentocliente_id = this.tipodocumentocliente_id;
                item.tipodocumentocliente = this.tipodocumentocliente;
                item.nombre = this.nombre;
                item.direccion = this.direccion;
                item.email = this.email;
                item.telefono = this.telefono;
                item.saldo = this.saldo;
                var myObject = JSON.stringify( item );

                                    
                Livewire.emit( 'select_cliente', myObject );
                Livewire.emit( 'closed_me' );    
                
            }
        }
    }
</script>
