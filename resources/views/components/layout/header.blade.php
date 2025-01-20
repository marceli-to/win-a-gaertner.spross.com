<header class="pt-30">
  <x-layout.inner flex="1" >
    <a
      href="{{ route('page.home') }}"
      title="Startseite">
      <x-icons.logo class="w-125 xl:w-[185px] h-auto {{ Route::is('page.competition') || Route::is('page.conditions') || Route::is('page.dashboard')  ? 'text-fern' : 'text-white'}}" />
    </a>
    @if(Route::is('page.conditions'))
        <a class="w-40" href="{{ route('page.competition') }}"><img src="/media/close.svg" class="fixed w-30 lg:w-40 mt-5 hover:opacity-50" alt="close"/></a>
    @endif
  </x-layout.inner>
</header>
