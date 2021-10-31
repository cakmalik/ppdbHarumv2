<nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-3">
    <div class="container">
        <a class="navbar-brand" href="#">SDIT HARUM JEMBER</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <span></span>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page"
                        href="{{ route('landingpage.home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('landingpage.jadwal') }}">Jadwal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('landingpage.panduan') }}">Panduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('landingpage.kontak') }}">Kontak</a>
                </li>
            </ul>
            <a href="/login" class="btn btn-outline-light ms-md-3" type="submit">
                LOGIN
            </a>
            <div class="ms-3">
                <button class="btn btn-outline-light" type="checkbox" id="darkMode"><img
                        src="{{ asset('img/new/night-mode.png') }}" width="25"></button>
            </div>
        </div>
    </div>
</nav>
