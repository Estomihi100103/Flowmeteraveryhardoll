<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/components.css">
    <script src="/js/components.js"></script>
    <script type="module" src="/js/iframe-alpine-964dceff.js"></script>


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
                                <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                            </div>
                            <div class="flow-root">
                                <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
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



                <div aria-hidden="true" class="absolute inset-0 overflow-hidden" x-data="{ slideIndex: 0, slides: ['https://source.unsplash.com/1200x400?crude oil', 'https://source.unsplash.com/1200x400?nature', 'https://source.unsplash.com/1200x400?city'], timer: null }" x-init="startTimer()">
                    <template x-for="(slide, index) in slides" :key="index">
                        <img :src="slide" x-show.transition.opacity="slideIndex === index" alt=""
                            class="h-full w-full object-cover object-center">
                    </template>
        
                    <!-- Navigation controls -->
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                        <button @click="slideIndex = slideIndex === 0 ? slides.length - 1 : slideIndex - 1"
                            class="relative z-10 rounded-full p-1 bg-white shadow-lg">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                        <button @click="slideIndex = slideIndex === slides.length - 1 ? 0 : slideIndex + 1"
                            class="relative z-10 rounded-full p-1 bg-white shadow-lg">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
        
                <!-- Alpine.js code for carousel -->
                <script>
                    function startTimer() {
                        setInterval(() => {
                            Alpine.store('slideIndex', (Alpine.store('slideIndex') + 1) % Alpine.store('slides').length);
                        }, 3000); // Change slide every 3 seconds
                    }
                </script>
        






                <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-50"></div>

                <!-- Navigation -->
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

                        <!-- Secondary navigation -->
                        <div class="bg-white bg-opacity-10 backdrop-blur-md backdrop-filter">
                            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                <div>
                                    <div class="flex h-16 items-center justify-between">
                                        <!-- Logo (lg+) -->
                                        <div class="hidden lg:flex lg:flex-1 lg:items-center">
                                            <a href="#">
                                                <span class="sr-only">Your Company</span>
                                                <img class="h-8 w-auto"
                                                    src="https://tailwindui.com/img/logos/mark.svg?color=white"
                                                    alt="">
                                            </a>
                                            <p class="text-white px-4 uppercase font-bold">Flowmeteraveryhardoll</p>
                                        </div>

                                        <div class="hidden h-full lg:flex">
                                            <!-- Flyout menus -->
                                            <div class="inset-x-0 bottom-0 px-4" x-data="Components.popoverGroup()"
                                                x-init="init()">
                                                <div class="flex h-full justify-center space-x-8">


                                                    <a href="#"
                                                        class="flex items-center text-base font-medium text-white">Company</a>
                                                    <a href="#"
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
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                                                </svg>
                                            </button>

                                            <!-- Search -->
                                            <a href="#" class="ml-2 p-2 text-white">
                                                <span class="sr-only">Search</span>
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>

                                        <!-- Logo (lg-) -->
                                        <a href="#" class="lg:hidden">
                                            <span class="sr-only">Your Company</span>
                                            <img src="https://tailwindui.com/img/logos/mark.svg?color=white"
                                                alt="" class="h-8 w-auto">
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
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" aria-hidden="true">
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
                    </nav>
                </header>

                <div
                    class="relative mx-auto flex max-w-3xl flex-col items-center px-6 py-32 text-center sm:py-44 lg:px-0">
                    <h1 class="text-4xl font-bold tracking-tight text-white lg:text-6xl">Flowmeteraveryhardoll</h1>
                    <p class="mt-4 text-xl text-white">Pusat Penjualan Alat Flow Meter,Alat Alat Industri dan Peralatan Keamanan serta Peralatan Profesional
                    </p>
                    <a href="#"
                        class="mt-8 inline-block rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100">Shop
                        New Arrivals</a>
                </div>
            </div>








            <main>
                <!-- Category section -->
                <section aria-labelledby="category-heading" class="pt-24 sm:pt-32 xl:mx-auto xl:max-w-7xl xl:px-8">
                    <div class="px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 xl:px-0">
                        <h2 id="category-heading" class="text-2xl font-bold tracking-tight text-gray-900">Shop by
                            Category</h2>
                        <a href="#"
                            class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
                            Browse all categories
                            <span aria-hidden="true"> →</span>
                        </a>
                    </div>

                    <div class="mt-4 flow-root">
                        <div class="-my-2">
                            <div class="relative box-content h-80 overflow-x-auto py-2 xl:overflow-visible">
                                <div
                                    class="absolute flex space-x-8 px-4 sm:px-6 lg:px-8 xl:relative xl:grid xl:grid-cols-5 xl:gap-x-8 xl:space-x-0 xl:px-0">
                                    <a href="#"
                                        class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                                        <span aria-hidden="true" class="absolute inset-0">
                                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-01.jpg"
                                                alt="" class="h-full w-full object-cover object-center">
                                        </span>
                                        <span aria-hidden="true"
                                            class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                        <span class="relative mt-auto text-center text-xl font-bold text-white">New
                                            Arrivals</span>
                                    </a>
                                    <a href="#"
                                        class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                                        <span aria-hidden="true" class="absolute inset-0">
                                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-02.jpg"
                                                alt="" class="h-full w-full object-cover object-center">
                                        </span>
                                        <span aria-hidden="true"
                                            class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                        <span
                                            class="relative mt-auto text-center text-xl font-bold text-white">Productivity</span>
                                    </a>
                                    <a href="#"
                                        class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                                        <span aria-hidden="true" class="absolute inset-0">
                                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-04.jpg"
                                                alt="" class="h-full w-full object-cover object-center">
                                        </span>
                                        <span aria-hidden="true"
                                            class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                        <span
                                            class="relative mt-auto text-center text-xl font-bold text-white">Workspace</span>
                                    </a>
                                    <a href="#"
                                        class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                                        <span aria-hidden="true" class="absolute inset-0">
                                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-05.jpg"
                                                alt="" class="h-full w-full object-cover object-center">
                                        </span>
                                        <span aria-hidden="true"
                                            class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                        <span
                                            class="relative mt-auto text-center text-xl font-bold text-white">Accessories</span>
                                    </a>
                                    <a href="#"
                                        class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                                        <span aria-hidden="true" class="absolute inset-0">
                                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-category-03.jpg"
                                                alt="" class="h-full w-full object-cover object-center">
                                        </span>
                                        <span aria-hidden="true"
                                            class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                        <span
                                            class="relative mt-auto text-center text-xl font-bold text-white">Sale</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 px-4 sm:hidden">
                        <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                            Browse all categories
                            <span aria-hidden="true"> →</span>
                        </a>
                    </div>
                </section>

                <!-- Featured section -->
                <section aria-labelledby="social-impact-heading"
                    class="mx-auto max-w-7xl px-4 pt-24 sm:px-6 sm:pt-32 lg:px-8">
                    <div class="relative overflow-hidden rounded-lg">
                        <div class="absolute inset-0">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-feature-section-01.jpg"
                                alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="relative bg-gray-900 bg-opacity-75 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
                            <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                                <h2 id="social-impact-heading"
                                    class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                                    <span class="block sm:inline">Level up</span>
                                    <span class="block sm:inline">your desk</span>
                                </h2>
                                <p class="mt-3 text-xl text-white">Make your desk beautiful and organized. Post a
                                    picture to social media and watch it get more likes than life-changing
                                    announcements. Reflect on the shallow nature of existence. At least you have a
                                    really nice desk setup.</p>
                                <a href="#"
                                    class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Shop
                                    Workspace</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Collection section -->
                <section aria-labelledby="collection-heading"
                    class="mx-auto max-w-xl px-4 pt-24 sm:px-6 sm:pt-32 lg:max-w-7xl lg:px-8">
                    <h2 id="collection-heading" class="text-2xl font-bold tracking-tight text-gray-900">Shop by
                        Collection</h2>
                    <p class="mt-4 text-base text-gray-500">Each season, we collaborate with world-class designers to
                        create a collection inspired by the natural world.</p>

                    <div class="mt-10 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
                        <a href="#" class="group block">
                            <div aria-hidden="true"
                                class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg lg:aspect-h-6 lg:aspect-w-5 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-01.jpg"
                                    alt="Brown leather key ring with brass metal loops and rivets on wood table."
                                    class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-4 text-base font-semibold text-gray-900">Handcrafted Collection</h3>
                            <p class="mt-2 text-sm text-gray-500">Keep your phone, keys, and wallet together, so you
                                can lose everything at once.</p>
                        </a>
                        <a href="#" class="group block">
                            <div aria-hidden="true"
                                class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg lg:aspect-h-6 lg:aspect-w-5 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-02.jpg"
                                    alt="Natural leather mouse pad on white desk next to porcelain mug and keyboard."
                                    class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-4 text-base font-semibold text-gray-900">Organized Desk Collection</h3>
                            <p class="mt-2 text-sm text-gray-500">The rest of the house will still be a mess, but your
                                desk will look great.</p>
                        </a>
                        <a href="#" class="group block">
                            <div aria-hidden="true"
                                class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg lg:aspect-h-6 lg:aspect-w-5 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-03.jpg"
                                    alt="Person placing task list card into walnut card holder next to felt carrying case on leather desk pad."
                                    class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-4 text-base font-semibold text-gray-900">Focus Collection</h3>
                            <p class="mt-2 text-sm text-gray-500">Be more productive than enterprise project managers
                                with a single piece of paper.</p>
                        </a>

                    </div>
                </section>

                <!-- Featured section -->
                <section aria-labelledby="comfort-heading"
                    class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
                    <div class="relative overflow-hidden rounded-lg">
                        <div class="absolute inset-0">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-feature-section-02.jpg"
                                alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="relative bg-gray-900 bg-opacity-75 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
                            <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                                <h2 id="comfort-heading"
                                    class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Simple
                                    productivity</h2>
                                <p class="mt-3 text-xl text-white">Endless tasks, limited hours, a single piece of
                                    paper. Not really a haiku, but we're doing our best here. No kanban boards, burndown
                                    charts, or tangled flowcharts with our Focus system. Just the undeniable urge to
                                    fill empty circles.</p>
                                <a href="#"
                                    class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Shop
                                    Focus</a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer aria-labelledby="footer-heading" class="bg-gray-900">
                <h2 id="footer-heading" class="sr-only">Footer</h2>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
                        <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                            <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                                <div>
                                    <h3 class="text-sm font-medium text-white">Shop</h3>
                                    <ul role="list" class="mt-6 space-y-6">
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Bags</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Tees</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Objects</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Home Goods</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Accessories</a>
                                        </li>

                                    </ul>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-white">Company</h3>
                                    <ul role="list" class="mt-6 space-y-6">
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Who we are</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#"
                                                class="text-gray-300 hover:text-white">Sustainability</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Press</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Careers</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Terms &amp;
                                                Conditions</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Privacy</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                                <div>
                                    <h3 class="text-sm font-medium text-white">Account</h3>
                                    <ul role="list" class="mt-6 space-y-6">
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Manage
                                                Account</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Returns &amp;
                                                Exchanges</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Redeem a Gift
                                                Card</a>
                                        </li>

                                    </ul>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-white">Connect</h3>
                                    <ul role="list" class="mt-6 space-y-6">
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Contact Us</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Twitter</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Instagram</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-300 hover:text-white">Pinterest</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12 md:mt-16 xl:mt-0">
                            <h3 class="text-sm font-medium text-white">Sign up for our newsletter</h3>
                            <p class="mt-6 text-sm text-gray-300">The latest deals and savings, sent to your inbox
                                weekly.</p>
                            <form class="mt-2 flex sm:max-w-md">
                                <label for="email-address" class="sr-only">Email address</label>
                                <input id="email-address" type="text" autocomplete="email" required=""
                                    class="w-full min-w-0 appearance-none rounded-md border border-white bg-white px-4 py-2 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900">
                                <div class="ml-4 flex-shrink-0">
                                    <button type="submit"
                                        class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900">Sign
                                        up</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="border-t border-gray-800 py-10">
                        <p class="text-sm text-gray-400">Copyright © 2021 Your Company, Inc.</p>
                    </div>
                </div>
            </footer>
        </div>

    </div>


      
</body>

</html>
