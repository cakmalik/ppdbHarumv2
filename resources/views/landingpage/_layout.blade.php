@include('landingpage.layout.header')

<body>
    <div class="backgroundimg">

        @include('landingpage.layout.navbar')

        {{-- @component('components.alert', ['judul' => 'Header Component'])
        sdfsd
        @endcomponent --}}

        {{-- ini contoh komponen model 1 --}}
        {{-- @component('components.alert')
            @slot('judul')
            sdfhsdffds <strong>asd</strong>asf
            @endslot
        
            sdfsd

            @slot('footer')
                dsfdsffds
            @endslot

        @endcomponent --}}

        {{-- ini contoh komponen model 1 --}}
        {{-- <x-alert>
            <x-slot name="judul">
                judul
            </x-slot>

            sdfsd

            @slot('footer')
                dsfdsffds
            @endslot

        </x-alert> --}}






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
