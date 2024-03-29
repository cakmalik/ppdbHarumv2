@include('template.app._head')

<body>

    @if ($message = Session::get('success'))
        <x-Alert halo="OK" pesan="{{ $message }}" />
    @endif
    @include('template.app._navbar')

    <section class="negative ">

        <div class="container mb-4 ">
            <div class="card">
                <div class="card-body">
                    @include('template.app._breadcumb')
                    <h1 class="pt-2 pb-4 text-center display-6">@yield('title')</h1>
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    @include('template.app._footer')
