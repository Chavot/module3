@extends('partials.layout')
@section('title', 'Game World')
@section('content')
    @push('scripts')
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    @endpush
    <style>
        .back-HB {
            background-color: #242F40;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 200 200'%3E%3Cg %3E%3Cpolygon fill='%23650108' points='100 57.1 64 93.1 71.5 100.6 100 72.1'/%3E%3Cpolygon fill='%23701013' points='100 57.1 100 72.1 128.6 100.6 136.1 93.1'/%3E%3Cpolygon fill='%23650108' points='100 163.2 100 178.2 170.7 107.5 170.8 92.4'/%3E%3Cpolygon fill='%23701013' points='100 163.2 29.2 92.5 29.2 107.5 100 178.2'/%3E%3Cpath fill='%237C1D1B' d='M100 21.8L29.2 92.5l70.7 70.7l70.7-70.7L100 21.8z M100 127.9L64.6 92.5L100 57.1l35.4 35.4L100 127.9z'/%3E%3Cpolygon fill='%236d2e0f' points='0 157.1 0 172.1 28.6 200.6 36.1 193.1'/%3E%3Cpolygon fill='%237d3c1c' points='70.7 200 70.8 192.4 63.2 200'/%3E%3Cpolygon fill='%238E4A29' points='27.8 200 63.2 200 70.7 192.5 0 121.8 0 157.2 35.3 192.5'/%3E%3Cpolygon fill='%237d3c1c' points='200 157.1 164 193.1 171.5 200.6 200 172.1'/%3E%3Cpolygon fill='%236d2e0f' points='136.7 200 129.2 192.5 129.2 200'/%3E%3Cpolygon fill='%238E4A29' points='172.1 200 164.6 192.5 200 157.1 200 157.2 200 121.8 200 121.8 129.2 192.5 136.7 200'/%3E%3Cpolygon fill='%236d2e0f' points='129.2 0 129.2 7.5 200 78.2 200 63.2 136.7 0'/%3E%3Cpolygon fill='%238E4A29' points='200 27.8 200 27.9 172.1 0 136.7 0 200 63.2 200 63.2'/%3E%3Cpolygon fill='%237d3c1c' points='63.2 0 0 63.2 0 78.2 70.7 7.5 70.7 0'/%3E%3Cpolygon fill='%238E4A29' points='0 63.2 63.2 0 27.8 0 0 27.8'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
        }
    </style>
    <div class="bg-darkblue">
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




        <h2 class="text-3xl text-center font-bold leading-snug tracking-tight text-orange lg:leading-tight lg:text-4xl mb-20 mt-40">Recent titles</h2>

        <div class="ml-20 mb-40 grid grid-cols-4">
            @foreach($products->take(4) as $product)
                <a href="{{route('public.show', ['product'=> $product->id])}}">
                    <div class="text-center w-96">
                        <img src="{{ $product->image }}" alt="" class="w-full">
                        <p class="text-whit font-bold bg-purple text-xl uppercase">{{ $product->name }}</p>
                    </div>
                </a>
            @endforeach
        </div>




        <div class="container flex flex-col items-center justify-center w-full p-6 mx-auto mt-4 text-center">
            <h2 class="max-w-2xl mt-3 text-3xl font-bold leading-snug tracking-tight text-orange lg:leading-tight lg:text-4xl">What our existing customers say</h2></div>
        <div class="container mx-auto mb-10 xl:px-0">
            <div class="grid gap-10 lg:grid-cols-2 xl:grid-cols-3">
                <div class="lg:col-span-2 xl:col-auto">
                    <div class="flex flex-col justify-between w-full h-full px-6 py-6 md:px-14 md:py-14 text-white">
                        <p class="text-2xl leading-normal">Capitalize on low hanging fruit to identify a ballpark value added activity</p>
                        <div class="flex items-center mt-8 space-x-3">
                            <div>
                                <div class="text-lg font-medium">-Steel</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-between w-full h-full px-6 py-6 md:px-14 md:py-14 text-white">
                    <p class="text-2xl leading-normal">the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.
                    </p>
                    <div class="flex items-center mt-8 space-x-3">
                        <div>
                            <div class="text-lg font-medium">-Terrick</div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-between w-full h-full px-6 py-6 md:px-14 md:py-14 text-white">
                    <p class="text-2xl leading-normal">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X</p>
                    <div class="flex items-center mt-8 space-x-3">
                        <div>
                            <div class="text-lg font-medium">-Georgie</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
