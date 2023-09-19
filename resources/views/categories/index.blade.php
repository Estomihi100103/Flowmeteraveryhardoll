@extends('layouts.navbar')

@section('content')
    @include('layouts.carousel')

    <div class="" style="" id="livescroll">
        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Category Pilihan</h2>

                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @foreach ($categories as $category)
                        <a href="/category/{{ $category->slug }}"
                            class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                            <span aria-hidden="true" class="absolute inset-0">
                                @if ($category->image)
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="Gambar Kategori"
                                        class="card-img h-full w-full object-cover object-center">
                                @else
                                    <img src="https://source.unsplash.com/400x800?{{ $category->name }},'meter'"
                                        class="card-img" alt="" class="h-full w-full object-cover object-center">
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
@endsection
