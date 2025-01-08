@extends('app')
@section('content')
<x-layout.inner>
  <h1 class="text-white relative">
    Need a<br><span id="typewriter">Staudentrimmer?</span>&nbsp;
    <x-icons.nerdy-face class="w-24 sm:w-36 md:w-40 lg:w-60 h-auto absolute right-0 top-0" />
  </h1>
  <div class="md:flex mt-10 md:mt-0 gap-40">
    <div class="lead">
      Our Englisch ist vielleicht not the strongest. Aber in the garden ist Spross the boss!
    </div>
    <x-buttons.cta />
  </div>
</x-layout.inner>
@endsection
