<x-guest-layout>
    <!-- Session Status -->
    <x-auth.session-status class="mb-4" :status="session('status')" />

    <form 
      method="POST" 
      action="{{ route('login') }}" 
      class="bg-white min-w-[480px] p-20 rounded-md flex flex-col gap-y-30">
      @csrf

      <div>
        <x-auth.input-label for="email" :value="__('E-Mail')" />
        <x-auth.text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-auth.input-error :messages="$errors->get('email')" class="block mt-10" />
      </div>

      <div class="mt-4">
        <x-auth.input-label for="password" :value="__('Passwort')" />
        <x-auth.text-input 
          id="password"
          type="password"
          name="password"
          required autocomplete="current-password" />
        <x-auth.input-error :messages="$errors->get('password')" class="block mt-10" />
      </div>

      <div class="flex items-center justify-end mt-4">
        <x-auth.primary-button class="ms-3">
          {{ __('Login') }}
        </x-auth.primary-button>
      </div>
    </form>
</x-guest-layout>
