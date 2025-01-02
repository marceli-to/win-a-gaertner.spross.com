@props(['type' => 'text', 'placeholder' => '', 'name', 'isWire' => false])
@if ($isWire)
  <input 
    type="text" 
    wire:model="{{ $name }}" 
    placeholder="{{ $placeholder }}"
    @if ($type == 'date')
    onfocus="(this.type='date')"
    @endif
    class="bg-white text-lg md:text-xl lg:text-2xl px-10 py-10 w-full !ring-0 focus:ring-0 !border-fern/50 border-2">
@else
  <input 
    type="{{ $type }}" 
    name="{{ $name }}" 
    placeholder="{{ $placeholder }}" 
    class="bg-white text-lg md:text-xl lg:text-2xl px-10 py-10 w-full !ring-0 focus:ring-0 !border-fern/50 border-2">
@endif