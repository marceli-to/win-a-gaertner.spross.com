@extends('app')
@section('content')
<x-layout.inner>
  <h1 class="text-white relative">
    Vielen Dank!
    <x-icons.party-cone class="w-24 sm:w-36 md:w-40 lg:w-60 h-auto absolute right-0 top-0" />
  </h1>
  <div class="max-w-prose">
    <div class="lead !hyphens-none mb-16 lg:mb-24">
      Sie haben erfolgreich an dem Gewinnspiel teilgenommen.
    </div>
    <p>Wir geben ihnen Bescheid sobald die Verlosung stattgefunden hat. (Datum). <br>In der Zwischenzeit greifen Sie sich Ihren Sofortpreis. Ihr Sofortpreis ist ein Baumcheck!</p>
    <p><strong>Jetzt Termin vereinbaren und Sofortpreis einlösen.</strong></p>
  </div>
</x-layout.inner>
@endsection