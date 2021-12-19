<div x-data="init_data()" x-init="initFunction()" class="m-2">
    <div class="w-full">

    <x-jet-button wire:click="$set('showModal','True')">F12 Articulos</x-jet-button>

    <x-jet-dialog-modal wire:model="showModal" maxWidth="5xl" >
        <x-slot name="title">
            <div class="text-center bg-blue-200 w-full m-0">ARTICULOS DE INVENTARIO</div>
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
                                        <th wire:click="filtrar('codigo')" scope="col">CODIGO</th>
                                        <th class="w-64" wire:click="filtrar('nombre')" scope="col">DESCRIPCION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if( isset( $articles ) )
                                    @foreach ($articles as $article)
                                        <tr x-on:click="mostrar( {{ $article }} )"
                                            {{-- x-on:mousemove="mostrar( {{ $article }} )" --}}
                                            >
                                            <td>{{ $article->codigo }}</td>
                                            <td>{{ $article->nombre }}</td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            {{-- <x-slot name="links">
                           <!-- {{ $articles->links() }} -->
                        </x-slot> --}}
                        </x-table-blade>
                    </div>

                    <div class="flex-1 m-2  rounded-lg">
                        <div class="px-2 m-2 w-full h-full">
                            <!--<div>
                                <input type="hidden" name="xid" x-model="inventario_id">
                                <label for="xcodigo">Código</label>
                                <div>
                                    <input type="text" name="xcodigo" x-model="codigo" disabled="disabled">
                                </div>
                            </div>
                            <div>
                                <label for="xdetalle">Detalle</label>
                                <div>
                                    <input type="text" name="xdetalle" x-model="detalle" disabled="disabled">
                                </div>
                            </div>
                        -->
                            <div>
                                <label for="xmarca">Marca</label>
                                <div>
                                    <input type="text" name="xmarca" x-model="marca">
                                </div>
                            </div>

                       
                            <div>
                                <div><label>Presentaciones</label></div>
                                    <div>
                                        <select class="w-32" name="xpresentacion_id" x-model="presentacion_id" x-on:click="selectPresent">
                                            
                                            <template x-for="presentacion in presentaciones">
                                            <option x-bind:value="presentacion.existencia_id" 
                                                x-text="presentacion.descripcion">
                                            </option>
                                            </template>
                                        </select>                                        
                                    </div>
                                </div>                      

                                <div>
                                    <div>
                                        <div><label for="xexistencia">Existencia</label><div>
                                            <input type="text" name="xexistencia" x-model="existencia" disabled="disabled">
                                    </div>
                                </div>
                            

                            
                                <div>
                                    <div><label for="xpventa">Precio Unitario</label><div>
                                    <input type="text" name="xpventa" x-model="pventa" disabled="disabled">
                                </div>
                                <div>
                                    <div><label for="xcantidad">Cantidad</label><div>
                                        <input type="text" name="xcantidad" x-model="cantidad">
                                    </div>
                                </div>
                                                        
                                <div class="flex mt-2">
                                    <x-jet-secondary-button x-on:click="selectArticle">Seleccionar</x-jet-secondary-button>
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
    function init_data() {
        return {

            inventario_id: 0,
            codigo: '',
            detalle: '',
            cantidad: 0,
            marca: '',
            iva: 0,
            inc: 0,
            presentaciones: [],
            presentacion_id: 0,
            presentacion: '',
            showWarning: false,
            existencia: 0,
            pventa:0,            

            /* Funcion que se ejecutar al no mas cargar el componente */
            initFunction() {
                variable = ''
            },

            /* Para mostrar los datos del articulo seleccionado */
            mostrar(item) {
                this.inventario_id = item.inventario_id;
                this.codigo = item.codigo;
                this.detalle = item.nombre;
                this.marca = item.marca.descripcion;
                this.iva = item.iva;
                this.inc = item.inc;
                this.presentaciones = item.existencias;
                this.cantidad = 1;
                try {
                    this.presentacion_id = this.presentaciones[0].existencia_id;
                    this.presentacion = this.presentaciones[0].descripcion;
                    this.pventa= this.presentaciones[0].pventa;
                    this.existencia=this.presentaciones[0].unidades;
                }
                catch(err) {
                    this.presentacion_id = 0;
                    this.presentacion = '';
                    this.pventa=0;
                    this.existencia=0;   
                }                
            },


            /* Solo se usa para mostrar las presentaciones del articulo y sus existencias */
            itemExistencia( item ){
                return item.descripcion + " " + item.unidades
            },

            /* Se ejecuta cunado se seleciona una presentacion del articulo */
            selectPresent(){

                for( elemento of this.presentaciones )
                {
                    if ( elemento.existencia_id.toString() ===  this.presentacion_id ){

                        this.pventa = elemento.pventa;
                        this.presentacion = elemento.descripcion;
                        this.existencia = elemento.unidades;
                    } 
                }
            },

            /* en el caso de que cancele la seleccion */
            cancelar(){
                Livewire.emit( 'closed_me' );
            },

            /* Este es el procedimiento que activara el guardado del articulo */
            selectArticle(){
                if ( this.inventario_id == 0 || this.cantidad == 0 || this.presentacion_id == 0 )
                {
                    /* Deberia mostrar un modal de advertencia */
                    Swal.fire({
                        title: 'Error!',
                        text: 'Faltan datos',
                        icon: 'error',
                        confirmButtonText: 'Aceptar'
                    })
                }                

                else
                {
            
                    /* prepara los datos de registro */
                    article = new Object();
                    article.inventario_id = this.inventario_id;
                    article.codigo = this.codigo;
                    article.detalle = this.detalle;
                    article.presentacion_id = this.presentacion_id;
                    article.presentacion = this.presentacion;
                    article.existencia = this.existencia;
                    article.marca = this.marca;
                    article.pventa = this.pventa;
                    article.cantidad = this.cantidad;
                    article.iva = this.iva;
                    article.inc = this.inc;
                    var myObject = JSON.stringify( article );                    
                                    
                    Livewire.emit( 'select_article', myObject );
                    Livewire.emit( 'closed_me' );    
                }
            }
        }
    }
</script>
