<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/miligram/milligram.min.css') }}" /> --}}
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

        .loader {
            border: 16px solid gray;
            border-radius: 50%;
            border-top: 16px solid #f39c12;
            width: 50;
            height: 50;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

    </style>
    <script>
        setTimeout(function() {
            window.location.href = '/members/cek_data';
        }, 10000);
    </script>
</head>

<body>
    <div class="tengah">
        <h1 style="color: green">Selamat</h1>
        <h2>"{{ $full_name }}"</h2>
        <h2 style="color: green">Diterima</h2>
        <h3>Di SDIT HARAPAN UMAT JEMBER</h3>
        <br><br><br>
        <div class="loader"></div><br>
        <p>Tunggu beberapa saat, <br>
            anda akan diarahkan otomatis
        </p>

    </div>
</body>

</html>
