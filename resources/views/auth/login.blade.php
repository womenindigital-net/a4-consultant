@extends('layouts.frontend.master')
@section('content')
    <section class="form_sign_in">
        <div>
            <div class="container ">
                <div class="text-center">
                    {{-- <h2 class="d-title mt-4 mb-3">Welcome to A4-Consultants</h2> --}}
                    <h2 class="mb-4 mt-3 d-title">Sign in</h2>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 my-0 mx-auto">
                        <div class="rounded" style="background: #f0f0f061;">
                            <form method="POST" action="{{ route('login') }}" autocomplete="on">
                                @csrf
                                <div class="pt-4 pb-4 ps-5 pe-5">
                                    @if ($errors->any())
                                        <div>
                                            <div class="fs-5 ps-5 pb-2 text-danger">
                                                Whoops! Something went wrong.
                                            </div>
                                        </div>
                                    @endif
                                    <!-- Email Address -->
                                    <div class="form-group ">
                                        <label for="email" class="pb-2 color-default" style="font-size: 14px ;">Email</label>
                                        <input type="email" name="email"
                                            class=" inputPadding mb-4 border-0 form-control @error('email') is-invalid @enderror"
                                            required autofocus id="email" aria-describedby="emailHelp"
                                            placeholder="">
                                        <ul class="mt-3  text-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- Password  -->
                                    <div class="login_oueter">
                                        <div class="form-row form-group">
                                            <label for="email" class="pb-2 color-default">Password</label>
                                            <div class="input-group d-flex align-items-center mb-3">
                                                <input style="border-radius: 10px;" id="password-field" type="password"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="password" value="secret">
                                                <span
                                                    style="margin-left:88%; z-index: 999; position: absolute;  color: #CCCCCC;"
                                                    toggle="#password-field"
                                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Remember Me -->
                                    <label for="remember_me" class="inline-flex items-center" style="padding-left:25px;">
                                        <input id="remember_me" type="checkbox"
                                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                            name="remember">
                                        <span class="ml-2 pb-3 text-sm text-gray-600 color-default"
                                            style="font-size:14px;">{{ __('Remember me') }}</span>
                                    </label>

                                    <button class="submit-button" type="submit"
                                        class="form_btn mt-3 inputPadding btn btn-dark border-0 w-100 text-bold ">
                                        <p class="continue">Continue</p>
                                    </button>

                                    {{-- <div class="submit-button">
                                        <a class="Button" type="submit"
                                            class="form_btn mt-3 inputPadding btn btn-dark border-0 w-100 text-bold ">
                                            <p>Continue</p>
                                        </a>
                                    </div> --}}

                                    <!--reset password-->
                                    <div class="row mt-2 mb-4">
                                        <div class="col-md-6 col-sm-12">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="reset color-default"
                                                    style="font-size:14px; padding-left:11%;">Forget Password</a>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-sm-12 d-md-flex justify-content-end">
                                            <a style="font-size: 14px; padding-right:11%;" class="color-default"
                                                href="{{ route('register') }}">Create_an_Account</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

    {{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <div class="form-group pb-4">
                <label for="email" class="pb-2 " style="font-size: 14px ;">Email</label>
                <input type="email"
                    name="email"
                    class=" inputPadding border-0 form-control "
                    required autofocus id="email" aria-describedby="emailHelp" placeholder="Enter your email">

            </div>
            <x-text-input placeholder="Enter your email" id="email"
                class="block inputPadding border-0 form-control  mt-1 w-full" aria-describedby="emailHelp" type="email"
                name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center" style="padding-left:25px !important;">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}

@endsection


    <!--====== Ajax Contact js ======-->
    <!-- <script src="js/ajax-contact.js"></script> -->
    

