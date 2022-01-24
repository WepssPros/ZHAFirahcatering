@extends('layouts.admin')

@section('Dashboard-Content')

@livewireStyles
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Profile') }} {{Auth::user()->name}}
</h2>


<div>
<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
        @livewire('profile.update-profile-information-form')


    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        <div class="mt-10 sm:mt-0">
            @livewire('profile.update-password-form')
        </div>


    @endif


</div>
</div>


@endsection


