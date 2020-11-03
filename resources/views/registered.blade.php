<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/miligram/milligram.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" />
</head>

<body>
    <!-- navbar -->
    <div class="nav">
        <input type="checkbox" id="nav-check" />
        <div class="nav-title">{{ config('app.name') }}</div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="{{ URL('wel/announ') }}">Pengumuman</a>
            <a href="{{ URL('wel/contact') }}">Kontak</a>
            <a class="login" href="{{ route('login.member') }}">LOGIN</a>
        </div>
    </div>

    <!-- content -->
    <div class="row full">
        <div class="satu column">
            <div class="kiri">
                <img class="logobesar" src="{{ asset('img/logobesar.svg') }}" alt="logobesar" />
                <p class="tulisanlogo">PEeNDAFTARAN PPDB</p>
            </div>
        </div>

        <div class="dua column">
            <div class="kanan">
                <h1>Selamat</h1>
                <p>Berhasil Mendaftar</p>
                <p>Silahkan tunggu informasi berikutnya di website ini</p>
            </div>
        </div>
    </div>

</body>

</html>
