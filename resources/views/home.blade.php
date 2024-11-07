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
    <title>bookita | Tambah Wawasan-mu Disini</title>
    @vite([])
    <link rel="shortcut icon" href="icon-bookita-fix.png" />

    <style>
        html {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        .carousel {
            border: 1px solid black;
            box-shadow: 0px 2px 1px 0px gray;
        }

        .card-shadow {
            border: 1px solid black;
            box-shadow: 10px 10px 5px 0px gray;
        }

        .pink {
            border: 1px solid black;
            box-shadow: 10px 10px 5px 0px gray;
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

    @include('layouts.navbar')

    {{-- Carousel --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2500">
                <img src="img/home/HERO-FULL.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2500">
                <img src="img/home/carouselDua.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2500">
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
                <div class="card card-shadow mb-3 p-3 "
                    style="width: 100%; background: linear-gradient(to right top, #DB2D31, #8C0003)">
                    <div class="row g-0">
                        <div class="col align-content-center">
                            <div class="card-body">
                                <img src="img/home/five-star.png" class="img-fluid w-75" alt="">
                                <h4 class="card-title text-white w-100">CERPEN</h4>

                                <a type="button" href="/kategori/cerpen" class="btn btn-submit opacity-75 mt-3"
                                    style="color: #FFFFFF; background-color: #111111; width: min-content">Jelajahi</a>
                            </div>
                        </div>
                        <div class="col text-center" style="align-content: center">
                            <img src="img/home/cerpen.png" class="img-fluid w-75" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card card-shadow mb-3 p-3 "
                    style="width: 100%; background: linear-gradient(to right top, #74AD52, #2D6F06)">
                    <div class="row g-0">
                        <div class="col align-content-center">
                            <div class="card-body">
                                <img src="img/home/four-star.png" class="img-fluid w-75" alt="">
                                <h4 class="card-title text-white w-100">NOVEL</h4>

                                <a type="button" href="/kategori/novel" class="btn btn-submit opacity-75 mt-3"
                                    style="color: #FFFFFF; background-color: #111111; width: min-content">Jelajahi</a>
                            </div>
                        </div>
                        <div class="col text-center" style="align-content: center">
                            <img src="img/home/novel.png" class="img-fluid w-75" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl">
                <div class="card card-shadow mb-3 p-3 "
                    style="width: 100%; background: linear-gradient(to right top, #153E76, #001B41)">
                    <div class="row g-0">
                        <div class="col align-content-center">
                            <div class="card-body">
                                <img src="img/home/four-star.png" class="img-fluid w-75" alt="">
                                <h5 class="card-title text-white w-auto">ENSIKLOPEDIA</h5>

                                <a type="button" href="/kategori/ensiklopedia"
                                    class="btn btn-submit opacity-75 mt-3"
                                    style="color: #FFFFFF; background-color: #111111; width: min-content">Jelajahi</a>
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
                    <a href="/kategori/semua/{{ 'semua' }}" type="button"
                        class="btn btn-dark rounded-0 px-3 mt-4 lihat-sekarang">Lihat Sekarang <i
                            class="bi bi-arrow-right ms-3" style=""></i></a>
                </div>
                <div class="col-7" style="align-content: center; text-align: center">
                    <img class="img-fluid" style="min-width: 20vh; max-width: 30vw" src="img/home/lihat-semua.png"
                        alt="">
                </div>
            </div>
        </div>
        {{-- Baca semua --}}

        {{-- buku terlaris --}}
        {{-- @isset($data) --}}
        <div class="row text-start align-center mt-5">
            <p class="fs-3 fw-semibold">{{ $judul2 }}</p>
        </div>
        <div class="container-xl rounded card-shadow mt-2">
            <div class="row" style="overflow: hidden;">
                <div class="col-xl p-0 border-0">
                    @foreach ($terlaris1 as $t1)
                        <div class="card border-0 text-bg-dark rounded-0">
                            <img src="{{ asset('img/koleksi/' . $t1->gambar) }}" class="rounded-start"
                                alt="...">
                            <div class="card-img-overlay rounded-start">
                                <span class="d-flex justify-content-between">
                                    <h5 class="card-title">{{ $t1->judul }}</h5>
                                    @if ($t1->kategori === 'cerpen')
                                        <button class="btn btn-sm btn-outline-danger" @readonly(true)>
                                            {{ $t1->kategori }}
                                        </button>
                                    @endif
                                    @if ($t1->kategori === 'novel')
                                        <button class="btn btn-sm btn-outline-success">
                                            {{ $t1->kategori }}
                                        </button>
                                    @endif
                                    @if ($t1->kategori === 'ensiklopedia')
                                        <button class="btn btn-sm btn-outline-primary">
                                            {{ $t1->kategori }}
                                        </button>
                                    @endif
                                </span>
                                <p class="card-text">{{ $t1->sinopsis }}</p>
                                <p class="card-text fw-lighter"><small>Telah diunduh sebanyak
                                        {{ $t1->diunduh }}x</small></p>
                                <small>
                                    <button type="button" class="btn btn-sm text-white" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $t1->id }}"
                                        style="background-color: #F1592B;">Lihat selengkapnya</button>
                                </small>
                            </div>
                            <div class="card-footer bg-transparent" style="margin-top: -50px; padding-bottom: 17.5px">
                                <p class="card-text">
                                    <small><i>{{ $t1->nama }}</i></small>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-xl">
                    <div class="row h-50">
                        @foreach ($terlaris2 as $t2)
                            <div class="card border-black rounded-0 p-0 text-end" style="max-width: 100%">
                                <div class="row g-0 h-100">
                                    <div class="col-5"
                                        style="background: url('{{ asset('img/koleksi/' . $t2->gambar) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                    </div>
                                    <div class="col-7">
                                        <div class="card-body h-100 text-light-subtle" style="background-color: #ddd">
                                            <h5 class="card-title">{{ $t2->judul }}</h5>
                                            <p class="card-text">{{ $t2->sinopsis }}</p>
                                            <p class="card-text fw-lighter"><small>Telah diunduh sebanyak
                                                    {{ $t2->diunduh }}x</small></p>
                                            <small>
                                                <button type="button" class="btn btn-sm text-white" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $t2->id }}"
                                                    style="background-color: #F1592B;">Lihat selengkapnya</button>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row h-50">
                        @foreach ($terlaris3 as $t3)
                            <div class="card p-0 border-black rounded-0" style="max-width: 100%">
                                <div class="row g-0 h-100">
                                    <div class="col-7">
                                        <div class="card-body h-100 text-light-subtle" style="background-color: #ddd">
                                            <h5 class="card-title">{{ $t3->judul }}</h5>
                                            <p class="card-text">{{ $t3->sinopsis }}</p>
                                            <p class="card-text fw-lighter"><small>Telah diunduh sebanyak
                                                    {{ $t3->diunduh }}x</small></p>
                                            <small>
                                                <button type="button" class="btn btn-sm text-white" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $t3->id }}"
                                                    style="background-color: #F1592B;">Lihat selengkapnya</button>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-5"
                                        style="background: url('{{ asset('img/koleksi/' . $t3->gambar) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- @endisset --}}
        {{-- buku terlaris --}}

        {{-- buku terbaru --}}
        @isset($data)
            <div class="row text-start align-center mt-5">
                <p class="fs-3 fw-semibold">{{ $judul }}</p>
            </div>
            <div class="container-xl p-0 mt-2">
                <div class="row p-0">
                    @foreach ($data as $d)
                        <div class="col d-flex justify-content-center">
                            <div class="card mb-3 card-shadow p-0" style="width: 12rem">
                                <div class="card-header"
                                    style="background: url('{{ asset('img/koleksi/' . $d->gambar) }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 200px; width: 100%">
                                </div>
                                <div class="card-body" style="height: 130px">
                                    <h5 class="card-title">{{ $d->judul }}</h5>
                                    <small><i class="bi bi-file-arrow-down-fill"></i> {{ $d->diunduh }}</small>
                                </div>
                                <div
                                    class="card-footer bg-white d-flex justify-content-between border-0 align-content-center">
                                    <p class="card-text h-100 my-auto"><small class="text-body-secondary">Rp.
                                            {{ number_format($d->harga) }}</small></p>
                                    <button class="btn btn-sm text-white" style="background-color: #F1592B;"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal{{ $d->id }}"><i
                                            class="bi bi-eye"></i> <small>DETAIL</small></button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endisset
    </div>
    {{-- buku terbaru --}}
    {{-- modal --}}
    @foreach ($data2 as $d)
        <div class="modal fade" id="exampleModal{{ $d->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="linear-gradient(to right top, #DB2D31, #8C0003)">
                    {{-- banner --}}
                    <div class="row align-center">
                        <div class="col">
                            <div class="card mb-3 p-3"
                                style="width: 100%; height: 100%; background: linear-gradient(to right top, #273F62, #020600)">
                                <div class="row g-0">
                                    <div class="col-md-4" style="align-self: center;">
                                        <div class="gambar-banner-biasa"
                                            style="background: url('{{ asset('/img/koleksi/' . $d->gambar) }}'); height: 240px; width: auto; background-size: cover; background-position: center; background-repeat: no-repeat">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <span class="d-flex justify-content-between">
                                                <h2 class="card-title text-white">{{ $d->judul }}</h2>
                                                @if ($d->kategori === 'cerpen')
                                                    <button class="btn btn-sm btn-outline-danger" @readonly(true)>
                                                        {{ $d->kategori }}
                                                    </button>
                                                @endif
                                                @if ($d->kategori === 'novel')
                                                    <button class="btn btn-sm btn-outline-success">
                                                        {{ $d->kategori }}
                                                    </button>
                                                @endif
                                                @if ($d->kategori === 'ensiklopedia')
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        {{ $d->kategori }}
                                                    </button>
                                                @endif

                                            </span>

                                            <p class="card-text text-white-50 align-center"><i><small>By :
                                                        {{ $d->nama }} | <a href="https://wa.link/5xr6gf"
                                                            class="text-decoration-none text-white-50"><i
                                                                class="bi bi-whatsapp"></i></a> |
                                                        <a href="mailto:bookita.resmi@gmail.com"
                                                            class="text-decorationn-none text-white-50"> <i
                                                                class="bi bi-envelope"></i></a></small></i></p>
                                            <p class="card-text text-white-50">Rp. {{ number_format($d->harga) }}</p>
                                            <p class="card-text text-white-50">{{ $d->sinopsis }}</p>
                                            <span class="d-flex justify-content-between">
                                                <a type="submit" href="/baca/{{ $d->id }}"
                                                    class="btn btn-submit opacity-75 mt-3 text-white"
                                                    style="background-color: #F1592B; width: 45%"><i
                                                        class="bi bi-book me-1"></i> Baca
                                                </a>
                                                <a href="/transaksi/{{ $d->id }}"
                                                    class="btn btn-submit opacity-75 mt-3 text-white"
                                                    style="background-color: #F1592B; width: 45%;">
                                                    Beli<i class="bi bi-bag-plus ms-2"></i>
                                                </a>
                                            </span>
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
    @endforeach
    {{-- modal --}}
    {{-- footer --}}
    @include('layouts.footer')
    {{-- footer --}}

    {{-- cdn bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- cdn sweetalert2 --}}
    <script language="JavaScript" type="text/javascript" src="{{ asset('js/jquery3.7.1.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- cdn sweetalert2 --}}

    <script>
        @if (Session::has('success'))
            Swal.fire({
                title: "Selamat datang!",
                text: "{{ Auth::user()->name }}",
                imageUrl: "{{ asset('img/home/welcome.png') }}",
                imageWidth: 400,
                imageHeight: 300,
                imageAlt: "Welcome image",
                timer: 2000,
                showConfirmButton: false
            });
        @endif

        @if (Session::has('dibeli'))
            Swal.fire({
                title: "{{ session('dibeli') }}",
                icon: "success",
                text: "selamat membaca",
                timer: 4000,
                showConfirmButton: false
            });
        @endif
    </script>
</body>

</html>
