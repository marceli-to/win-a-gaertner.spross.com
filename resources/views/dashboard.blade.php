@extends('app')
@section('content')
<x-layout.inner class="text-fern relative">
  <a 
    href="{{ route('logout')}}"
    class="absolute right-20 xl:right-50 top-0 text-md">
    Logout
  </a>
  <div id="dashboard"></div>
</x-layout.inner>
@endsection