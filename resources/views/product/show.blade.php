@extends('layouts.navbar')

@section('content')
    @include('layouts.carousel')


    <div class="" style="" id="livescroll">

        <div class="bg-white">
            <div
                class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <!-- Product details -->
                <div class="lg:max-w-lg lg:self-end">
                    {{-- <nav aria-label="Breadcrumb">
                        <ol role="list" class="flex items-center space-x-2">
                            <li>
                                <div class="flex items-center text-sm">
                                    <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Travel</a>
                                    <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                        class="ml-2 h-5 w-5 flex-shrink-0 text-gray-300">
                                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"></path>
                                    </svg>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center text-sm">
                                    <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Bags</a>
                                </div>
                            </li>

                        </ol>
                    </nav> --}}

                    <div class="">
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $product->nama_produk }}
                        </h1>
                    </div>

                    <section aria-labelledby="information-heading" class="mt-4">
                        <h2 id="information-heading" class="sr-only">Product information</h2>

                        <div class="flex items-center">
                            {{-- <p class="text-lg text-gray-900 sm:text-xl">$220</p> --}}
                            <p class="text-lg text-gray-700 sm:text-xl">{{ $product->category->name }}</p>
                            <div class="ml-4 border-l border-gray-300 pl-4">
                                <h2 class="sr-only">Reviews</h2>
                                {{-- <div class="flex items-center">
                                    <div>
                                        <div class="flex items-center">
                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" x-state:on="Active"
                                                x-state:off="Default"
                                                x-state-description="Active: &quot;text-yellow-400&quot;, Default: &quot;text-gray-300&quot;"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg class="text-gray-300 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                        </div>
                                        <p class="sr-only">4 out of 5 stars</p>
                                    </div>
                                    <p class="ml-2 text-sm text-gray-500">1624 reviews</p>
                                </div> --}}
                            </div>
                        </div>
                        <p class="text-mg text-gray-900 sm:text-xl mt-5">Deskripsi Produk</p>
                        <div class="mt-1 space-y-6">
                            <p class="text-base text-gray-500">{{ $product->deskripsi }}</p>
                        </div>
                        <p class="text-mg text-gray-900 sm:text-xl mt-5">Spesifikasi Produk</p>
                        <div class="mt-1 space-y-6">
                            <p class="text-base text-gray-500">{{ $product->spesipikasi }}</p>
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

                        {{-- <form>
                            <div class="sm:flex sm:justify-between">
                                <!-- Size selector -->
                                <fieldset x-data="window.Components.radioGroup({ initialCheckedIndex: 0 })" x-init="init()">
                                    <legend class="block text-sm font-medium text-gray-700">Size</legend>
                                    <div class="mt-1 grid grid-cols-1 gap-4 sm:grid-cols-2">
                                        <div x-radio-group-option=""
                                            class="relative block cursor-pointer rounded-lg border border-gray-300 p-4 focus:outline-none undefined"
                                            x-description="Active: &quot;ring-2 ring-indigo-500&quot;"
                                            :class="{ 'ring-2 ring-indigo-500': (active === '18L'), 'undefined': !(active ===
                                                    '18L') }">
                                            <input type="radio" x-model="value" name="size-choice" value="18L"
                                                class="sr-only" aria-labelledby="size-choice-0-label"
                                                aria-describedby="size-choice-0-description">
                                            <p id="size-choice-0-label" class="text-base font-medium text-gray-900">18L
                                            </p>
                                            <p id="size-choice-0-description" class="mt-1 text-sm text-gray-500">Perfect
                                                for a reasonable amount of snacks.</p>
                                            <div class="pointer-events-none absolute -inset-px rounded-lg border-2 border-indigo-500"
                                                aria-hidden="true"
                                                x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-indigo-500&quot;, Not Checked: &quot;border-transparent&quot;"
                                                :class="{ 'border': (active === '18L'), 'border-2': !(active ===
                                                    '18L'), 'border-indigo-500': (value ===
                                                    '18L'), 'border-transparent': !(value === '18L') }">
                                            </div>
                                        </div>
                                        <div x-radio-group-option=""
                                            class="relative block cursor-pointer rounded-lg border border-gray-300 p-4 focus:outline-none undefined"
                                            x-description="Active: &quot;ring-2 ring-indigo-500&quot;"
                                            :class="{ 'ring-2 ring-indigo-500': (active === '20L'), 'undefined': !(active ===
                                                    '20L') }">
                                            <input type="radio" x-model="value" name="size-choice" value="20L"
                                                class="sr-only" aria-labelledby="size-choice-1-label"
                                                aria-describedby="size-choice-1-description">
                                            <p id="size-choice-1-label" class="text-base font-medium text-gray-900">20L
                                            </p>
                                            <p id="size-choice-1-description" class="mt-1 text-sm text-gray-500">Enough
                                                room for a serious amount of snacks.</p>
                                            <div class="pointer-events-none absolute -inset-px rounded-lg border-2 border-transparent"
                                                aria-hidden="true"
                                                x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-indigo-500&quot;, Not Checked: &quot;border-transparent&quot;"
                                                :class="{ 'border': (active === '20L'), 'border-2': !(active ===
                                                    '20L'), 'border-indigo-500': (value ===
                                                    '20L'), 'border-transparent': !(value === '20L') }">
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="group inline-flex text-sm text-gray-500 hover:text-gray-700">
                                    <span>What size should I buy?</span>
                                    <svg class="ml-2 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="mt-10">
                                <button type="submit"
                                    class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Add
                                    to bag</button>
                            </div>
                            <div class="mt-6 text-center">
                                <a href="#" class="group inline-flex text-base font-medium">
                                    <svg class="mr-2 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z">
                                        </path>
                                    </svg>
                                    <span class="text-gray-500 hover:text-gray-700">Lifetime Guarantee</span>
                                </a>
                            </div>
                        </form> --}}
                    </section>
                </div>
            </div>


            {{-- <div
                class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-[1fr,3fr] lg:gap-x-8 lg:px-8">
                <!-- Product details -->
                <div class="lg:self-end">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900 mb-5">Pelanggan Juga Membeli</h2>
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <input type="text" name="account-number" id="account-number"
                            class="block w-full rounded-md border-0 py-1.5 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="  Search category">
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>

                        </div>
                    </div>


                    <div class="mt-5">
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kategori
                        </h1>
                    </div>

                    <section aria-labelledby="information-heading" class="mt-4">
                        <table class="min-w-full divide-y divide-gray-300">

                            <tbody class="bg-white divide-y divide-gray-200">

                                @foreach ($category as $categori)
                                    <tr class="">
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-3">
                                            <a href="#">
                                                <p class="text-base text-gray-500">{{ $categori->name }}</p>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>

                <!-- Product image -->
                <div class="mt-10 lg:row-span-2 lg:mt-0 lg:self-center">
                    <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg">
                        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                            @foreach ($isproducts as $isproduct)
                                <div class="group relative">

                                    <div
                                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                            alt="Front of men's Basic Tee in black."
                                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                    </div>
                                    <div class="mt-4 flex justify-between">
                                        <h3 class="text-lg text-gray-700 font-bold">
                                            <a href="/product/{{ $isproduct->slug }}">
                                                {{ $isproduct->nama_produk }}
                                            </a>
                                        </h3>
                                        <div class="">
                                            <p class="mt-1 text-sm text-gray-500 ">{{ $isproduct->category->name }}</p>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <a href="/product/{{ $isproduct->slug }}"
                                            class="relative flex items-center justify-center rounded-md border border-transparent bg-indigo-100 px-8 py-2 text-sm font-medium text-indigo-900 hover:bg-indigo-600">
                                            Read more<span class="sr-only"></span></a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div> --}}
            
            <x-show-product :isproducts="$isproducts" :category="$categories" />

            {{-- categories  yang di terima dari controller --}}


        </div>

    </div>
@endsection