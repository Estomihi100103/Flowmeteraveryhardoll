<div
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

                    @foreach ($categories as $categori)
                        <tr class="">
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-3">
                                <a href="/category/{{ $categori->slug }}">
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
</div>
