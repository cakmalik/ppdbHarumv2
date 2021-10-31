@include('template2._head')

<body>

    @include('template2._navbar')

    <section class="negative ">
        <div class="container mb-4 ">
            <div class="card">
                <div class="card-body">

                    @include('template2._breadcumb')

                    <h1 class="pt-2 pb-4 text-center display-6">@yield('title')</h1>

                    @yield('content')

                </div>
            </div>
        </div>
    </section>
    @include('template2._footer')
