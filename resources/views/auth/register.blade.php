@extends('partials.layout')
@section('content')
    <section class="h-screen">
        <div class="px-6 h-full text-gray-800">
            <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
                <div class="grow-0 shrink-2 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                    <img src="{{ asset('img/slavery.jpg') }}" alt="welcum">
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="mb-6">
                            <label for="name" class="form-label inline-block mb-2 text-gray-700">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control block w-full px-4 py-2 text-xl font-normal
                            text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                            ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="text-red-500 text-xs italic" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="email" class="form-label inline-block mb-2 text-gray-700">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control block w-full px-4 py-2 text-xl font-normal
                            text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                            ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                             @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="text-red-500 text-xs italic" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="mb-6">
                            <label for="password-confirm" class="form-label inline-block mb-2 text-gray-700">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control block w-full px-4 py-2 text-xl font-normal
                            text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                            ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                             @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

                        </div>




                        <div class="text-center lg:text-left">
                            <button
                                type="submit"
                                class="inline-block px-7 py-3 bg-blue text-whit font-medium text-sm leading-snug
                                uppercase rounded hover:bg-darkblue transition duration-200 ease-in-out">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
