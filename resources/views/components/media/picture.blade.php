@props(['image', 'alt' => '', 'lazy' => true])
<picture class="w-full">
  <source media="(min-width: 768px)" srcset="/media/{{ $image }}.jpg">
  <img 
    src="/media/{{ $image }}-sm.jpg" 
    alt="{{ $alt }}" 
    title="{{ $alt }}" 
    height="800" 
    width="800"
    loading="lazy"
    {{ $attributes->merge(['class' => 'block']) }}>
</picture>