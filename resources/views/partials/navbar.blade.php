<nav class="bg-darkblue border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900 sticky top-0 z-50">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center">
            <img src="{{ asset('img/hella.png') }}" class="sm:h-12" alt="logo"/>
        </a>

        <div class="flex items-center justify-center ml-72">
                <div class="inline-flex w-full">
                    <input type="search" class="form-control relative flex-auto min-w-0 inline-block w-full px-3 py-1.5
                    text-base font-normal text-purple bg-white bg-clip-padding transition ease-in-out m-0"
                           placeholder="Search..." aria-label="Search" aria-describedby="button-addon2">
                    <button class="btn inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight
                    uppercase shadow-md hover:bg-blue-700 hover:shadow-lg  active:shadow-lg transition duration-150 ease-in-out
                    flex items-center" type="button">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                    </button>
                </div>
        </div>

        <div class="w-full md:block md:w-auto">
            <ul class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
                <li>
                    <a href="/" class="block py-2 pl-3 pr-4 text-white hover:text-brown md:p-0
                    {{ (request()->is('/')) ? 'text-yellow' : ''}}" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/titles" class="block py-2 pl-3 pr-4 text-white hover:text-brown md:p-0
                    {{ (request()->is('titles')) ? 'text-yellow' : ''}}" aria-current="page">Tittles</a>
                </li>
                <li>
                    <a href="{{route('products.index')}}" class="block py-2 pl-3 pr-4 text-white hover:text-brown md:p-0
                     {{ (request()->is('products*')) ? 'text-yellow' : ''}}" aria-current="page">👁 Admin</a>
                </li>
                <li class="text-white">
                    |
                </li>
                @guest
                    @if (Route::has('login'))
                        <li>
                            <a class="block py-2 pl-3 pr-4 text-white hover:text-brown md:p-0" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li>
                            <a class="block py-2 pl-3 pr-4 text-white hover:text-brown md:p-0" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <div x-data="{ open: false }">
                            <button @click="open = ! open" class="block text-white hover:text-brown md:p-0">
                                {{ Auth::user()->name }}</button>

                            <div x-show="open" @click.outside="open = false">
                                <ul x-show="open" class="min-w-max p-4 absolute bg-darkblue float-left list-none text-left text-white" >
                                    <li><a href="#" class="block py-2 pl-3 pr-4 hover:text-brown md:p-0" aria-current="page">Profile</a></li>
                                    <li><hr class="h-0 my-2 border border-solid border-t-0 border-gray-300 opacity-25" /></li>
                                    <li><a class="dropdown-item hover:text-brown" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                @endguest
                <li>
                    <a class="block py-2 pl-3 pr-4 text-white hover:text-brown md:p-0" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                        </svg></a>
                </li>
            </ul>

        </div>
    </div>
</nav>






