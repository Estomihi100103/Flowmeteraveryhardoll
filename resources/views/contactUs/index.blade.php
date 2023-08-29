@extends('layouts.navbar')

@section('content')
    @include('layouts.carousel')
    <div id="livescroll" class="mx-10">
        <div class="flex bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900">Contact Us</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Memajukan teknologi perekonomian dan mengenalkan citra
                        baik
                        perusahaan di tanah air Indonesia. </p>
                </div>
                <div
                    class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 text-base leading-7 sm:grid-cols-2 sm:gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                    <div>
                        <h1 class="border-l border-indigo-600 pl-6 font-semibold text-gray-900">Lokasi</h1>
                        <address class="border-l border-gray-200 pl-6 pt-2 not-italic text-gray-600">
                            <p>GEDUNG MGK KEMAYORAN</p>
                            <p>LT.GF Blok A5 No.8</p>
                        </address>
                    </div>
                    <div>
                        <h1 class="border-l border-indigo-600 pl-6 font-semibold text-gray-900">Telepon</h1>
                        <address class="border-l border-gray-200 pl-6 pt-2 not-italic text-gray-600">
                            <p>085370194006</p>
                            <p>0021-6585-1996</p>
                        </address>
                    </div>
                    <div>
                        <h1 class="border-l border-indigo-600 pl-6 font-semibold text-gray-900">Email Us</h1>
                        <address class="border-l border-gray-200 pl-6 pt-2 not-italic text-gray-600">
                            <p>Email : salesnusantaraberkat@gmail.com</p>
                            <p></p>
                        </address>
                    </div>

                </div>
            </div>

            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <img src="img/Logo.png" alt="" class="fill-current text-blue-500">
                    <div class="mt-5">
                        <p class="mt-5 text-lg leading-8 text-gray-600 text-justify">Kami adalah pilihan utama Anda untuk peralatan
                            teknik berkualitas, khususnya dalam distributor flowmeter, water meter, dan perlengkapan alat
                            teknik. Dengan fokus pada performa tinggi, kami menyediakan berbagai peralatan
                            laboratorium, industri, dan pengukuran aliran air.

                            Kami bangga memberikan solusi inovatif dengan produk berkualitas tertinggi. Dengan tim
                            berpengalaman, kami siap memberikan layanan responsif dan pengetahuan teknis mendalam kepada
                            pelanggan kami. </p>
                    </div>

                </div>
            </div>


        </div>

    </div>
@endsection
