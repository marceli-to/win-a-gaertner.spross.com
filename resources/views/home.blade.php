@extends('app')
@section('content')
<x-layout.inner>
  <h1 class="text-white">Need a<br><span id="typewriter">Staudentrimmer?</span>&nbsp;</h1>
  <div class="md:flex mt-10 md:mt-0">
    <div class="lead">
      Our Englisch ist vielleicht not the strongest. Aber in the garden ist Spross the boss!
    </div>
    <x-buttons.cta />
  </div>
</x-layout.inner>
@endsection