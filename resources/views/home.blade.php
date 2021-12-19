<x-app-layout>
    {{--  Header --}}
    <x-slot name="header">
        <x-header-layout></x-header-layout>
    </x-slot>

    {{-- Body --}}
    <div class="container mx-auto">
        <div class="grid grid-cols-1 gap-2 mt-2 md:grid-cols-2 lg:grid-cols-4">
            <x-card-main-option title="Ventas" text="Para registrar la ventas que se hacen" faimg="fa-shopping-bag" ruta="{{route('ventas.nuevaventa')}}"/>
            <x-card-main-option title="inventario" text="Actualziación del Inventario" faimg=""/>
            <x-card-main-option title="Consultas" text="Nos e que coño es una consulta" faimg="" />
            <x-card-main-option title="Reportes" text="Reportes varios emitidos por la aplicación" faimg="fa-solid fa-chart-pie"  />
            <x-card-main-option title="Notas de Débito" text="Reportes varios emitidos por la aplicación" faimg=""/>
            <x-card-main-option title="Notas de Crédito" text="Reportes varios emitidos por la aplicación" faimg=""/>
            <!-- <x-card-main-option title="Guias de Rmeisión" text="Reportes varios emitidos por la aplicación" faimg=""/> -->
            <x-card-main-option title="Cuentas x Cobrar" text="Reportes varios emitidos por la aplicación" faimg=""/>
            <x-card-main-option title="Cuentas x Pagar" text="Reportes varios emitidos por la aplicación" faimg=""/>
            <x-card-main-option title="Compras" text="Registro de compras y reposicion de inventario" faimg=""/>
            <x-card-main-option title="Gastos" text="Registro de gastos operativos de la empresa" faimg=""/>
        </div>
    </div>

    {{-- Footer --}}
    <x-slot name="footer">
        <x-footer-layout></x-footer-layout>
    </x-slot>

</x-app-layout>
