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
    <title>bookita | Tambah Wawasan-mu Disini</title>

    <style>
        html {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        @media (min-width: 320px) {
            .logout {
                margin-top: 15px;
            }

            .input-group {
                width: 100%;
            }

            .navbar-image {
                width: 50px;
            }

            .jadikan {
                font-size: 3vw;
            }

            .address {
                font-size: 2.5vw;
            }

            .bab {
                font-size: 2.5vw;
            }

            .pink {
                height: 40vh;
            }

            .lihat-semua {
                font-size: 5vw;
            }

            .lihat-koleksi {
                font-size: 3.4vw;
            }

            .lihat-sekarang {
                font-size: 1.5vw;
                width: max-content;
            }

            .modal-detail {
                font-size: 0.5vw;
            }

            .modal-col-banner {
                align-content: center;
            }

            .modal-gambar-banner {
                width: 20vh;
            }

            .modal-judul-banner {
                font-size: 4vw;
            }

            .modal-nama-pembuat {
                font-size: 1vw;
                margin-bottom: 2vw
            }

            .modal-isi-banner {
                font-size: 1.5vw;
            }

            .modal-tombol-banner {
                font-size: 0.9vw;
                width: 100%;
            }

            .modal-kembali {
                margin-right: 1vw;
            }

            .modal-baca-sekarang {
                margin-left: 1vw;
            }

            .modal-wadah-banner {
                margin-left: -1vw;
                align-content: center
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

            .jadikan {
                font-size: 2.5vw;
            }

            .address {
                font-size: 1vw;
            }

            .pink {
                min-height: 30vw;
            }

            .bab {
                font-size: 1vw;
            }

            .lihat-semua {
                font-size: 3vw;
            }

            .lihat-koleksi {
                font-size: 2vw;
            }

            .lihat-sekarang {
                font-size: 1vw;
                width: max-content;
            }

            .modal-row {
                padding-inline: 0.8vw;
            }

            .modal-detail {
                font-size: 1vw;
            }

            .modal-col-banner {
                align-content: center;
            }

            .modal-gambar-banner {
                width: max-content;
            }

            .modal-judul-banner {
                font-size: 2.5vw;
            }

            .modal-nama-pembuat {
                font-size: 0.5vw;
                margin-bottom: 20px;
            }

            .modal-isi-banner {
                font-size: 1vw;
            }

            .modal-tombol-banner {
                font-size: 0.8vw;
                width: max-content;
            }

            .modal-kembali {
                margin-right: 1vw;
            }

            .modal-baca-sekarang {
                margin-left: 1vw;
            }

            .modal-wadah-banner {
                margin-left: -20vw;
                align-content: center
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white py-4">
        <div class="container-md">
            <a class="navbar-brand" href="/home"><img src="bookita.PNG" alt="" class="navbar-image"></a>
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
                        <a class="nav-link active" aria-current="page" href="/koleksi">Koleksi</a>
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
        <div class="container-md mt-5">
            <div class="row pink" style="min-height: 30vw;background-color: #FBDBE8">
                <div class="col-5" style="align-content: center; padding-left: 10%">
                    <h1 class="fw-bolder lihat-semua">Lihat Semua</h1>
                    <h3 class="fs-auto lihat-koleksi">Koleksi Buku!</h3>
                    <button type="button" class="btn btn-dark rounded-0 px-3 mt-4 lihat-sekarang">Lihat Sekarang <i
                            class="bi bi-arrow-right ms-3" style=""></i></button>
                </div>
                <div class="col-7" style="align-content: center; text-align: center">
                    <img class="img-fluid" style="min-width: 20vh; max-width: 30vw" src="img/home/lihat-semua.png"
                        alt="">
                </div>
            </div>
        </div>
        {{-- Baca semua --}}
        {{-- buku terbaru --}}
        <div class="container-xl mt-5">
            <div class="row text-start align-center">
                <p class="fs-3 fw-semibold">Buku Terbaru</p>
            </div>
            <div class="row">
                <table class="">
                    <tr style="align-content: center">
                        <th>
                            <div class="card border-0" style="width: 10vw;">
                                <img src="img/home/cerpen.png" class="card-img-top mb-2" alt="...">
                                <h6 class="card-title fw-lighter fst-italic" style="font-size: 1vw">By. Nama Pembuat
                                </h6>
                                <h4 class="card-title fw-bold" style="font-size: 1.7vw">Judul Buku</h4>
                                <button type="button"
                                    class="btn btn-primary w-100 border-0 rounded-0 mt-2 modal-detail"
                                    style="background-color: #F1592B;" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Lihat Detail
                                </button>
                            </div>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    {{-- buku terbaru --}}
    {{-- modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="linear-gradient(to right top, #DB2D31, #8C0003)">
                {{-- banner --}}
                <div class="row align-center">
                    <div class="col">
                        <div class="card p-3"
                            style="width: 100%; background: linear-gradient(to right top, #273F62, #020600)">
                            <div class="row g-0">
                                <div class="col modal-col-banner ps-2" style="">
                                    <img src="img/home/ensiklopedia.png" class="img-fluid modal-gambar-banner"
                                        alt="...">
                                </div>
                                <div class="col modal-wadah-banner">
                                    <div class="card-body">
                                        <h1 class="card-title text-white w-auto modal-judul-banner">Judul Bukunya
                                            </h5>
                                            <h6 class="text-white-50 modal-nama-pembuat">By : Nama Pembuat</h6>
                                            <p class="text-white-50 modal-isi-banner">Kegelapan yang pekat semakin
                                                mendekat.
                                                Mengisahkan tentang kehidupan seorang pemburu hantu legendaris yang
                                                menangkap
                                                dan memusnahkan para hantu setiap ada kesempatan</p>
                                            <div class="row modal-row" style="justify-content: space-between">
                                                <button type="button"
                                                    class="btn btn-submit px-5 opacity-75 mt-3 text-white modal-tombol-banner"
                                                    style="background-color: #F1592B;"><i
                                                        class="bi bi-arrow-left modal-kembali"></i> Kembali
                                                </button>
                                                <button type="button"
                                                    class="btn btn-submit px-5 opacity-75 mt-3 text-white modal-tombol-banner"
                                                    style="background-color: #F1592B;">Baca
                                                    Sekarang <i class="bi bi-arrow-right modal-baca-sekarang"
                                                        style=""></i></button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- banner --}}
            </div>
        </div>
    </div>
    {{-- modal --}}
    {{-- footer --}}
    <div class="container-fluid mt-5 text-white" style="background-color: #303030;">
        <div class="container-xl foot">
            <div class="row" style="padding-block: 10%;">
                <div class="col-4" style="text-align: start">
                    <h1 class="jadikan" style="">Jadikan bacaanmu menyenangkan bersama booKita</h1>
                </div>
                <div class="col-3 d-flex justify-content-end">
                    <ul class="address">
                        <li class="mb-3" style="list-style: none;">
                            <h5 class="bab">Address</h5>
                        </li>
                        <li style="list-style: none">
                            <p>Jalan Nangka</p>
                        </li>
                        <li style="list-style: none;">
                            <p>Jaksel</p>
                        </li>
                        <li style="list-style: none">
                            <p>Indonesia</p>
                        </li>
                        <li style="list-style: none;">
                            <div class="row" style="width: max-content">
                                <div class="col">
                                    <i class="bi bi-facebook"></i>
                                </div>
                                <div class="col">
                                    <i class="bi bi-twitter"></i>
                                </div>
                                <div class="col">
                                    <i class="bi bi-youtube"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-5 text-white" style="text-align: end">
                    <div class="row">
                        <h5 class="mb-3 bab">Kontak</h5>
                    </div>
                    <div class="row mb-3 d-flex justify-content-end" style="">
                        <button type="btn" class="btn px-4 py-2 text-white bab"
                            style="background-color: #F1592B; width: max-content;">bookita@gmail.com</button>
                    </div>
                    <div class="row">
                        <h5 class="fw-semibold bab">+ 62 878 206 255 14</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white p-3" style="text-align: center">
        <h6 class="fw-light">All Right Reserverd. Copyright © booKita 2024 </h6>
    </div>
    {{-- footer --}}

    {{-- cdn bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

{{-- Perbaikan home --}}
{{-- sesuaikan tebal tipis huruf --}}
{{-- Gambar pada lihat semua udah diubah di fiigma, tapi word belum --}}
{{-- Contact jadi kontak, di word belum --}}
{{-- Daftar buku belum pakai db --}}
{{-- about --}}
