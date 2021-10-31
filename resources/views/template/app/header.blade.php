<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title')
    </title>

    <!-- <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" /> -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/miligram/milligram.min.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/color.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>

    <link rel="stylesheet" href="{{ asset('css/alert.css') }}" />

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<<<<<<< HEAD
     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="{{ asset('css/new/style.css') }}" />
=======
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css" />
>>>>>>> b19b802ab3c01146524acfceb003227c7058d7c0

    @stack('script-head')
</head>
