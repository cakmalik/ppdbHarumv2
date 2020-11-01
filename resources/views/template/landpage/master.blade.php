<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/miligram/milligram.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/page.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}" />
</head>

<body>
    <!-- navbar -->
    <div class="nav">
        <input type="checkbox" id="nav-check" />
        <div id="nav-title" class="nav-title">{{ config('app.name') }}</div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        @include('template.landpage.menu')
    </div>

    <!-- content -->
    @yield('content')

    <div class="footer">
        <p>made by
            <a target="_blank" style="color:grey" href="https://wa.me/6285333920007"><b>pm.</b></a>
            &
            <a target="_blank" style="color:grey" href="https://wa.me/6285232213939"><b>iai.</b></a>
            with milligram
        </p>
    </div>
</body>

</html>
