@extends('admin.layouts.dashboard')

@section('content')
    <div class="" style="">
        <div class="bg-white py-10">

            <div>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">Produk</h1>

                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <div x-data="{ open: false }"> <!-- Ini menggunakan Alpine.js untuk mengelola tampilan modal -->
                                <!-- Tombol untuk menampilkan modal -->
                                <button @click="open = true" type="button"
                                    class=" rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:ml-3 sm:w-auto ">
                                    Tambah Produk
                                </button>

                                <!-- Modal -->
                                <div x-show="open"
                                    class="fixed inset-0 flex items-start justify-center z-50 overflow-y-auto bg-black bg-opacity-50 mt-12 pt-12">

                                    <div
                                        class="bg-white p-5 rounded shadow-lg border max-h-[80vh] overflow-y-auto max-w-3xl">

                                        <div class="mt-3 text-center sm:mt-5">
                                            <h3 class="text-lg font-semibold leading-6 text-gray-900" id="modal-title">
                                                Produk</h3>

                                        </div>
                                        <form method="post" action="/admin/products" enctype="multipart/form-data">
                                            @csrf
                                            <label for="nama_produk"
                                                class="block text-sm font-medium leading-6 text-gray-900">Nama
                                                Produk</label>
                                            <div class="relative mt-2 rounded-md shadow-sm">
                                                <div
                                                    class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                </div>
                                                <input type="text" name="nama_produk" id="nama_produk"
                                                    class="block w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                    placeholder="Nama Produk">
                                            </div>



                                            <div class="relative mt-2 rounded-md shadow-sm">
                                                <label for="deskripsi"
                                                    class="block text-sm font-medium leading-6 text-gray-900">Deskripsi</label>
                                                <input id="deskripsi" type="hidden" name="deskripsi">
                                                <trix-editor class="trix-editor" input="deskripsi"></trix-editor>
                                            </div>


                                            <div class="relative mt-2 rounded-md shadow-sm">
                                                <label for="spesipikasi"
                                                    class="block text-sm font-medium leading-6 text-gray-900">Spesifikasi</label>
                                                <input id="spesipikasi" type="hidden" name="spesipikasi">
                                                <trix-editor class="trix-editor" input="spesipikasi"></trix-editor>
                                            </div>
                                            <!-- ... Bagian lain dari kode Anda ... -->

                                            <legend class="text-base font-semibold leading-6 text-gray-900 pt-4">
                                                Kategory
                                            </legend>
                                            <div class="flex flex-wrap">

                                                @foreach ($categories as $category)
                                                    <!-- Checkbox -->
                                                    <label class="w-1/4 flex items-center mt-2">
                                                        <input type="checkbox" name="category_id[]"
                                                            value="{{ $category->id }}" class="mr-2">{{ $category->name }}
                                                    </label>
                                                @endforeach
                                            </div>



                                            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                                <button type="submit"
                                                    class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:ml-3 sm:w-auto">Simpan</button>
                                                <button type="button"
                                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                                                    @click="open = false">Cancel</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 flow-root overflow-hidden">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <table class="w-full text-left">
                            <thead class="bg-white">

                                <tr>
                                    <th scope="col"
                                        class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                        No</th>
                                    <th scope="col"
                                        class="relative isolate py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">
                                        Nama Produk
                                        <div
                                            class="absolute inset-y-0 right-full -z-10 w-screen border-b border-b-gray-200">
                                        </div>
                                        <div class="absolute inset-y-0 left-0 -z-10 w-screen border-b border-b-gray-200">
                                        </div>
                                    </th>
                                    <th scope="col"
                                        class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                        Kategory </th>

                                    <th scope="col" class="relative py-3.5 pl-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="relative py-4 pr-3 text-sm font-medium text-gray-900">
                                            {{ $product->nama_produk }}
                                            <div class="absolute bottom-0 right-full h-px w-screen bg-gray-100"></div>
                                            <div class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"></div>
                                        </td>
                                        <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">


                                            @foreach ($product->categories as $category)
                                                {{ $category->name }}
                                            @endforeach

                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>






    <style>
        .trix-editor {
            @apply w-full;
        }

        .trix-editor h1 {
            font-size: 1.25rem !important;
            line-height: 1.25rem !important;
            @apply leading-5 font-semibold mb-4;
        }

        .trix-editor a:not(.no-underline) {
            @apply underline;
        }

        .trix-editor a:visited {
            color: green;
        }

        .trix-editor ul {
            list-style-type: disc;
            padding-left: 1rem;
        }

        .trix-editor ol {
            list-style-type: decimal;
            padding-left: 1rem;
        }

        .trix-editor pre {
            display: inline-block;
            width: 100%;
            vertical-align: top;
            font-family: monospace;
            font-size: 1.5em;
            padding: 0.5em;
            white-space: pre;
            background-color: #eee;
            overflow-x: auto;
        }

        .trix-editor blockquote {
            border: 0 solid #ccc;
            border-left-width: 0px;
            border-left-width: 0.3em;
            margin-left: 0.3em;
            padding-left: 0.6em;
        }
    </style>
@endsection
