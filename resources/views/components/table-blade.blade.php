<div>
    <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block sm:px-6 lg:px-6 ">
            <div class="overflow-hidden sm:rounded-lg px-4 pb-2">
                {{ $slot }}
            </div>
            
            @if (isset($links))
            <div class="px-4">
                {{ $links }}
            </div>
            @endif
        </div>
    </div>
</div>
