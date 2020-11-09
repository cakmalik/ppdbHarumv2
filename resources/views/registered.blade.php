<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/miligram/milligram.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}" />


    <style>
        .tengah {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            justify-content: center;
        }

        h1 {
            color: #f39c12;
            font-size: 72px
        }

    </style>
</head>

<body>

    <div class="tengah">
        <h1>Selamat</h1>
        <h2>Anda Telah Berhasil Mendaftar</h2>
        <h3>Silahkan tunggu informasi berikutnya di website ini</h3>
    </div>
</body>

</html>
