@extends('app')
@section('content')
<x-layout.inner class="text-fern">
  <h1 class="text-copper mb-20 md:mb-30 lg:mb-40 flex justify-between items-start">
    Win a Gärtner!
    <x-icons.shears class="w-36 sm:w-44 md:w-60 lg:w-80 h-auto mt-4 lg:mt-8" />
  </h1>
  @livewire('competition-form')
</x-layout.inner>
@endsection
