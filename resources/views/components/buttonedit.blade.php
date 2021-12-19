<button {{ $attributes->merge( ['type'=>'submit', 'class'=>'inline-flex items-center px-2 py-1 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 disabled:opacity-25 transition far fa-edit', 'title'=>'Editar'] ) }}>
    {{ $slot }}
</button>
