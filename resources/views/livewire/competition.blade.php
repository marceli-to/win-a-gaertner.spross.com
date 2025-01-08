

 <form wire:submit="save" class="mt-30 md:mt-40 lg:mt-50">

  @if ($is_submitted)
    <div class="max-w-prose">
      <h3 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl mb-10 lg:mb-20">
        <x-icons.envelope class="inline-block lg:ml-10 w-24 sm:w-36 md:w-40 lg:w-60 h-auto" /><br>
        <span>Bitte bestätigen Sie Ihre Mail-Adresse</span>

      </h3>
      <p>In Ihrer Mailbox finden Sie ein Mail, um Ihre E-Mail-Adresse zu bestätigen. Sobald das erledigt ist, sind Sie beim Wettbewerb dabei. Wir drücken schon mal die Daumen!</p>
    </div>
  @else
      <p class="max-w-prose mb-48">

      Gewinnen Sie mit etwas Glück ein <strong class="font-thesans-extrabold">Gartenabo im Wert von CHF 5000.–</strong> für die professionelle Pflege Ihres Gartens. Alle Teilnehmenden bekommen einen Sofortpreis nach Wahl. </p>

    <div class="max-w-3xl mx-auto">
      <x-layout.grid class="sm:gap-y-15 md:gap-y-20">
        <x-honeypot />

        <x-layout.span class="sm:col-span-full !mb-20">
          <h2 class="font-thesans-extrabold text-2xl sm:text-3xl md:text-4xl lg:text-5xl mb-10 lg:mb-24">
            Ich hätte gerne diesen Sofortpreis
          </h2>
          <div class="flex items-center mb-10 lg:mb-5 lg:mb-24 radio-row">
            <x-form.radio name="selection" id="selection_one" class="mt-4 xs:mt-3" value="Gartenpflege" />
            <x-form.checkbox-label for="selection_one" class="!ml-10 lg:!ml-15 mt-4 text-2xl md:text-3xl lg:text-4xl leading-none js-label-group {{ $errors->has('selection') ? '!text-copper' : '' }}">
              <strong class="font-thesans-extrabold">300 CHF Rabatt auf Gartenpflege</strong><p class="text-lg lg:text-2xl mt-[0.35em] lg:mt-[0.18em]">Gültig für Aufträge ab CHF 1500.–</p>
            </x-form.checkbox-label>
          </div>
          <div class="flex items-center mb-10 lg:mb-5 lg:mb-24 radio-row">
            <x-form.radio name="selection" id="selection_two" class="mt-4 xs:mt-3" value="Gartenberatung" />
            <x-form.checkbox-label for="selection_two" class="!ml-10 lg:!ml-15 mt-4 text-2xl md:text-3xl lg:text-4xl leading-none js-label-group {{ $errors->has('selection') ? '!text-copper' : '' }}">
              <strong class="font-thesans-extrabold">Eine Gartenberatung</strong><p class="text-lg lg:text-2xl mt-[0.35em] lg:mt-[0.18em]">Im Wert von CHF 150.–</p>
            </x-form.checkbox-label>
          </div>
          <div class="flex items-center mb-10 lg:mb-5 lg:mb-24 radio-row">
            <x-form.radio name="selection" id="selection_three" class="mt-4 xs:mt-3" value="Baumcheck" />
            <x-form.checkbox-label for="selection_three" class="!ml-10 lg:!ml-15 mt-4 text-2xl md:text-3xl lg:text-4xl leading-none js-label-group {{ $errors->has('selection') ? '!text-copper' : '' }}">
              <strong class="font-thesans-extrabold">Ein Baumcheck</strong><p class="text-lg lg:text-2xl mt-[0.35em] lg:mt-[0.18em]">Im Wert von CHF 150.–</p>
            </x-form.checkbox-label>
          </div>
        </x-layout.span>

        <x-layout.span class="sm:col-span-full">
          <x-form.label class="relative">
            <span class="{{ $errors->has('name') ? 'hidden' : '' }} js-label">Vor- und Nachname</span>
            <x-form.error message="{{ $errors->first('name') }}" />
          </x-form.label>
          <x-form.input name="name" isWire="true" :class="$errors->has('name') ? '!border-copper/50' : '' " />
        </x-layout.span>

        <x-layout.span class="sm:col-span-full">
          <x-form.label class="relative">
            <span class="{{ $errors->has('street') ? 'hidden' : '' }} js-label">Strasse, Nr.</span>
            <x-form.error message="{{ $errors->first('street') }}" />
          </x-form.label>
          <x-form.input name="street" isWire="true" :class="$errors->has('street') ? '!border-copper/50' : '' " />
        </x-layout.span>

        <x-layout.span class="sm:col-span-full sm:flex sm:gap-x-15 lg:gap-x-30">
          <div class="sm:w-1/3 mb-15 sm:mb-0">
            <x-form.label class="relative">
              <span class="{{ $errors->has('zip') ? 'hidden' : '' }} js-label">PLZ</span>
              <x-form.error message="{{ $errors->first('zip') }}" />
            </x-form.label>
            <x-form.input name="zip" isWire="true" :class="$errors->has('zip') ? '!border-copper/50' : '' " />
          </div>
          <div class="sm:w-full">
            <x-form.label class="relative">
              <span class="{{ $errors->has('city') ? 'hidden' : '' }} js-label">Ort</span>
              <x-form.error message="{{ $errors->first('city') }}" />
            </x-form.label>
            <x-form.input name="city" isWire="true" :class="$errors->has('city') ? '!border-copper/50' : '' " />
          </div>
        </x-layout.span>

        <x-layout.span class="sm:col-span-full">
          <x-form.label class="relative">
            <span class="{{ $errors->has('email') ? 'hidden' : '' }} js-label">E-Mail</span>
            <x-form.error message="{{ $errors->first('email') }}" />
          </x-form.label>
          <x-form.input name="email" type="email" isWire="true" :class="$errors->has('email') ? '!border-copper/50' : '' " />
        </x-layout.span>

        <x-layout.span class="sm:col-span-full">
          <x-form.label class="relative">
            <span class="{{ $errors->has('phone') ? 'hidden' : '' }} js-label">Telefon</span>
            <x-form.error message="{{ $errors->first('phone') }}" />
          </x-form.label>
          <x-form.input name="phone" isWire="true" :class="$errors->has('phone') ? '!border-copper/50' : '' " />
        </x-layout.span>

        <x-layout.span class="sm:col-span-full">
          <div class="flex items-start">
            <x-form.checkbox name="terms" id="terms" isWire="true" class="mt-4 xs:mt-3" />
            <x-form.checkbox-label for="terms" class="!ml-10 text-md lg:text-lg js-label {{ $errors->has('terms') ? '!text-copper' : '' }}">
              Ich habe die <a href="{{ route('page.conditions') }}" title="Teilnahmebedingungen anzeigen"  class="underline underline-offset-4 decoration-1 hover:no-underline">Teilnahmebedingungen</a> gelesen und bin damit einverstanden.
            </x-form.checkbox-label>
          </div>
        </x-layout.span>

        <x-layout.span class="sm:col-span-full flex justify-center mt-30 lg:mt-50">
          <x-form.button>
            🪄 Senden
          </x-form.button>
        </x-layout.span>

      </x-layout.grid>
    </div>
  @endif
</form>
