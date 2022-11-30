@extends('partials.layout')
@section('title', 'Game World')
@section('content')

    <style>
        .back-HB {
            background-color: #242F40;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 200 200'%3E%3Cg %3E%3Cpolygon fill='%23650108' points='100 57.1 64 93.1 71.5 100.6 100 72.1'/%3E%3Cpolygon fill='%23701013' points='100 57.1 100 72.1 128.6 100.6 136.1 93.1'/%3E%3Cpolygon fill='%23650108' points='100 163.2 100 178.2 170.7 107.5 170.8 92.4'/%3E%3Cpolygon fill='%23701013' points='100 163.2 29.2 92.5 29.2 107.5 100 178.2'/%3E%3Cpath fill='%237C1D1B' d='M100 21.8L29.2 92.5l70.7 70.7l70.7-70.7L100 21.8z M100 127.9L64.6 92.5L100 57.1l35.4 35.4L100 127.9z'/%3E%3Cpolygon fill='%236d2e0f' points='0 157.1 0 172.1 28.6 200.6 36.1 193.1'/%3E%3Cpolygon fill='%237d3c1c' points='70.7 200 70.8 192.4 63.2 200'/%3E%3Cpolygon fill='%238E4A29' points='27.8 200 63.2 200 70.7 192.5 0 121.8 0 157.2 35.3 192.5'/%3E%3Cpolygon fill='%237d3c1c' points='200 157.1 164 193.1 171.5 200.6 200 172.1'/%3E%3Cpolygon fill='%236d2e0f' points='136.7 200 129.2 192.5 129.2 200'/%3E%3Cpolygon fill='%238E4A29' points='172.1 200 164.6 192.5 200 157.1 200 157.2 200 121.8 200 121.8 129.2 192.5 136.7 200'/%3E%3Cpolygon fill='%236d2e0f' points='129.2 0 129.2 7.5 200 78.2 200 63.2 136.7 0'/%3E%3Cpolygon fill='%238E4A29' points='200 27.8 200 27.9 172.1 0 136.7 0 200 63.2 200 63.2'/%3E%3Cpolygon fill='%237d3c1c' points='63.2 0 0 63.2 0 78.2 70.7 7.5 70.7 0'/%3E%3Cpolygon fill='%238E4A29' points='0 63.2 63.2 0 27.8 0 0 27.8'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
        }
    </style>

            <div class="back-HB text-center text-white pt-48 h-screen">
                <div class="flex justify-center">
                <div class="block rounded-lg bg-black p-24">
                <h1 class="text-5xl font-bold mt-0 mb-6">Welcome to your gaming paradise</h1>
                <h4 class="text-3xl font-bold mb-8">Endless titles selected by experts. Just for you.</h4>

                <a class="border-2 border-orange bg-orange hover:bg-blue hover:border-blue inline-block px-8 py-2.5 m-5 text-white font-medium
                uppercase transition duration-300 ease-in-out"
                   href="/titles">See our selection</a>

                <a class="border-2 border-darkblue text-white hover:bg-blue hover:border-blue inline-block px-8 py-2.5 m-5 text-white font-medium
                uppercase transition duration-300 ease-in-out"
                   href="products">about us</a>
                </div>
                </div>
            </div>


    <div class="bg-darkblue">

{{--                @foreach($products->take(3) as $product)
            <div id="carouselExampleSlidesOnly" class="carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active relative float-left w-full">
                        <img src="{{$product->image}}"  class="block w-full" alt="game title"/>
                            </div>
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">{{$product->name}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach--}}
                    <div id="default-carousel" class="relative" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                            <!-- Item 1 -->

                            @foreach($products->take(3) as $display)
                            <div class="duration-700 ease-in-out bg-brown" data-carousel-item>
                                <img src="{{$display->image}}" class="block absolute " alt="game">
                            </div>
                            @endforeach
                        </div>
                        <!-- Slider indicators -->
                        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
                        </button>
                        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
                        </button>
                    </div>
    </div>
@endsection
