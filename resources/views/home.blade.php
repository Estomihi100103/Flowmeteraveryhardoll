      @extends('layouts.navbar')

      @section('content')
          @include('layouts.carousel')



          <!-- Category section -->
          <section aria-labelledby="category-heading" class="pt-24 sm:pt-32 xl:mx-auto xl:max-w-7xl xl:px-8">
              <div class="px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 xl:px-0">
                  <h2 id="category-heading" class="text-2xl font-bold tracking-tight text-gray-900">Kategori Produk</h2>
                  <a href="/category" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
                      Browse all categories
                      <span aria-hidden="true"> →</span>
                  </a>
              </div>

              <div class="mt-4 flow-root">
                  <div class="-my-2">
                      <div class="relative box-content h-80 overflow-x-auto py-2 xl:overflow-visible">
                          <div
                              class="absolute flex space-x-8 px-4 sm:px-6 lg:px-8 xl:relative xl:grid xl:grid-cols-5 xl:gap-x-8 xl:space-x-0 xl:px-0">
                              {{-- categories --}}
                              @foreach ($categories as $category)
                                  <a href="/category/{{ $category->slug }}"
                                      class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                                      <span aria-hidden="true" class="absolute inset-0">
                                          @if ($category->image)
                                              <img src="{{ asset('storage/' . $category->image) }}" alt="Gambar Kategori"
                                                  class="card-img h-full w-full object-cover object-center">
                                          @else
                                              <img src="https://source.unsplash.com/400x800?{{ $category->name }},'meter'"
                                                  class="card-img" alt=""
                                                  class="h-full w-full object-cover object-center">
                                          @endif

                                      </span>
                                      <span aria-hidden="true"
                                          class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                      <span
                                          class="relative mt-auto text-center text-xl font-bold text-white">{{ $category->name }}</span>
                                  </a>
                              @endforeach
                          </div>
                      </div>
                  </div>
              </div>

              <div class="mt-6 px-4 sm:hidden">
                  <a href="" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                      Browse all categories
                      <span aria-hidden="true"> →</span>
                  </a>
              </div>
          </section>

          <!-- Featured section -->
          <section aria-labelledby="social-impact-heading" class="mx-auto max-w-7xl px-4 pt-24 sm:px-6 sm:pt-32 lg:px-8">
              <div class="relative overflow-hidden rounded-lg">
                  <div class="absolute inset-0">

                      <img src="https://images.unsplash.com/photo-1629540946404-ebe133e99f49?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8b2Zmc2hvcmUsb2lsLGRyaWxsaW5nfHx8fHx8MTY5MTQyMTY4Mg&ixlib=rb-4.0.3&q=80&w=1080"
                          alt="" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="relative bg-gray-900 bg-opacity-75 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
                      <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                          <h2 id="social-impact-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                              <span class="block sm:inline">Service &</span>
                              <span class="block sm:inline">Kalibrasi</span>
                          </h2>
                          <p class="mt-3 text-xl text-white">Kami adalah perusahaan yang fokus dalam hal terdistribusi
                              dan suplai flow meter dan meteran air yang dipakai untuk mengukur berbagai macam cairan
                              dari air sampai zat zat kimia korosif ke beberapa perusahaan ternama di indonesia</p>
                          <a href="#"
                              class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">
                              Pusat Layanan</a>
                      </div>
                  </div>
              </div>
          </section>

          <!-- Collection section -->
          <section aria-labelledby="collection-heading"
              class="mx-auto max-w-xl px-4 pt-24 sm:px-6 sm:pt-32 lg:max-w-7xl lg:px-8">
              <h2 id="collection-heading" class="text-2xl font-bold tracking-tight text-gray-900">Produk Terbaru</h2>
              <p class="mt-4 text-base text-gray-500">Every product cycle, we partner with renowned industrial experts
                  to curate an innovation line influenced by precision engineering and technological prowess, embodying
                  the essence of efficiency and accuracy in instruments like flow meters and other industrial tools</p>

              <div class="mt-10 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
                  @foreach ($products as $product)
                      <a href="#" class="group block">
                          <div aria-hidden="true"
                              class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg lg:aspect-h-6 lg:aspect-w-5 group-hover:opacity-75">
                              <img src="https://source.unsplash.com/400x400?{{ $product->nama_produk }},'Bulldozer',tractor'"
                                  alt="Brown leather key ring with brass metal loops and rivets on wood table."
                                  class="h-full w-full object-cover object-center">
                          </div>
                          <h3 class="mt-4 text-base font-semibold text-gray-900">{{ $product->nama_produk }}</h3>
                          <p class="mt-2 text-sm text-gray-500">{!! $product->deskripsi !!}</p>
                      </a>
                  @endforeach

                  {{-- <a href="#" class="group block">
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
                  </a> --}}

              </div>
          </section>

          <!-- Featured section -->
          <section aria-labelledby="comfort-heading" class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
              <div class="relative overflow-hidden rounded-lg">
                  <div class="absolute inset-0">
                      <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-feature-section-02.jpg"
                          alt="" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="relative bg-gray-900 bg-opacity-75 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
                      <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                          <h2 id="comfort-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                              Simple
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
      @endsection
