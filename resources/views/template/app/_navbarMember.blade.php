<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar hidden-tablet hidden-phone py-3">
    <div class="container">
        <a class="navbar-brand" href="#">SDIT HARUM JEMBER</a>
        <a class="btn btn-outline-light" href="{{ route('logout') }}">
            {{ __('LOGOUT') }}
        </a>
    </div>
</nav>

{{-- ternyata ini harus satu kata, tidak bisa :menu_id --}}
<x-menu_member :menuid="$menu_id" />
