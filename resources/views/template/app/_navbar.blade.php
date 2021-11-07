<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar hidden-tablet hidden-phone py-3">
    <div class="container">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <a class="btn btn-outline-light" href="{{ route('logout') }}">
            {{ __('LOGOUT') }}
        </a>
    </div>
</nav>

<x-menu_admin />
