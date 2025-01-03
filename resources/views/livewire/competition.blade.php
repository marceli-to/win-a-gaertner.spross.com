<form wire:submit="save" class="max-w-3xl mx-auto mt-30 md:mt-40 lg:mt-50">
  @if (session()->has('status'))
    <x-form.state />
  @endif

  <x-layout.grid class="sm:gap-y-15 md:gap-y-20">
    <x-honeypot />

    <x-layout.span class="sm:col-span-full !mb-20">
      <h2 class="font-thesans-extrabold text-2xl sm:text-3xl md:text-4xl lg:text-5xl mb-10">
        Ihr Sofortpreis
      </h2>
      <div class="flex items-center mb-5">
        <x-form.radio name="selection" id="selection_one" class="mt-4 xs:mt-3" value="Baumcheck" />
        <x-form.checkbox-label for="selection_one" class="!ml-10 lg:!ml-15 mt-4 text-2xl md:text-3xl lg:text-4xl leading-none js-label-group {{ $errors->has('selection') ? '!text-copper' : '' }}">
          Einen Baumcheck
        </x-form.checkbox-label>
      </div>
      <div class="flex items-center mb-5">
        <x-form.radio name="selection" id="selection_two" class="mt-4 xs:mt-3" value="Profiberatung" />
        <x-form.checkbox-label for="selection_two" class="!ml-10 lg:!ml-15 mt-4 text-2xl md:text-3xl lg:text-4xl leading-none js-label-group {{ $errors->has('selection') ? '!text-copper' : '' }}">
          Eine Profiberatung
        </x-form.checkbox-label>
      </div>
      <div class="flex items-center mb-5">
        <x-form.radio name="selection" id="selection_three" class="mt-4 xs:mt-3" value="Pflanze" />
        <x-form.checkbox-label for="selection_three" class="!ml-10 lg:!ml-15 mt-4 text-2xl md:text-3xl lg:text-4xl leading-none js-label-group {{ $errors->has('selection') ? '!text-copper' : '' }}">
          Eine Pflanze
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
          Ich habe die <a href="" title="Teilnahmebedingungen anzeigen" target="_blank" class="underline underline-offset-4 decoration-1 hover:no-underline">Teilnahmebedingungen</a> gelesen.
        </x-form.checkbox-label>
      </div>
    </x-layout.span>

    <x-layout.span class="sm:col-span-full flex justify-center mt-30 lg:mt-50">
      <x-form.button>
        🪄 Senden
      </x-form.button>
    </x-layout.span>

  </x-layout.grid>
</form>
