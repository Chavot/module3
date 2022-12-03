@extends('partials.layout')

@section('content')

    <div class="container mx-auto pt-20 h-screen">
        <div class="mb-10">
            <h1 class="font-bold inline-block">Products</h1>
            <a href="/products/create" class="inline-block rounded px-6 py-2.5 bg-green hover:bg-darkblue text-white float-right">New product</a>
        </div>
        @if (session('status'))
            <div class="bg-green p-3 w-24">
              {{ session('status') }}
            </div>
        @endif
        {{$products->links()}}
        <table class="min-w-full text-center mt-5 mb-5">
            <thead class="border-b bg-black">
            <tr>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Id
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Name
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Product code
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Price
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Company
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Platform
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Manage
                </th>
            </tr>
            </thead>

            <tbody>
            @foreach($products as $product)
                <tr class="bg-purple text-white border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-pink font-medium">{{$product->id}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{$product->name}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{$product->product_code}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{$product->price}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{$product->company}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">{{$product->platform}}</td>
                    <td class="table-dark">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <a href="{{route('products.show', ['product' => $product->id])}}">
                            <button type="button" class="rounded-l inline-block px-6 py-2.5 bg-blue font-medium uppercase hover:bg-darkblue transition duration-300 ease-in-out">
                            Show</button></a>

                            <a href="{{route('products.edit', ['product' => $product->id])}}">
                            <button type="button" class="rounded-l inline-block px-6 py-2.5 bg-brown font-medium uppercase hover:bg-darkblue transition duration-300 ease-in-out">
                                edit</button></a>

                            <button type="submit" class="rounded-l inline-block px-6 py-2.5 bg-orange font-medium uppercase hover:bg-darkblue transition duration-300 ease-in-out"
                                    form="delete-form-{{$product->id}}">delete</button>
                        </div>

                        <form id="delete-form-{{$product->id}}" action="{{route('products.destroy', ['product' => $product->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
