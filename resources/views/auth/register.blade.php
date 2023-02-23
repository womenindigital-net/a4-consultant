@extends('layouts.frontend.master')
@section('content')
    <!-- Sub Nav Start -->
    <!-- Sign in form Start -->
    <section class="form_sign_in">
        <div>
            <div class="container mb-4">
                <div class="text-center ">
                    <h2 class="mb-4 mt-3 d-title">Sign in</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 my-0 mx-auto">
                        <div class="rounded" style="background: #f0f0f061;">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="p-5">
                                    <!-- Name -->
                                    <div class="form-group pb-3">
                                        <label for="name" class="pb-2">Full Name</label>
                                        <input style="background-color: #FFFFFF; border-radius:10px" id="name"
                                            type="text"
                                            class=" inputPadding form-control @error('name')  is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required autofocus>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Email Address -->
                                    <div class="form-group pb-3">
                                        <label for="email" class="pb-2" style="font-size: 14px;">email</label>
                                        <input id="email"
                                            type="email" name="email" value="{{ old('email') }}"
                                            class="inputPadding form-control @error('email')  is-invalid @enderror"
                                            required>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Password -->
                                    <div class="form-group pb-3">
                                        <label for="password" class="pb-2" style="font-size: 14px;">Password</label>
                                        <div class="input-group d-flex align-items-center mb-3">
                                            <input style="border-radius: 10px;" id="password-field" type="password"
                                                class="form-control @error('email') is-invalid @enderror"
                                                name="password" value="secret">
                                            <span
                                                style="margin-left:88%; z-index: 999; position: absolute;  color: #CCCCCC;"
                                                toggle="#password-field"
                                                class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        </div>
                                        <div class="d-none text-danger" id="password_not_con">
                                            <small class="p-0 m-0" style="font-size: 13px;"> {{ __('messages.Password_and_confirm_password_not_match') }}</small>
                                        </div>
                                        @error('password')
                                            <div class="invalid-feedback ">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                    {{-- niye aschi --}}

                                    <!-- Confirm Password -->
                                    <div class="form-group pb-1">
                                        <label for="password_confirmation" class="pb-2" style="font-size: 14px;">Confirm Password</label>
                                        <input style="background-color: #FFFFFF; border-radius:10px"
                                            id="password_confirmation" type="password" name="password_confirmation"
                                            class="inputPadding form-control @error('password_confirmation')  is-invalid @enderror" required>
                                      @error('password_confirmation')
                                            <div class="invalid-feedback ">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <p class="BetweeenChatac">{{ __('messages.Between_8_and_72_characters') }} </p>

                                    <!--continue -->
                                    <button type="submit" id="register_btn_sbmt"
                                        class="form_btn mt-4 inputPadding btn btn-dark border-0 w-100 text-bold disabled"
                                        style="background: #FFB317; font-size:14px; border-radius:10px; ">{{ __('messages.Continue') }} </button>

                                    <div class="mt-3 mb-4"
                                        style="width: 100%; height: 20px; border-bottom: 0.5px solid #CCCCCC; text-align: center">
                                        <span style="font-size: 14px; background-color: #F0F0F0; color:#CCCCCC;">
                                            or
                                        </span>
                                    </div>

                                    <!-- google	 -->
                                    <a style="background: #FFB317; font-size:14px; border-radius:10px; " type="button"
                                        class="form_btn my-3 inputPadding btn btn-dark border-0 w-100 text-bold"
                                        href="/auth/google/redirect">
                                        <p class="text-white"><i class="bi bi-google me-1"></i> {{ __('messages.Sign_in_with_Google') }} </p>
                                    </a>

                                    <!-- facebook	 -->
                                    {{-- <a style="background: #FFB317; font-size:14px; border-radius:10px; " type="button"
                                        class="form_btn mt-3  inputPadding btn btn-dark border-0 w-100 text-bold"
                                        href="/auth/facebook/redirect">
                                        <p class="text-white"><i class="bi bi-facebook me-1"></i> Sign in with Facebook</p>
                                    </a> --}}
                                    <div class="my-3 already_billto">
                                        <p class="allreadyOnBillto">{{ __('messages.Already_on_Billto') }}  <a class="BetweeenChatac"
                                                href="{{ route('login') }}"> {{ __('messages.Sign_in_here') }} </a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Sign in form End -->
    {{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:tex ` t-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@endsection
@push('frontend_js')

@endpush


