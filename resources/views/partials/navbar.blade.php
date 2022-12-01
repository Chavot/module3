<nav class="bg-darkblue border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900 sticky top-0 z-50">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center">
            <img src="https://via.placeholder.com/200/FF5400/000000?Text=Game_World" class="h-6 mr-3 sm:h-9" alt="logo"/>
        </a>
        <div class="w-full md:block md:w-auto">
            <ul class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
                <li>
                    <a href="/" class="block py-2 pl-3 pr-4 text-white hover:text-brown md:p-0
                    {{request()->route()->getName() === '/' ? 'text-yellow' : ''}}" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/titles" class="block py-2 pl-3 pr-4 text-white hover:text-brown md:p-0
                    {{request()->route()->getName() === '/titles' ? 'text-yellow' : ''}}" aria-current="page">Tittles</a>
                </li>
                <li>
                    <a href="{{route('products.index')}}" class="block py-2 pl-3 pr-4 text-white hover:text-brown md:p-0
                     {{request()->route()->getName() === 'products.index' ? 'text-yellow' : ''}}" aria-current="page">👁 Admin</a>
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






