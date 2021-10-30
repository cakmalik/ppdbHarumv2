@include('landingpage.layout.header')

<body>
    <div class="backgroundimg">

        @include('landingpage.layout.navbar')

        <section class="bg-transparent">
            <div class="container pb-5">
                <div class="row justify-content-center d-flex">
                    <div class="col-xs-12 col-md-10 align-self-center">
                        <h1 class="display-5 text-center mb-3 mt-4 text-white">
                            @yield('judul')
                        </h1>
                        @stack('login')
                    </div>
                </div>
            </div>
        </section>
    </div>
    @yield('content')
    @include('landingpage.layout.footer')
