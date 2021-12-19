<button {{ $attributes->merge(['type' =>'submit', 'class'=>'inline-flex items-center px-2 py-1 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition fas fa-backspace', 'title'=>"Eliminar" ])}}>
    {{ $slot }}
</button>
