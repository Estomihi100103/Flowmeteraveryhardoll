@extends('admin.layouts.dashboard')

@section('content')
    <div class="" style="">
        <div class="bg-white py-10">
            <x-success-alert />
            <div>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">Kategory</h1>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <div x-data="{ open: false }"> <!-- Ini menggunakan Alpine.js untuk mengelola tampilan modal -->
                                <!-- Tombol untuk menampilkan modal -->
                                <button @click="open = true" type="button"
                                    class=" rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:ml-3 sm:w-auto ">
                                    Tambah Kategori
                                </button>

                                <!-- Modal -->
                                <div x-show="open"
                                    class="fixed inset-0 flex items-start justify-center z-50 overflow-y-auto  mt-12 pt-12">
                                    <div
                                        class="bg-white p-5 rounded shadow-lg border max-h-[80vh] overflow-y-auto max-w-2xl">
                                        <div class="mt-3 text-center sm:mt-5">
                                            <h3 class="text-lg font-semibold leading-6 text-gray-900" id="modal-title">
                                                Kategory</h3>
                                        </div>
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
                                        No
                                    </th>
                                    <th scope="col"
                                        class="relative isolate py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">
                                        Nama</th>
                                    <th
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <p class="text-gray-900  mx-12">Action</p>
                                    </th>
                                    <div class="absolute inset-y-0 right-full -z-10 w-screen border-b border-b-gray-200">
                                    </div>
                                    <div class="absolute inset-y-0 left-0 -z-10 w-screen border-b border-b-gray-200">
                                    </div>
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
                                        <td
                                            class="relative whitespace-nowrap py-4 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <a href="/category/{{ $category->slug }}"
                                                class="text-indigo-600 hover:text-indigo-900 px-2">Lihat<span
                                                    class="sr-only"></span></a>

                                            <a href="javascript:void(0)" class="text-indigo-600 hover:text-indigo-900"
                                                onclick="openModal('modal{{ $category->id }}')">Edit</a>

                                            <div id="modal{{ $category->id }}"
                                                class="fixed flex inset-0 items-start justify-center  sm:items-center z-50 overflow-y-auto modal-hidden">
                                                <div
                                                    class="bg-white p-5 rounded shadow-lg border max-h-[80vh] overflow-y-auto max-w-2xl ">
                                                    <div class="text-center">
                                                        <h1>Edit Kategori</h1>
                                                    </div>
                                                    <form method="post" action="/admin/categories"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <label for="name"
                                                            class="block text-sm font-medium leading-6 text-gray-900 text-start">Nama
                                                            Kategori</label>
                                                        <div class="relative mt-2 mb-4 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                            </div>
                                                            <input type="text" name="name" id="name"
                                                                value="{{ $category->name }}"
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
                                                                class="block text-sm font-medium leading-6 text-gray-900 text-start">Deskripsi</label>
                                                            <input id="description-input-{{ $category->id }}"
                                                                type="hidden" name="description"
                                                                value="{{ $category->description }}">
                                                            <trix-editor class="trix-editor text-start"
                                                                input="description-input-{{ $category->id }}"></trix-editor>

                                                        </div>


                                                        <label
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-start"
                                                            for="file_input">Upload file</label>
                                                        <input
                                                            class="block w-full text-sm  border border-gray-300 rounded-lg cursor-pointer  dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                            id="file_input" type="file">


                                                        <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                                            <button type="button"
                                                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                                                                onclick="closeModal('modal{{ $category->id }}')">
                                                                Cancel
                                                            </button>

                                                            <button type="submit"
                                                                class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:ml-3 sm:w-auto">
                                                                Save changes
                                                            </button>
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>



                                            <a href="#"
                                                class="text-indigo-600 hover:text-indigo-900 px-2">Hapus<span
                                                    class="sr-only"></span></a>


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
    </style>


    <script>
        // preview image untuk menampilkan gambar yang akan di upload
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('#imgPreview');

            imgPreview.style.display = 'block'; // agar gambar bisa muncul ketika di upload 

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            let nameInput = document.getElementById("name");
            let submitButton = document.querySelector("button[type='submit']");

            function toggleButtonState() {
                if (nameInput.value.trim() === "") {
                    submitButton.setAttribute("disabled", "disabled");
                } else {
                    submitButton.removeAttribute("disabled");
                }
            }

            // Panggil fungsi ini saat halaman dimuat untuk memastikan tombol dalam keadaan yang benar
            toggleButtonState();

            // Tambahkan event listener untuk perubahan input
            nameInput.addEventListener("input", toggleButtonState);
        });

        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('modal-hidden');
        }



        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('modal-hidden');
        }
    </script>
@endsection
