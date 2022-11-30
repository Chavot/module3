@extends('partials.layout')
@section('title', 'Game World')
@section('content')
    <div class="bg-darkblue">
        <div class="container mx-auto pt-20">

            {{$products->links()}}

            <div class="grid grid-cols-4 auto-rows-auto pt-6 pb-6">
            @foreach($products as $product)

                    <div class="max-w-xs bg-white shadow-lg rounded-lg my-10">
                        <div class="px-4 py-2">
                            <h1 class="text-pink font-bold text-2xl uppercase ">{{$product->name}}</h1>
                            <p class="text-xl">
                                <a href="" class="text-pink">#{{$product->platform}}</a>
                                <a href="" class="text-pink">#{{$product->company}}</a>
                            </p>
                        </div>
                        <img class="h-56 w-full object-cover" src="{{$product->image}}" alt="game">
                        <div class="flex items-center justify-between p-5 mb-auto">
                            <h2 class="text-purple font-bold text-xl">{{$product->price}}€</h2>
                            <a href="{{route('public.show', ['product'=> $product->id])}}">
                            <button class="px-3 py-3 border-2 border-purple text-sm text-purple font-semibold rounded hover:text-pink transition duration-200 ease-in-out">
                                Learn more</button></a>
                            <button class="px-5 py-3 bg-purple text-sm text-white font-semibold rounded hover:text-pink transition duration-200 ease-in-out">Add to cart</button>
                        </div>
                    </div>



            @endforeach
            </div>
            {{$products->links()}}
        </div>
    </div>
@endsection
