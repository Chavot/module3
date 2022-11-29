@extends('partials.layout')
@section('content')
    <section class="h-screen">
        <div class="px-6 h-full text-gray-800">
            <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
                <div class="grow-0 shrink-2 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                    <img src="{{ asset('img/login_img.jpg') }}" alt="welcum">
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="form-label inline-block mb-2 text-gray-700">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control block w-full px-4 py-2 text-xl font-normal
                            text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                            ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="text-red-500 text-xs italic" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="mb-6">
                            <label for="password" class="form-label inline-block mb-2 text-gray-700">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control block w-full px-4 py-2 text-xl font-normal
                            text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                            ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                             @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="text-red-500 text-xs italic" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="flex justify-between items-center mb-6">
                            <div class="form-group form-check">
                                <input
                                    type="checkbox" name="remember" id="remember"
                                    class="form-check-input appearance-none h-4 w-4 border rounded-sm
                                     checked:bg-yellow mt-1 align-top bg-no-repeat bg-center bg-contain
                                     float-left mr-2 cursor-pointer"
                                    {{ old('remember') ? 'checked' : '' }}/>

                                <label class="form-check-label inline-block text-gray-800" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="text-gray-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="text-center lg:text-left">
                            <button
                                type="submit"
                                class="inline-block px-7 py-3 bg-blue text-whit font-medium text-sm leading-snug
                                uppercase rounded hover:bg-darkblue transition duration-200 ease-in-out">
                                {{ __('Login') }}
                            </button>
                            <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                                Don't have an account?
                                <a class="hover:text-brown" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
