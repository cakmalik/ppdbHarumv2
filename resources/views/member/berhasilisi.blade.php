@include('template2._head')

    <script>
        setTimeout(function() {
            window.location.href = '/members/index';
        }, 5000);

    </script>
</head>

<body>
    <fieldset class="overflow-hidden">
                        <div class="form-card">
                            <div class="row"></div>
                            <br />
                            <h2 class="text-center">
                                <strong>SUCCESS !</strong>
                            </h2>
                            <br />
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <img src="{{ asset('img/new/sukses.png') }}" class="fit-image" />
                                </div>
                            </div>
                            <br /><br />
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="text-center">
                                        Anda telah berhasil mengisi data, tunggu beberapa saat
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
</body>

</html>
