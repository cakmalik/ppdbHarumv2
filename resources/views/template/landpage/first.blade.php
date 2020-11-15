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
                <br>
                <br>
                <img style="width: 100%" class="logobesar" src="img/alur.svg" alt="logobesar" style />
                <p class="tulisanlogo">{!! $judul_welcome !!}</p>
            </div>
        </div>
        <div class="dua column">
            <div class="kanan">
                {!! $pesan_welcome !!}
                <a class="button" href="{{ route('login.member') }}">LOGIN</a>

                <div class="footer">
                    <p>made by
                        <a target="_blank" href="https://wa.me/6285333920007"><b>pm.</b></a>
                        &
                        <a target="_blank" href="https://wa.me/6285232213939"><b>iai.</b></a>
                        with milligram
                    </p>
                </div>
            </div>

        </div>

    </div>


</body>

</html>
