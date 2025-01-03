@props(['href', 'target' => '_blank'])
<a href="{{ $href }}" target="{{ $target }}" {{ $attributes->merge(['class' => 'bg-fern inline-flex items-center hover:bg-olive transition-colors text-white whitespace-nowrap px-12 lg:px-16 pb-6 pt-4 sm:ml-3 2xl:ml-10 leading-none rounded-full']) }}">
  {{ $slot }}
</a>