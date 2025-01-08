@props(['id' => '', 'name'])
<label class="relative inline-flex items-center self-start mt-[0.2em] me-16">
  <input
    type="radio"
    wire:model="{{ $name }}"
    name="{{ $name }}"
    id="{{ $id }}"
    {{ $attributes->merge(['class' => 'appearance-none rounded-full size-24 lg:size-32 ring-0 focus:ring-0 !ring-offset-0 !outline-none !border-fern border-3 lg:border-3 text-white bg-white accent-none']) }}>
  <svg class="hidden absolute left-3 lg:left-5 top-0 w-24 lg:w-30 h-auto" width="35" height="33" viewBox="0 0 35 33" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1.5 21.5L11 29.5L33 2" stroke="#376C1B" stroke-width="4"/>
  </svg>
</label>
