@props(['id' => '', 'name'])
<input 
  type="checkbox" 
  wire:model="{{ $name }}" 
  name="{{ $name }}" 
  id="{{ $id }}"
  {{ $attributes->merge(['class' => 'appearance-none size-16 lg:size-18 ring-0 focus:ring-0 !ring-offset-0 !outline-none border-fern/50 border-2 text-fern bg-white accent-fern']) }}>