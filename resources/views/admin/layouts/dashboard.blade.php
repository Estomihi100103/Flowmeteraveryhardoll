<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/components.js"></script>
    <script type="module" src="/js/iframe-alpine-964dceff.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/trix/dist/trix.min.css">
    <script src="https://cdn.jsdelivr.net/npm/trix/dist/trix.min.js"></script>
    <script src="/js/myjs.js"></script>
    <title>{{ $title }}</title>
    <link rel="icon" href="/img/Logo.png" type="image/x-icon">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="" style="">
        <div class="bg-white">
            <div x-data="{ open: false }" @keydown.window.escape="open = false">

                <!-- sidebar component -->
                @include('admin.layouts.sidebarComponent')



                <!-- Static sidebar for desktop -->
                @include('admin.layouts.StaticSidebar')



                <div class="lg:pl-72">

                    <!--navbar -->
                    @include('admin.layouts.navbar')


                    <main class="py-10">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            @yield('content')
                        </div>
                    </main>


                </div>
            </div>

        </div>
    </div>

</body>

</html>
