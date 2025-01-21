@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-fern text-2xl leading-[1.2] mb-10']) }}>
  {{ $value ?? $slot }}
</label>
