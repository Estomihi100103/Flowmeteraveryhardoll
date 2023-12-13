@extends('layouts.navbar')

@section('content')
    @include('layouts.carousel')
    <div id="livescroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-6">
            <div class="text-center">
                <p class="mt-2 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                    Produk Terkait</p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Lihat produk terbaru menarik dari koleksi
                    eksklusif kami</p>
            </div>
        </div>

        <div class="container mx-auto mt-20 mb-20 px-4">
            @if ($products->isEmpty())
                <p>No products found for your search.</p>
            @else
                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @foreach ($products as $product)
                        <div class="group relative">

                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                @if ($product->img)
                                    <img src="{{ asset('storage/' . $product->img) }}" alt="Gambar Produk"
                                        class="card-img h-full w-full object-cover object-center">
                                @else
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                        alt="Front of men's Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                @endif

                            </div>
                            <div class="mt-4 flex justify-between">
                                <h3 class="text-lg text-gray-700 font-bold">
                                    <a href="/product/{{ $product->slug }}">
                                        {{ $product->nama_produk }}
                                    </a>
                                </h3>
                                <div class="">

                                    @foreach ($product->categories as $category)
                                        <p class="mt-1 text-sm text-gray-500 ">{{ $category->name }}</p>
                                    @endforeach
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="/product/{{ $product->slug }}"
                                    class="relative flex items-center justify-center rounded-md border border-transparent bg-indigo-100 px-8 py-2 text-sm font-medium text-indigo-900 hover:bg-indigo-600">
                                    Read more<span class="sr-only"></span></a>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endif
        </div>
    </div>

@endsection
