@props(['message'])
<span {{ $attributes->merge(['class' => 'text-copper js-error']) }}>
  {{ $message }}
</span> 