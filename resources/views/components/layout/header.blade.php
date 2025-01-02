<header class="pt-20 lg:pt-30">
  <x-layout.inner>
    <a 
      href="{{ route('page.home') }}"
      title="Startseite">
      <x-icons.logo class="w-125 xl:w-[185px] h-auto {{ Route::is('page.competition') ? 'text-fern' : 'text-white'}}" />
    </a>
  </x-layout.inner>
</header>