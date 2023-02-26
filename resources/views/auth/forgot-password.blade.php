@extends('layouts.frontend.master')
@section('content')
    <section class="form_sign_in py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-4"  style="background:#f0f0f061; box-shadow:0 4px 6px -1px rgb(0 0 0 / .1), 0 2px 4px -2px rgb(0 0 0 / .1)">
                <div class="forget-pass p-2">
                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one') }}
                    </div>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <div class="">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div>
                                <label for="email" :value="Email" />Email</label>
                                <input id="email" style="" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus aria-describedby="emailHelp" />
                                @error('email')
                                    <div class="invalid-feedback">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                @enderror
                            </div>
                            <div class="text-end mt-4 pb-2">
                                <button class="main-btn-notHover" style="border:none; padding: 0px 20px; line-height: 40px;
                                font-size: 14px; " type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </div>
                           
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            @error('email')
                <div class="invalid-feedback">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
