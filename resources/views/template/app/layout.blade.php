@include('template.app._head')

<body>
<<<<<<< HEAD:resources/views/template/app/layout.blade.php
    @include('template.app._navbar')

=======
    <x-Alert type="success" />
    @include('template.app._navbar')
>>>>>>> f38b5c90682a942f2e67b9833353090dab42d91a:resources/views/template2/layout.blade.php
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
