@include('template.app.header')
@section('script-head')
    <style>
        .sentuh {
            margin-left: 20px;
            padding: 20px !important;
        }

    </style>

@endsection

<body>
    @include('sweet::alert')

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar hidden-tablet hidden-phone py-3">
        <div class="container">
            <a class="navbar-brand" href="#">SDIT HARUM JEMBER</a>
                 {{-- <p>{{ Auth::user()->name }}</p> --}}
                <a class="btn btn-outline-light" href="{{ route('logout') }}">
                  {{ __('Logout') }}
                  </a>
         </div>
    </nav>

    <div class="container">
            <section>
              
                    @php
                    $role = Auth::guard("user")->user()->level;
                    $a= DB::table('titlemenus')->where('id',$role)->first();
                    $b=
                    DB::table('menus')->where(['titlemenu_id'=>$role,'is_active'=>1])->orderBy('posisi','asc')->get();
                    @endphp

                    <p class="display-5 text-center">{{ config('app.name') }}</p>

                    <div class="alert alert-info" role="alert">
                            {{ $a->name }}
                    </div>
                    
                    @foreach ($b as $menu)
                            <a class="btn btn-primary mb-3" href="{{ $menu->url }}">
                                <i class="{{ $menu->icon }}" aria-hidden="true"></i>
                                <span>
                                    {{ $menu->name }}
                                </span>
                            </a>
                    @endforeach
            </section>
            <!-- body isi -->
            <h3>@yield('header')</h3>
            @yield('content')
    </div>      
    <script src="{{ asset('js/admin.js') }}">
    </script>
    @stack('popup')
    @stack('scripts')
</body>

</html>
