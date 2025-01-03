@props(['id' => '', 'name'])
<input 
  type="radio" 
  wire:model="{{ $name }}" 
  name="{{ $name }}" 
  id="{{ $id }}"
  {{ $attributes->merge(['class' => 'appearance-none rounded-full size-24 lg:size-32 ring-0 focus:ring-0 !ring-offset-0 !outline-none border-fern border-2 text-fern bg-white accent-fern']) }}>