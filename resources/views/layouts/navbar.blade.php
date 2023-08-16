<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/components.css">
    <script src="/js/components.js"></script>
    <script type="module" src="/js/iframe-alpine-964dceff.js"></script>
    @vite('resources/css/app.css')
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
                            <div class="flow-root">
                                <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create an
                                    account</a>
                            </div>
                            <div class="flow-root">
                                <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
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
                                        <span class="sr-only">Your Company</span>
                                        <img class="h-8 w-auto"
                                            src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="">
                                    </a>
                                    <a class="text-white px-4 uppercase font-bold"
                                        href="/">Flowmeteraveryhardoll</a>

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

                                    <!-- Search -->
                                    <a href="#" class="ml-2 p-2 text-white">
                                        <span class="sr-only">Search</span>
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>

                                <!-- Logo (lg-) -->
                                <a href="#" class="lg:hidden">
                                    <span class="sr-only">Your Company</span>
                                    <img src="https://tailwindui.com/img/logos/mark.svg?color=white" alt=""
                                        class="h-8 w-auto">
                                </a>

                                <div class="flex flex-1 items-center justify-end">
                                    <a href="#"
                                        class="hidden text-sm font-medium text-white lg:block">Search</a>

                                    <div class="flex items-center lg:ml-8">
                                        <!-- Help -->
                                        <a href="#" class="p-2 text-white lg:hidden">
                                            <span class="sr-only">Help</span>
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="hidden text-sm font-medium text-white lg:block">Help</a>

                                        <!-- Cart -->
                                        <div class="ml-4 flow-root lg:ml-8">
                                            <a href="#" class="group -m-2 flex items-center p-2">
                                                <svg class="h-6 w-6 flex-shrink-0 text-white" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                                                    </path>
                                                </svg>
                                                <span class="ml-2 text-sm font-medium text-white">0</span>
                                                <span class="sr-only">items in cart, view bag</span>
                                            </a>
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
