@extends('layouts.navbar')

@section('content')
    @include('layouts.carousel')


    <div class="" style="" id="livescroll">

        <div class="bg-white">
            <div
                class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <!-- Product details -->
                <div class="lg:max-w-lg lg:self-end">


                    <div class="">
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $product->nama_produk }}
                        </h1>
                    </div>

                    <section aria-labelledby="information-heading" class="mt-4">
                        <h2 id="information-heading" class="sr-only">Product information</h2>

                        <div class="flex items-center">
                            {{-- <p class="text-lg text-gray-900 sm:text-xl">$220</p> --}}
                            @foreach ($product->categories as $category)
                                <p class="text-lg text-gray-700 sm:text-xl">{{ $category->name }}</p>
                            @endforeach
                            <div class="ml-4 border-l border-gray-300 pl-4">
                                <h2 class="sr-only">Reviews</h2>

                            </div>
                        </div>
                        <p class="text-mg text-gray-900 sm:text-xl mt-5">Deskripsi Produk</p>
                        <div class="mt-1 space-y-6">
                            <p class="text-base text-gray-500"> {!! $product->deskripsi !!}</p>
                        </div>
                        <p class="text-mg text-gray-900 sm:text-xl mt-5">Spesifikasi Produk</p>
                        <div class="mt-1 space-y-6">
                            <p class="text-base text-gray-500">{!! $product->spesipikasi !!}</p>
                        </div>



                        <div class="mt-6 flex items-center">
                            <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <p class="ml-2 text-sm text-gray-500">In stock and ready to ship</p>
                        </div>
                    </section>
                </div>

                <!-- Product image -->
                <div class="mt-10 lg:col-start-2 lg:row-span-2 lg:mt-0 lg:self-center">
                    <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-featured-product-shot.jpg"
                            alt="Model wearing light green backpack with black canvas straps and front zipper pouch."
                            class="h-full w-full object-cover object-center">
                    </div>
                </div>

                <!-- Product form -->
                <div class="mt-10 lg:col-start-1 lg:row-start-2 lg:max-w-lg lg:self-start">
                    <section aria-labelledby="options-heading">
                        <h2 id="options-heading" class="sr-only">Product options</h2>
                    </section>
                </div>
            </div>



            <x-show-product :isproducts="$isproducts" :category="$categories" />
            {{-- categories  yang di terima dari controller --}}

        </div>

    </div>
@endsection
