<x-layout.head />
<x-layout.header />
<x-layout.main class="{{ Route::is('page.dashboard') ? '!justify-start' : '' }}">
  @yield('content')
</x-layout.main>
<x-layout.footer />