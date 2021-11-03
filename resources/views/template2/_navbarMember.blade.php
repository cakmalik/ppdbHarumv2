<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar hidden-tablet hidden-phone py-3">
    <div class="container">
        <a class="navbar-brand" href="#">SDIT HARUM JEMBER</a>
        <a class="btn btn-outline-light" href="{{ route('logout') }}">
            {{ __('LOGOUT') }}
        </a>
    </div>
</nav>

<section class="bg-secondary py-4">
    <div class="container pb-4">
        @if ($role == 4)
        @php
        $a = DB::table('titlemenus')
        ->where('id', $role)
        ->first();
        $b = DB::table('menus')
        ->where(['titlemenu_id' => $role, 'is_active' => 1])
        ->orderBy('posisi', 'asc')
        ->get();
        @endphp

        <div class="alert alert-info text-center" role="alert">
            {{ $a->name }}
        </div>

        <div class="d-flex justify-content-between flex-wrap">
            @foreach ($b as $menu)
            <a class="btn btn-outline-light mt-2 mt-xl-0 width-100" href="{{ $menu->url }}">
                <i class="{{ $menu->icon }}" aria-hidden="true"></i>
                <br>
                <span>
                    {{ $menu->name }}
                </span>
            </a>
            @endforeach
        </div>
        @elseif($role==0)

        <div class="alert alert-info text-center fs-4" role="alert">
            Status penerimaan : Menunggu
        </div>

        <div class="d-flex justify-content-center flex-wrap">
            <a class="btn btn-outline-light mt-2 mt-xl-0 width-100 mx-2" href="/members/index">
                <i class="bi bi-people" aria-hidden="true"></i>
                <br>
                <span>
                    Biodata
                </span>
            </a>
            <a class="btn btn-outline-light mt-2 mt-xl-0 width-100 mx-2" href="/members/schedule">
                <i class="bi bi-list-check" aria-hidden="true"></i>
                <br>
                <span>
                    Jadwal Tes
                </span>
            </a>
        </div>

        @endif

    </div>
</section>