@include('template.app.header')

<body>
    @include('sweet::alert')
    <div id="page-container" class="sidebar-open">
        <div id="page-overlay"></div>

        <!-- navbar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="float-left">
                    <a href="#" id="close-sidebar" class="bundar"><i class="fas fa-fw fa-times"></i></a>
                </div>
                <a href="/">
                    <span class="sidebar-header-title">{{ config('app.name') }}</span>
                </a>
            </div>

            <section class="sidebar-logo">
                <div class="logo-circle">
                    <i class="far fa-user"></i>
                </div>
            </section>
            <section class="row">
                @if ($role == 4)
                    <ul class="column sidebar-nav">
                        @php
                        $a= DB::table('titlemenus')->where('id',$role)->first();
                        $b=
                        DB::table('menus')->where(['titlemenu_id'=>$role,'is_active'=>1])->orderBy('posisi','asc')->get();
                        @endphp

                        <li class="nav-section-heading">{{ $a->name }}</li>
                        @foreach ($b as $menu)
                            <li>
                                <a class="sentuh" href="{{ $menu->url }}" class="">
                                    <i class="{{ $menu->icon }}" aria-hidden="true"></i>
                                    <span class="tekken">{{ $menu->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @elseif($role==0)
                    <ul class="column sidebar-nav" style="margin-top: 10px">
                        <li>
                            <a class="sentuh" href="/members/index" class="">
                                <i class="fas fa-user" aria-hidden="true"></i>
                                <span class="tekken">Biodata</span>
                            </a>
                        </li>
                        <li>
                            <a class="sentuh" href="/members/schedule" class="">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                <span class="tekken">Jadwal tes</span>
                            </a>
                        </li>
                    </ul>
                @endif
            </section>
        </nav>

        <!-- header -->
        <div id="page-content" class="container-fluid">
            <div class="row page-header">
                <div class="column">
                    <a href="#" id="toggle-sidebar" class="bundar"><i class="fas fa-fw fa-bars"></i></a>
                </div>
                <div class="column">
                    <div class="user">
                        {{-- <p>{{ Auth::user()->name }}</p>
                        --}}
                        <a class="dropdown-item button" href="{{ route('logout') }}">
                            {{ __('Logout') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- content -->
        <div id="page-body">
            <h3>@yield('header')</h3>
            @yield('content')
        </div>
    </div>


    <script src="{{ asset('js/admin.js') }}">
    </script>
    @stack('popup')
    @stack('scripts')
</body>

</html>
