<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- cdn bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Vite buat hot reload --}}
    @vite([])
    <title>Home</title>

    <style>
        html {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        @media (max-width: 576px) {
            .logout {
                margin-top: 15px;
            }

            .input-group {
                width: 100%;
            }

            .navbar-image {
                width: 80px;
            }
        }

        @media (min-width: 528px) {
            .logout {
                margin-top: 15px;
            }

            .input-group {
                width: 100%;
            }

            .navbar-image {
                width: 80px;
            }
        }

        @media (min-width: 992px) {
            .logout {
                margin-top: 0px;
                margin-left: 10px
            }

            .input-group {
                width: 70%;
            }

            .navbar-brand {
                width: fit-content;
            }

            .navbar-image {
                width: 80px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white py-4">
        <div class="container-md">
            <a class="navbar-brand" href="#"><img src="bookita.PNG" alt="" class="navbar-image"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cerpen</a></li>
                            <li><a class="dropdown-item" href="#">Novel</a></li>
                            <li><a class="dropdown-item" href="#">Ensiklopedia</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Koleksi</a>
                    </li>
                </ul>
                <div class="input-group d-md-flex">
                    <input type="text" class="form-control bg-light border-0 rounded-0"
                        placeholder="Cari berdasarkan judul buku.." aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn bg-light" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                </div>
                <div class="logout fw-semibold">Logout</div>
            </div>
        </div>
    </nav>

    {{-- Carousel --}}
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/home/HERO-FULL.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carouselDua.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/home/carouselTiga.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- Carousel --}}

    {{-- Kategori --}}
    <div class="container-md mt-5">
        <div class="row text-center align-center">
            <p class="fs-3 fw-semibold">Baca Sesuai Kategori</p>
        </div>
        <div class="row align-center">
            <div class="col-sm">
                <div class="card mb-3 p-3"
                    style="width: 100%; background: linear-gradient(to right top, #DB2D31, #8C0003)">
                    <div class="row g-0">
                        <div class="col align-content-center">
                            <div class="card-body">
                                <img src="img/home/five-star.png" class="img-fluid w-75" alt="">
                                <h4 class="card-title text-white w-100">CERPEN</h4>

                                <button type="button" class="btn btn-submit opacity-75 mt-3"
                                    style="color: #FFFFFF; background-color: #111111; width: min-content">Jelajahi</button>
                            </div>
                        </div>
                        <div class="col text-center" style="align-content: center">
                            <img src="img/home/cerpen.png" class="img-fluid w-75" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card mb-3 p-3"
                    style="width: 100%; background: linear-gradient(to right top, #74AD52, #2D6F06)">
                    <div class="row g-0">
                        <div class="col align-content-center">
                            <div class="card-body">
                                <img src="img/home/four-star.png" class="img-fluid w-75" alt="">
                                <h4 class="card-title text-white w-100">NOVEL</h4>

                                <button type="button" class="btn btn-submit opacity-75 mt-3"
                                    style="color: #FFFFFF; background-color: #111111; width: min-content">Jelajahi</button>
                            </div>
                        </div>
                        <div class="col text-center" style="align-content: center">
                            <img src="img/home/novel.png" class="img-fluid w-75" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl">
                <div class="card mb-3 p-3"
                    style="width: 100%; background: linear-gradient(to right top, #153E76, #001B41)">
                    <div class="row g-0">
                        <div class="col align-content-center">
                            <div class="card-body">
                                <img src="img/home/four-star.png" class="img-fluid w-75" alt="">
                                <h5 class="card-title text-white w-auto">ENSIKLOPEDIA</h5>

                                <button type="button" class="btn btn-submit opacity-75 mt-3"
                                    style="color: #FFFFFF; background-color: #111111; width: min-content">Jelajahi</button>
                            </div>
                        </div>
                        <div class="col text-center" style="align-content: center">
                            <img src="img/home/ensiklopedia.png" class="img-fluid w-75" alt="...">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- Kategori --}}
        {{-- Baca semua --}}
        <div class="container-md">
            <div class="row" style="min-height: 500px; background-color: #FBDBE8">
                <div class="col-5" style="align-content: center; padding-left: 10%">
                    <h1 class="fw-bolder fs-auto">Lihat Semua</h1>
                    <h3 class="fs-auto">Koleksi Buku!</h3>
                    <button type="button" class="btn btn-dark">Lihat Sekarang</button>
                </div>
                <div class="col-7" style="align-content: center; padding-right: 15%">
                    <img class="img-fluid" style="width: 80vw" src="img/home/lihat-semua.png" alt="">
                </div>
            </div>
        </div>
        {{-- Baca semua --}}
        {{-- buku terbaru --}}
        <h1 class="p-5"></h1>
        {{-- buku terbaru --}}
        {{-- cdn bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
