@include('template2._head')

<body>

    @include('template2._navbar')

    <section class="negative ">
        <div class="container mb-4 ">
            <div class="card">
                <div class="card-body">

                    @include('template2._breadcumb')

<<<<<<< HEAD
                    <h1 class="pt-2 pb-4 text-center display-6">@yield('judul')</h1>
=======
                    <h1 class="pt-2 pb-4 text-center display-6">@yield('title')</h1>
>>>>>>> 33b57329d0ff84a09ecd972291c18e76c9f559ed

                    @yield('content')

                </div>
            </div>
        </div>
    </section>
    @include('template2._footer')
