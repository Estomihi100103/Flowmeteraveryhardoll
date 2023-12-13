@extends('admin.layouts.dashboard')

@section('content')
    <div class="">
        <div class="bg-white">
            <x-success-alert />
            <div>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">Kategori</h1>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <!-- Modal toggle -->
                            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Tambah Kategori
                            </button>
                            <!-- Main modal -->
                            <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow">
                                        <!-- Modal header -->
                                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                                            <h3 class="text-xl font-semibold text-gray-900">Tambah Kategori</h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                                                data-modal-hide="defaultModal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 space-y-6">
                                            <form method="post" action="/admin/categories" enctype="multipart/form-data">
                                                @csrf
                                                <label for="name"
                                                    class="block text-sm font-medium leading-6 text-gray-900">Nama
                                                    Kategori</label>
                                                <div class="relative mt-2 mb-4 rounded-md shadow-sm">
                                                    <div
                                                        class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                    </div>
                                                    <input type="text" name="name" id="name"
                                                        class="block w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('name') border-red-500 @enderror"
                                                        placeholder="Nama Kategori">
                                                    <!-- Error message -->
                                                    @error('name')
                                                        <div class="mt-1 text-red-500 text-sm">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="relative mt-2 rounded-md shadow-sm">
                                                    <label for="description"
                                                        class="block text-sm font-medium leading-6 text-gray-900">Deskripsi</label>
                                                    <input id="x" type="hidden" name="description">
                                                    <trix-editor class="trix-editor" input="x"></trix-editor>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image"
                                                        class="block text-sm font-medium text-gray-700 mt-3">Chose
                                                        image</label>
                                                    <img class="max-w-full mb-3 w-1/2 hidden" alt="Preview" src=""
                                                        id="imgPreview">
                                                    <input type="file" id="image" name="image" class="mt-1"
                                                        onchange="previewImage()">
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex items-center mt-6 space-x-2  rounded-b">
                                                    <button data-modal-hide="defaultModal" type="submit"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batal</button>
                                                </div>
                                            </form>
                                        </div>
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
                                        No
                                    </th>
                                    <th scope="col"
                                        class="relative isolate py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">
                                        Nama</th>
                                    <th class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-medium sm:pr-6">
                                        <p class="text-gray-900 mx-12 text-right">Action</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="relative py-4 pr-3 text-sm font-medium text-gray-900">
                                            {{ $category->name }}
                                            <div class="absolute bottom-0 right-full h-px w-screen bg-gray-100"></div>
                                            <div class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"></div>
                                        </td>
                                        <td class="relative  py-4 pr-4 text-sm font-medium sm:pr-6 text-right">
                                            <a href="/category/{{ $category->slug }}"
                                                class="text-indigo-600 hover:text-indigo-900 px-2">Lihat</a>
                                            <!-- Modal toggle -->
                                            <button data-modal-target="staticModal{{ $category->id }}"
                                                data-modal-toggle="staticModal{{ $category->id }}"
                                                class="text-indigo-600 hover:text-indigo-900 px-2" type="button">
                                                Edit
                                            </button>
                                            <!-- Main modal -->
                                            <div id="staticModal{{ $category->id }}" data-modal-backdrop="static"
                                                tabindex="-1" aria-hidden="true"
                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-2xl max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow">
                                                        <!-- Modal header -->
                                                        <div
                                                            class="flex items-start justify-between p-4 border-b rounded-t">
                                                            <h3 class="text-xl font-semibold text-gray-900">
                                                                Edit Kategori</h3>
                                                            <button type="button"
                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                                                                data-modal-hide="staticModal{{ $category->id }}">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="p-6 space-y-6 text-left font-normal">
                                                            <form action="/admin/categories/{{ $category->id }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <label for="name-{{ $category->id }}"
                                                                    class="block text-sm mb-2">Nama Kategori:</label>
                                                                <input type="text" id="name-{{ $category->id }}"
                                                                    name="name" value="{{ $category->name }}"
                                                                    class="w-full px-3 py-2 border rounded-md mb-4">
                                                                <label for="description-{{ $category->id }}"
                                                                    class="block text-sm mb-2">Deskripsi:</label>
                                                                <input id="description-{{ $category->id }}"
                                                                    type="hidden" name="description"
                                                                    value="{{ $category->description }}">
                                                                <trix-editor class="trix-editor"
                                                                    input="description-{{ $category->id }}"></trix-editor>
                                                                <label for="image-{{ $category->id }}"
                                                                    class="block text-sm  mt-3">Pilih
                                                                    gambar baru (Opsional)</label>
                                                                @if ($category->image)
                                                                    <img src="{{ asset('storage/' . $category->image) }}"
                                                                        alt="Kategori Image" class="max-w-full mb-3 w-1/2"
                                                                        id="imgPreview-{{ $category->id }}">
                                                                @endif
                                                                <input type="file" id="image-{{ $category->id }}"
                                                                    name="image" class="mt-1"
                                                                    onchange="previewImageEdit(this, 'imgPreview-{{ $category->id }}')">
                                                                <!-- Tempat untuk preview gambar baru -->
                                                                <img class="max-w-full mb-3 w-1/2 hidden" alt="Preview"
                                                                    src="" id="imgPreview-{{ $category->id }}">
                                                        </div>
                                                        <!-- Modal footer -->
                                                        <div
                                                            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                                                            <button data-modal-hide="staticModal{{ $category->id }}"
                                                                type="submit"
                                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                                                Simpan
                                                            </button>
                                                            <button data-modal-hide="staticModal{{ $category->id }}"
                                                                type="button"
                                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">
                                                                Batal
                                                            </button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <form action="/admin/categories/{{ $category->id }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Yakin?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-indigo-600 hover:text-indigo-900 px-2">Hapus</button>
                                            </form>
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

        #image-preview {
            width: 16rem;
            height: 16rem;
            object-fit: cover;
        }

        .modal-hidden {
            display: none;
        }



        .modal.open {
            display: flex;
            opacity: 1;
            pointer-events: auto;
        }
    </style>


    <script>
        function previewImage() {
            const file = document.getElementById('image').files[0];
            const reader = new FileReader();

            reader.onloadend = function() {
                document.getElementById('imgPreview').src = reader.result;
                document.getElementById('imgPreview').classList.remove('hidden');
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                document.getElementById('imgPreview').src = "";
            }
        }

        function previewImageEdit(inputElement, imgElementId) {
            const file = inputElement.files[0];
            const reader = new FileReader();

            reader.onloadend = function() {
                document.getElementById(imgElementId).src = reader.result;
                document.getElementById(imgElementId).classList.remove('hidden');
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                document.getElementById(imgElementId).src = "";
            }
        }




        function closeModal(modalID) {
            const modal = document.querySelector(`.${modalID}`);
            modal.classList.add('hidden');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const modalButtons = document.querySelectorAll('.openModal');

            modalButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const modalID = button.getAttribute('data-modal');
                    const modal = document.querySelector(`.${modalID}`);
                    modal.classList.remove('hidden');
                });
            });
        });
    </script>
@endsection
