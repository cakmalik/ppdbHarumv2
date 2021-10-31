<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/new/style.css') }}" />

    <title>Info PPDB SDIT Harum Jember</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar hidden-tablet hidden-phone py-3">
        <div class="container">
            <a class="navbar-brand" href="#">SDIT HARUM JEMBER</a>

            <button class="btn btn-outline-light ms-3" type="submit">LOGOUT</button>
        </div>
    </nav>

    <section class="bg-secondary py-5">
        <div class="container pb-4">
            <div class="d-flex justify-content-between flex-wrap">
                <a href="#" class="btn btn-outline-light mt-2 mt-xl-0 width-100">
                    <i class="bi bi-menu-button-wide"></i><br />
                    Beranda
                </a>

                <a href="#" class="btn btn-outline-light mt-2 mt-xl-0 width-100">
                    <i class="bi bi-key"></i><br />
                    Token
                </a>

                <a href="#" class="btn btn-outline-light mt-2 mt-xl-0 width-100">
                    <i class="bi bi-people"></i><br />
                    Pendaftar
                </a>

                <a href="#" class="btn btn-outline-light mt-2 mt-xl-0 width-100">
                    <i class="bi bi-journal"></i><br />
                    Jadwal Tes
                </a>

                <a href="#" class="btn btn-outline-light mt-2 mt-xl-0 width-100">
                    <i class="bi bi-person-bounding-box"></i><br />
                    Ukuran Baju
                </a>

                <a href="#" class="btn btn-outline-light mt-2 mt-xl-0 width-100">
                    <i class="bi bi-question-square"></i><br />
                    Terima-Tolak
                </a>

                <a href="#" class="btn btn-outline-light mt-2 mt-xl-0 width-100">
                    <i class="bi bi-card-checklist"></i><br />
                    Status
                </a>

                <a href="#" class="btn btn-outline-light mt-2 mt-xl-0 width-100">
                    <i class="bi bi-pen"></i><br />
                    Daftar ulang
                </a>
            </div>
        </div>
    </section>

    <section class="negative">
        <div class="container mb-4">
            <div class="card">
                <div class="card-body">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb bg-light p-2 rounded">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <h1 class="pt-2 pb-4 text-center display-6">Token Pendaftaran</h1>

                    <form class="mb-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" />
                        </div>

                        <button type="submit" class="btn btn-primary">Refresh</button>
                        <button type="submit" class="btn btn-primary">Use</button>
                        <button type="submit" class="btn btn-primary">Excel</button>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-4 bg-dark text-white">
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <p>Copyright © SDIT Harapan Umat Jember 2021-2022 by PM & IAI</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end mb-4">
                        <a href="#" class="btn btn-outline-light btn-sm">
                            <i class="bi bi-globe2" aria-hidden="true"></i>
                            website
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm">
                            <i class="bi bi-facebook" aria-hidden="true"></i> facebook
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                            instagram
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
