<div class="m-2 border-2 shadow" id="show_articles">
    <div class="m-2 rounded-lg border-2 float">
        <div>
                <x-table-blade>
                    <table class="tabla w-auto text-xs">
                        <thead class="py-2 text-xs">
                            <tr>
                                <!-- <th wire:click="filtrar('codigo')"scope="col">CODIGO</th> --->
                                <th >CODIGO</th>
                                <th >DETALLE</th>
                                <!--<th >MARCA</th>-->
                                <th >MEDIDA</th>
                                <th >P.UNIT.</th>
                                <th class="w-4">CANT.</th>
                                <th >SUBTOTAL</th>
                                <th >IVA </th>
                                <th >TOTAL</th> 
                                <th >ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody id="articulos">
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->codigo }}</td>
                                <td>{{ $article->detalle }}</td>
                                <!--<td>{{ $article->marca }}</td>-->
                                <td>{{ $article->presentacion }}</td>
                                <td>{{ $article->pvpunit }}</td>
                                <td class="hover:bg-yellow-500 hover:text-white">{{ $article->cant }}</td>
                                <td>{{ $article->pvpunit * $article->cant - ( $article->pvpunit * $article->cant * $article->iva/100 ) }}</td>
                                <td>{{ $article->pvpunit * $article->cant * $article->iva/100 }}</td><td>{{ $article->pvpunit * $article->cant  }}</td>
                                <td>
                                    <x-buttonedit x-on:click="sumar"></x-buttonedit>
                                    <x-buttondelete wire:click="delete_item({{$article->item_id}})" x-on:click="sumar"></x-buttondelete>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!--<x-slot name="links">
                        {{-- {{ $articles->links() }} --}}
                    </x-slot>  -->
                </x-table-blade>
            
                <div class="float-right mt-2 pb-2 pr-4 pt-4">
                    <div >Sub-Total 
                        <div class="float-right ml-2 bg-red-500 w-24">
                            <label class="text-white ml-2">{{$sbt}}</label>
                        </div>
                    </div>
                    <div >I.V.A. 
                        <div class="float-right ml-2 bg-red-500 w-24">
                            <label class="text-white ml-2">{{$iva}}</label>
                        </div>
                    </div>
                    <div >TOTAL 
                        <div class="float-right ml-2 bg-red-500 w-24">
                            <label class="text-white ml-2">{{$total}}</label>
                        </div>
                    </div>
                </div>

        </div>                    
    </div>
</div>