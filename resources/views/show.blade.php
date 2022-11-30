@extends('partials.layout')
@section('title', 'Game World')
@section('content')
    <div class="bg-darkblue">
    <div class="container mx-auto pt-20 h-screen">
    <div class="flex justify-center">
        <div class="shadow-lg bg-purple max-w-max">
                <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt=""/>
            <div class="p-6">
                <h5 class="text-white text-3xl font-medium mb-2">{{$product->name}}</h5>
                <span class="rounded-xl float-right bg-white text-purple text-2xl font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
                <p class="text-white text-base mb-4">
                    {{$product->description}}
                </p>

                <ul class="list-none">
                    <li><a href="" class="text-pink text-xl">#{{$product->platform}}</a></li>
                    <li><a href="" class="text-pink text-xl">#{{$product->company}}</a></li>
                </ul>

            </div>

        </div>
        <button class="px-5 py-3 bg-pink text-sm text-white font-semibold hover:text-pink hover:bg-purple transition duration-500 ease-in-out">Add to cart</button>
    </div>
    </div>

    </div>
@endsection
