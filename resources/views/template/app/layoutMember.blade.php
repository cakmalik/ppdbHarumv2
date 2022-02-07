@include('template.app._head')

<body>

    @include('template.app._navbarMember')

    <section class="negative ">
        <div class="container mb-4 ">
            <div class="card">
                <div class="card-body">
                    <h1 class="pt-2 pb-4 text-center display-6">@yield('title')</h1>

                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    @include('template.app._footer')
