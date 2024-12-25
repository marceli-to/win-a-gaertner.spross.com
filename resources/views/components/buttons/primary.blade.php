@props(['href', 'target' => '_blank'])
<a href="{{ $href }}" target="{{ $target }}" {{ $attributes->merge(['class' => 'bg-fern hover:bg-olive transition-colors text-white whitespace-nowrap px-18 py-12 lg:px-24 lg:py-16 2xl:px-36 2xl:py-24 uppercase leading-none rounded-full text-lg lg:text-2xl 2xl:text-4xl']) }}">
  {{ $slot }}
</a>