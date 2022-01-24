{{--  <x-guest-layout class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">

    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>  --}}
<x-guest-layout>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="bg-no-repeat bg-cover bg-center relative" style="background-image:
            url(https://images.unsplash.com/photo-1515715709530-858f7bfa1b10?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1079&q=80);">
            <div class="absolute bg-gradient-to-b from-gray-700 to-gray-500 opacity-75 inset-0 z-0">
            </div>
  <div class=" min-h-screen sm:flex sm:flex-row mx-0 justify-center">
      <div class="flex-col flex  self-center p-10 sm:max-w-5xl xl:max-w-2xl  z-10">
        <div class="self-start hidden lg:flex flex-col  text-white">
          <img src="{{url('/zhafirahcatering-frontend/images/content/loginpic.png')}}" class="mb-3 w-72 fkex justify-center self-center">

          <h1 class="mb-4 font-bold text-4xl text-white">Hi 👋 Welcome Zhafirah Catering </h1>
            <p class="pr-3 text-white">Silahkan Log in terlebih dahulu sebelum memesan Paket Menu Zhafirah Catering <br>
            Abadikan Momment Bahagiamu Bersama Zhafirah Catering
        </p>
        </div>
      </div>
      <div class="flex justify-center self-center  z-10">

        <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="p-12 bg-white mx-auto rounded-2xl w-100 ">
                <div class="mb-4">

                    <x-jet-validation-errors class="mb-4" />
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                  <h3 class="font-semibold text-2xl text-gray-800">Sign In </h3>
                  <p class="text-gray-500">Please sign in to your account.</p>
                </div>
                <div class="space-y-5">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                    <div class="space-y-2">
                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                    <div class="flex items-center justify-end mt-4 ml-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                    </div>
                    <div>
                        <x-jet-button class="w-full flex justify-center bg-blue-400  hover:bg-blue-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </div>
                <div class="pt-5 text-center text-gray-400 text-xs">
                  <span>
                    Copyright Zhafirah Catering © 2021-2022
                    <a href="https://codepen.io/uidesignhub" rel="" target="_blank" title="Ajimon" class="text-green hover:text-green-500 ">AJI</a></span>
                </div>
            </div>
        </form>

      </div>
  </div>
</div>
</x-guest-layout>
