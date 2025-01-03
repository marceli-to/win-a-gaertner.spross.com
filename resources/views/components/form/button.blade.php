@props(['type' => 'submit'])
<button type="{{ $type }}" {{ $attributes->merge(['class' => 'bg-fern hover:bg-copper text-white font-thesans-bold transition-all rounded-full text-2xl md:text-3xl lg:text-4xl py-5 px-20 lg:px-30 transition-all']) }}>
  {{ $slot}}
</button>