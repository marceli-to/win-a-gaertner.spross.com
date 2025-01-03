<footer class="pb-10 lg:pb-20 mt-20 lg:mt-40">
  <x-layout.inner>
    <div class="text-sm text-center flex flex-col gap-y-10 lg:flex-row lg:items-center lg:justify-center lg:gap-x-5">
      <div class="md:inline">&copy; Spross-Gruppe, {{ date('Y') }}</div><span class="hidden lg:inline"> &mdash; </span>
      <div class="flex flex-wrap items-center justify-center gap-y-5 gap-x-10 lg:gap-x-5">
        <a 
          href="https://www.spross.com/meta/datenschutz"
          target="_blank"
          title="Teilnahmebedingungen"
          class="inline-block mr-3 hover:text-moss transition-colors hover:underline decoration-1 underline-offset-4">
          Teilnahmebedingungen
        </a>
        <a 
          href="https://www.spross.com/meta/datenschutz"
          target="_blank"
          title="Datenschutz"
          class="inline-block mr-3 hover:text-moss transition-colors hover:underline decoration-1 underline-offset-4">
          Datenschutz
        </a>
        <a
          href="https://www.spross.com/meta/disclaimer"
          target="_blank"
          rel="noopener noreferrer"
          title="Disclaimer"
          class="inline-block mx-3 hover:text-moss transition-colors hover:underline decoration-1 underline-offset-4">
          Disclaimer
        </a>
        <a 
          href="https://www.spross.com/meta/impressum"
          target="_blank"
          rel="noopener noreferrer"
          title="Impressum"
          class="inline-block mx-3 hover:text-moss transition-colors hover:underline decoration-1 underline-offset-4">
          Impressum
        </a>
      </div>
      <div class="flex items-center justify-center gap-x-10 xl:gap-x-15">
        <x-buttons.secondary 
          href="https://www.spross.com"
          target="_blank"
          class="{{ !Route::is('page.competition') ? 'bg-white !text-fern' : 'bg-fern text-white' }} flex items-end group">
          spross.com
          <x-icons.arrow class="w-12 lg:w-14 h-auto mt-2 ml-4 group-hover:translate-x-3 transition-transform {{ Route::is('page.competition') ? 'text-white' : 'text-fern' }}" />
        </x-buttons.secondary>
        <a 
          href="https://www.facebook.com/Spross.Gruppe" 
          target="_blank"
          rel="noopener noreferrer"
          title="Spross auf Facebook"
          class="inline-block group">
          <x-icons.facebook class="{{ Route::is('page.competition') ? 'text-fern' : 'text-white' }}" />
        </a>
        <a 
          href="https://www.linkedin.com/company/spross" 
          target="_blank"
          rel="noopener noreferrer"
          title="Spross auf LinkedIn"
          class="inline-block group">
          <x-icons.linkedin class="{{ Route::is('page.competition') ? 'text-fern' : 'text-white' }}" />
        </a>
      </div>
    </div>
  </x-layout.inner>
</footer>
@vite('resources/js/app.js')
</body>
</html>
<!-- made with ❤ by jamon.digital & marceli.to -->