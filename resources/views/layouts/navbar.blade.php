<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/components.css">
    <script src="/js/components.js"></script>
    <script type="module" src="/js/iframe-alpine-964dceff.js"></script>
    <title>{{ $title }}</title>
    <link rel="icon" href="/img/Logo.png" type="image/x-icon">
    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

</head>

<body>
    <div class="" style="">

        <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
            <!-- Mobile menu -->
            <div x-show="open" class="relative z-40 lg:hidden"
                x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
                aria-modal="true" style="display: none;">

                <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity ease-linear duration-300"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."
                    class="fixed inset-0 bg-black bg-opacity-25" style="display: none;"></div>


                <div class="fixed inset-0 z-40 flex">
                    <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition ease-in-out duration-300 transform"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                        x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                        class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl"
                        @click.away="open = false" style="display: none;">
                        <div class="flex px-4 pb-2 pt-5">
                            <button type="button"
                                class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400"
                                @click="open = false">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                    </path>
                                </svg>
                            </button>
                        </div>



                        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                            <div class="flow-root">
                                <a href="/" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                            </div>
                            <div class="flow-root">
                                <a href="/product" class="-m-2 block p-2 font-medium text-gray-900">Product</a>
                            </div>

                        </div>



                        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                            <!-- Currency selector -->
                        </div>
                    </div>

                </div>
            </div>

            <!-- Hero section -->
            <div class="relative bg-gray-900">
                <!-- Decorative image and overlay -->
                {{-- <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
                    <img src="https://source.unsplash.com/1200x400?crude oil"
                        alt="" class="h-full w-full object-cover object-center">
                </div> --}}
                <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-50"></div>

                <header class="relative z-10">
                    <nav aria-label="Top">
                        <!-- Top navigation -->
                        <div class="bg-gray-900">
                            <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                                <!-- Currency selector -->
                                <div class="flex items-center space-x-6">
                                    <p class="text-white font-bold text-sm">Distributor Flowmeter Indonesia dan Pusat
                                        Perlengkapan Alat Teknik</p>
                                </div>
                            </div>
                        </div>


                    </nav>
                </header>





                <!-- Secondary navigation -->
                <div class="w-full bg-white bg-opacity-10 backdrop-blur-md backdrop-filter absolute z-10">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div>
                            <div class="flex h-16 items-center justify-between">
                                <!-- Logo (lg+) -->
                                <div class="hidden lg:flex lg:flex-1 lg:items-center">
                                    <a href="/">
                                        <span class="sr-only">Nusantara Berkat Teknik</span>
                                        <img class="h-12 w-auto" src="img/Logo.png" alt="">
                                    </a>


                                </div>

                                <div class="hidden h-full lg:flex">
                                    <!-- Flyout menus -->
                                    <div class="inset-x-0 bottom-0 px-4" x-data="Components.popoverGroup()"
                                        x-init="init()">
                                        <div class="flex h-full justify-center space-x-8">
                                            <a href="/"
                                                class="flex items-center text-base font-medium text-white">Company</a>
                                            <a href="/product"
                                                class="flex items-center text-base font-medium text-white">Product</a>

                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile menu and search (lg-) -->
                                <div class="flex flex-1 items-center lg:hidden">
                                    <button type="button"
                                        x-description="Mobile menu toggle, controls the 'mobileMenuOpen' state."
                                        class="-ml-2 p-2 text-white" @click="open = true">
                                        <span class="sr-only">Open menu</span>
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Logo (lg-) -->
                                <a href="/" class="lg:hidden">
                                    <span class="sr-only">Your Company</span>
                                    <img src="img/Logo.png" alt="" class="h-8 w-auto">
                                </a>

                                <div class="flex flex-1 items-center justify-end">

                                    <div class="flex" x-data="{ open: false }">
                                        <!-- Search Icon -->
                                        <button @click="open = true"
                                            class="p-2 rounded-md bg-none hover:bg-none focus:outline-none focus:bg-none text-white">
                                            Search
                                        </button>

                                        {{-- jika sudah login --}}
                                        @auth
                                            @if (Auth::user()->role == 'admin')
                                                <a href="/admin/dashboard">
                                                    <h1 class="p-2 text-white">Login</h1>
                                                </a>
                                            @endif
                                        @endauth

                                        <!-- Modal -->
                                        <div x-show="open" @click="open = false"
                                            class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-none mt-7"
                                            x-cloak>
                                            <div @click.stop class="bg-white rounded-lg w-1/2 p-8 relative">
                                                <!-- Close Button -->
                                                <button @click="open = false"
                                                    class="absolute top-4 right-4 p-2 focus:outline-none hover:bg-gray-100 rounded">
                                                    <svg class="h-6 w-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path strokeLinecap="round" strokeLinejoin="round"
                                                            strokeWidth="2" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </button>

                                                <!-- Search Input -->
                                                <div class="flex items-center border-b-2 border-gray-200">
                                                    <form action="{{ route('products.search') }}" method="GET">
                                                        <input type="text" name="query"
                                                            placeholder="Search products..."
                                                            class="w-full py-2 focus:outline-none focus:border-indigo-400">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <main>
                    @yield('content')
                </main>


                @include('layouts.footer')
            </div>

        </div>









        <!-- Javascript code -->
        <script>
            // set the default active slide to the first one
            let slideIndex = 1;
            showSlide(slideIndex);

            // change slide with the prev/next button
            function moveSlide(moveStep) {
                showSlide(slideIndex += moveStep);
            }

            // change slide with the dots
            function currentSlide(n) {
                showSlide(slideIndex = n);
            }

            function showSlide(n) {
                let i;
                const slides = document.getElementsByClassName("slide");
                const dots = document.getElementsByClassName('dot');

                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }

                // hide all slides
                for (i = 0; i < slides.length; i++) {
                    slides[i].classList.add('hidden');
                }

                // remove active status from all dots
                for (i = 0; i < dots.length; i++) {
                    dots[i].classList.remove('bg-yellow-500');
                    dots[i].classList.add('bg-green-600');
                }

                // show the active slide
                slides[slideIndex - 1].classList.remove('hidden');

                // highlight the active dot
                dots[slideIndex - 1].classList.remove('bg-green-600');
                dots[slideIndex - 1].classList.add('bg-yellow-500');
            }
        </script>

</body>

</html>
