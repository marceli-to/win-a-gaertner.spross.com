@props(['id' => '', 'name'])
<input 
  type="checkbox" 
  wire:model="{{ $name }}" 
  name="{{ $name }}" 
  id="{{ $id }}"
  {{ $attributes->merge(['class' => 'appearance-none m w-14 h-14 lg:w-15 lg:h-15 ring-0 focus:ring-0 !ring-offset-0 !outline-none border-fern text-fern bg-white accent-fern']) }}>