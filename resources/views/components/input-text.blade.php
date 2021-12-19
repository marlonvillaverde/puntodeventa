@props(['disabled' => false])


<div class="flex mt-2">
    @if( isset( $labelvar ) )
        <x-jet-label>{{$labelvar}}</x-jet-label>
    @endif
    <div class="ml-2">
        
        <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-400 focus:border-indigo-400 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 hover:border-blue-300 hover:bg-blue-200 hover:text-white rounded-md shadow-sm']) !!} wire:model="{{$varname}}">

        @error('{{$varname}}')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
