@extends('partials.layout')
@section('title', 'Game World')
@section('content')

        <div class="bg-darkblue">


            <div class="container flex justify-center mx-auto">
                <div class="text-white h-screen">
                    <div class="flex justify-center">
                        <div class="block bg-purple p-12">
                            <img style="width:440px " src="{{$product->image}}" alt=""/>

                                <span class="float-right text-white text-xl font-bold px-3 py-2 leading-none flex items-center">#{{$product->product_code}}</span>
                                <h5 class="text-white text-3xl font-medium mb-2">{{$product->name}}</h5>
                                <span class="rounded-xl float-right bg-white text-purple text-2xl font-bold px-3 py-2 leading-none flex items-center">{{$product->price}}€</span>
                                <p class="text-white text-base mb-4">
                                    {{$product->description}}
                                </p>
                                <ul class="list-none">
                                    <li><a href="" class="text-pink text-xl">#{{$product->platform}}</a></li>
                                    <li><a href="" class="text-pink text-xl">#{{$product->company}}</a></li>
                                </ul>

                                <button class="font-bold py-2 px-4 ml-40 border-b-4 rounded hover:text-pink hover:bg-purple hover:fill-pink fill-white transition duration-200 ease-in-out">
                                    <span class="inline-flex"><p class="pr-2 text-md">Add to cart</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                        </svg></span></button>
                    </div>
                </div>
                    <a href="{{ url()->previous() }}" class="p-2 bg-orange text-md text-white font-semibold hover:bg-darkblue hover:text-pink transition duration-200 ease-in-out">Back to titles</a>

                </div>
        </div>

@endsection
