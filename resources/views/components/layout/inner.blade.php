@if(isset($flex))
    <div {{ $attributes->merge(['class' => 'w-full max-w-7xl mx-auto px-20 xl:px-40 flex justify-between' ]) }}>
      {{ $slot }}
    </div>
@else
    <div {{ $attributes->merge(['class' => 'w-full max-w-7xl mx-auto px-20 xl:px-40' ]) }}>
      {{ $slot }}
    </div>
@endif
