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
    <p>Wir geben ihnen Bescheid sobald die Verlosung stattgefunden hat. (Datum).<br>In der Zwischenzeit greifen Sie sich Ihren Sofortpreis. Ihr Sofortpreis ist {{ $participant->selection == 'Baumcheck' ? 'ein' : 'eine'}} {{ $participant->selection}}!</p>
    <p><strong>Jetzt Termin vereinbaren und Sofortpreis einlösen.</strong></p>
    <div class="mt-15 lg:mt-20 flex items-center gap-x-15 lg:gap-x-30">
      <a 
        href="tel:043 333 33 88" 
        class="bg-copper hover:bg-white hover:text-fern inline-flex items-center hover:bg-olive transition-colors text-white whitespace-nowrap px-12 lg:px-16 py-6 lg:py-10 leading-none rounded-full group"
        title="Jetzt Termin vereinbaren und Sofortpreis einlösen.">
        <x-icons.phone class="w-18 lg:w-24 h-auto mr-8 lg:mr-10 text-white group-hover:text-fern transition-colors" />
        043 333 33 88
      </a>
      <a 
        href="mailto:"
        title="E-Mail schreiben"
        class="underline underline-offset-4 hover:no-underline decoration-1 text-md lg:text-lg">
        E-Mail schreiben
      </a>
    </div>
  </div>
</x-layout.inner>
@endsection