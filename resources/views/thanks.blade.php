@extends('app')
@section('content')
<x-layout.inner>
  <h1 class="text-white relative">
    Merci und viel Glück!
    <x-icons.party-cone class="w-24 sm:w-36 md:w-40 lg:w-60 h-auto absolute right-0 top-0" />
  </h1>
  <div class="max-w-prose">
    <div class="lead !hyphens-none mb-16 lg:mb-24">
      Ihre E-Mail-Adresse ist bestätigt und Sie sind beim Wettbewerb dabei.
    </div>
    <p>
      Ob Sie den Hauptpreis gewonnen haben, erfahren Sie nach der Verlosung im Frühling 2025.<br>
      @if ($participant->selection == 'Gartenpflege')
        Ihren Sofortpreis – 300 CHF Rabatt auf eine Gartenpflege. Gültig für Aufträge ab CHF 1500 – haben Sie aber jetzt schon auf sicher.
      @endif
      @if ($participant->selection == 'Gartenberatung')
        Ihren Sofortpreis – Eine Gartenberatung im Wert von CHF 150 – haben Sie aber jetzt schon auf sicher.
      @endif
      @if ($participant->selection == 'Baumcheck')
        Ihren Sofortpreis – Einen Baumcheck im Wert von CHF 150 – haben Sie aber jetzt schon auf sicher.
      @endif
    </p>
    <p><strong class="font-thesans-extrabold">Vereinbaren Sie jetzt einen Termin und lösen Sie Ihren Sofortpreis ein:</strong></p>
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
