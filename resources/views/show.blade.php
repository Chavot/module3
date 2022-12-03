@extends('partials.layout')
@section('title', 'Game World')
@section('content')

        <div class="bg-darkblue h-screen pt-12">
            <div class="container flex justify-center mx-auto">
                <a href="{{ url()->previous() }}" class="p-2 bg-darkblue text-md text-white font-semibold hover:bg-purple hover:text-pink transition duration-400 ease-in-out">Back</a>
                <div style="width:540px" class="inline-block text-white bg-purple text-center p-5">
                        <h2 class="text-5xl font-bold mb-4 mt-10">{{$product->name}}</h2>
                        <a href="" class="text-pink text-xl">#{{$product->platform}}</a>
                        <a href="" class="text-pink text-xl uppercase">#{{$product->company}}</a>
                        <p class="mt-3 mb-32"> {{$product->description}}</p>

                    <span class="inline-flex">
                    <span class="rounded-l bg-white text-purple text-2xl font-bold px-3 py-2">{{$product->price}}€</span>
                    <button class="font-bold py-2 px-4 ml-4 border-b-4 rounded hover:text-pink
                    hover:fill-pink fill-white transition duration-200 ease-in-out">
                                    <span class="inline-flex"><p class="pr-2 text-md">Add to cart</p>
                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                           <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                       </svg></span></button>
                    </span>
                </div>
                <div class="inline-block"><img style="width:540px" src="{{$product->image}}" alt="Product"></div>
            </div>
        </div>
{{--            <h2 class="text-5xl text-center mb-4 mt-40">Explore more</h2>
            <div class="flex py-16 px-10 bg-blue-500 text-blue-200 text-center">
                @foreach($previews->take(3) as $preview)
                    <a href="{{route('public.show', ['product'=> $preview->id])}}">
                <div class="mr-3 mb-4 text-center">
                    <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1008&q=80"
                         alt="" class="w-full rounded border-solid border-2 border-blue-200">
                </div>
                </a>
                    <p>Places!!</p>
                </div>
            @endforeach
            </div>--}}

@endsection

