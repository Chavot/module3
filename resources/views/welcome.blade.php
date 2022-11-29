@extends('partials.layout')
@section('title', 'Game World')
@section('content')
            <div style="height: 90vh" class="text-center text-white pt-60 bg-blue">

                <h1 class="text-5xl font-bold mt-0 mb-6">Welcome to your gaming paradise</h1>
                <h4 class="text-3xl font-bold mb-8">Endless titles selected by experts. Just for you.</h4>

                <a style="background: #FF3C38; border-color: #FF3C38 "class="border-2 inline-block px-6 py-2.5 m-6 text-white hover:text-brown font-medium leading-tight
                uppercase rounded shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out" href="products">See Products</a>
                <a style="border-color: #242F40"class="border-2 inline-block px-8 py-2.5 m-6 text-darkblue hover:text-black font-medium leading-tight
                uppercase rounded shadow-md hover:shadow-lg focus:shadow-lg  focus:ring-0 active:shadow-lg transition duration-150 ease-in-out" href="products">about us</a>
            </div>

@endsection
