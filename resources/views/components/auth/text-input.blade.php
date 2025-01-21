@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-white text-fern text-lg md:text-xl lg:text-2xl p-5 lg:p-10 w-full !ring-0 focus:ring-0 !border-fern/50 border-2']) !!}>
