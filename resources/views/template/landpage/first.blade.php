<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="assets/miligram/milligram.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/landing.css" />
    <link rel="stylesheet" href="css/nav.css" />
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
                <img class="logobesar" src="img/logobesar.svg" alt="logobesar" />
                <p class="tulisanlogo">PENDAFTARAN PPDB</p>
            </div>
        </div>
        <div class="dua column">
            <div class="kanan">
                <h1>Selamat Datang</h1>
                <p>calon peserta didik baru di website</p>
                <p>PPDB SDIT Harapan Umat Jember</p>
                <a class="button" href="{{ route('login.member') }}">LOGIN</a>
                {{-- <a class="button" href="{{ route('login.admin') }}">ADMIN</a>
                --}}
            </div>
        </div>
    </div>

    <div class="footer">
        <p>made by
            <a target="_blank" style="color:white" href="https://wa.me/6285333920007"><b>pm.</b></a>
            &
            <a target="_blank" style="color:white" href="https://wa.me/6285232213939"><b>iai.</b></a>
            with milligram
        </p>
    </div>
</body>

</html>
