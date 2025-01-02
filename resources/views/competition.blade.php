@extends('app')
@section('content')
<x-layout.inner class="text-fern">
  <h1 class="text-copper">Win a Gärtner!</h1>
  <p class="max-w-prose">Gewinnen Sie mit etwas Glück ein <strong>Gartenabo im Wert von CHF 5000.–</strong> für die professionelle Pflege Ihres Gartens. Alle Teilnehmenden bekommen einen Sofortpreis nach Wahl. <strong>Wettbewerbsschluss ist der 25.10.2024.</strong></p>
  @livewire('competition-form')
</x-layout.inner>
@endsection