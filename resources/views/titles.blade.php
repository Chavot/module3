@extends('partials.layout')
@section('title', 'Game World')
@section('content')
    <div class="bg-darkblue">
        <div class="container mx-auto pt-20">

            {{$products->links()}}

            <div class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5 pb-20">
                @foreach($products as $product)
                    <div class="w-72 bg-purple shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                        <a href="{{route('public.show', ['product'=> $product->id])}}">
                            <img src="{{$product->image}}"
                                 alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                            <div class="px-4 py-3 w-72">
                                <a href=""><span class="text-white mr-3 text-md">#{{$product->platform}}</span></a>
                                <a href=""><span class="text-white mr-3 text-md">#{{$product->company}}</span></a>
                                <p class="text-lg font-bold text-white truncate block uppercase">{{$product->name}}</p>
                                <div class="flex items-center">
                                    <p class="text-lg font-semibold text-pink cursor-auto my-3">{{$product->price}}€</p>
                                    <div class="ml-auto">
                                    <span class="inline-flex text-white hover:text-pink hover:bg-purple hover:fill-pink fill-white transition duration-200 ease-in-out"><p class="pr-2 text-md">Add</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                        </svg></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{$products->links()}}
        </div>
    </div>
@endsection
