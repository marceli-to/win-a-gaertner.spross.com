<form wire:submit="save" class="max-w-3xl mx-auto xl:mt-40">
  @if (session()->has('status'))
    <x-form.state />
  @endif

  <x-layout.grid class="sm:gap-y-15 lg:gap-x-25 lg:gap-y-20">
    <x-honeypot />
    
    <x-layout.span class="relative sm:col-span-full">
      <x-form.label>Vor- und Nachname</x-form.label>
      <x-form.input name="name" isWire="true" />
      @error('name')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>

    <x-layout.span class="relative sm:col-span-full">
      <x-form.label>Strasse, Nr.</x-form.label>
      <x-form.input name="street" isWire="true" />
      @error('street')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>

    <x-layout.span class="relative sm:col-span-full sm:flex">
      <div>
        <x-form.input name="zip" placeholder="PLZ" isWire="true" />
        @error('zip')
          <x-form.error message="{{ $message }}" />
        @enderror
      </div>
      <div>
        <x-form.input name="city" placeholder="Ort" isWire="true" />
        @error('city')
          <x-form.error message="{{ $message }}" />
        @enderror
      </div>
    </x-layout.span>

    <x-layout.span class="relative sm:col-span-full">
      <x-form.input name="email" type="email" placeholder="E-Mail*" isWire="true" />
      @error('email')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>

    <x-layout.span class="relative sm:col-span-full">
      <x-form.input name="phone" placeholder="Telefon" isWire="true" />
      @error('phone')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>

    <x-layout.span class="relative sm:col-span-full">
      @error('privacy')
        <x-form.error 
          message="Datenschutzerklärung muss akzeptiert werden"
          class="relative right-auto left-0 mb-6"
          />
      @enderror
      <div class="flex items-start">
        <x-form.checkbox name="privacy" id="privacy_general" isWire="true" class="mt-2 lg:mt-6" />
        <x-form.checkbox-label for="privacy_general" class="ml-6 lg:!ml-10">
          Ich habe die <a href="" title="Datenschutzerklärung" target="_blank" class="hover:underline underline-offset-2 decoration-1">Datenschutzerklärung</a> gelesen und akzeptiere diese
        </x-form.checkbox-label>
      </div>
    </x-layout.span>

    <x-layout.span class="sm:col-span-full mt-5">
      <x-form.button>
        <div wire:loading>
          <x-form.spinner class="mr-12" />
        </div>
        Absenden
      </x-form.button>
    </x-layout.span>

  </x-layout.grid>
</form>
