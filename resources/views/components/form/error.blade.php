@props(['message'])
<span {{ $attributes->merge(['class' => 'text-red-500 js-error']) }}>
  {{ $message }}
</span> 