@extends('app')
@section('content')
<x-layout.inner>
  <h1 class="font-thesans-semibold xl:text-5xl leading-none text-white">
    Need a<br>Staudentrimmer?
  </h1>
  <div class="md:flex xl:mt-32">
    <div class="xl:text-4xl text-meadow text-pretty xl:mt-12">
      Our Englisch ist vielleicht not the strongest. Aber in the garden ist Spross the boss!
    </div>
    <x-buttons.cta />
  </div>
</x-layout.inner>
@endsection