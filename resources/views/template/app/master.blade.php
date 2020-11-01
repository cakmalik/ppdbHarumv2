<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ Str::ucfirst(Request::segment(1)) }}</title>

    <link rel="stylesheet" href="{{ asset('assets/miligram/milligram.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/color.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

</head>


<body>
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
                <ul class="column sidebar-nav">
                    <li class="nav-section-heading">Menu</li>
                    <li>
                        <a class="sentuh" href="/" class="">
                            <i class="fa fa-bell" aria-hidden="true"></i>
                            <span class="tekken">Token</span>
                        </a>
                    </li>
                </ul>
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
            @yield('content')
        </div>
    </div>


    <script src="{{ asset('js/admin.js') }}">
    </script>
    @stack('popup')
    @stack('scripts')
</body>

</html>
