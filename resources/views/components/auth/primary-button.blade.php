<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-fern hover:bg-fern-sat text-white font-thesans-bold transition-all rounded-full text-3xl py-5 px-20 lg:px-30 transition-all']) }}>
    {{ $slot }}
</button>
