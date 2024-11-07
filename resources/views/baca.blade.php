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
    <title>Halaman Baca</title>
    <link rel="shortcut icon" href="{{ $gambar }}" />
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        @media (max-width: 576px) {
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
                font-size: 3.5vw;
            }

            .address {
                font-size: 2.5vw;
            }

            .bab {
                font-size: 2.5vw;
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
                width: 50px;
            }

            .jadikan {
                font-size: 3.5vw;
            }

            .address {
                font-size: 2.5vw;
            }

            .bab {
                font-size: 2.5vw;
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

            .bab {
                font-size: 1vw;
            }
        }

        /* .image-baca {
            width: 100%;
            max-width: 70%;
            height: auto;
        } */

        .fillContent {
            font-size: 2 vw;
            padding: 50px 100px 50px 100px;
        }
    </style>
</head>

<body>
    @include('layouts.navbar')

    <section class="main-content text-center">
        <image class="main-image"
            style="background: url('{{ asset('/img/koleksi/' . $data->gambar) }}'); width: 100%; height: 500px; background-size: cover; background-repeat: no-repeat; background-position: center;">
        </image>

        <h1 class="text-center pt-5"
            style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
            {{ $data->judul }}</h1>
    </section>

    <div class="container-xl p-4">
        <p class="first"
            style="text-align: justify; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
            {!! $data2 !!}
        </p>
        <div class="span w-100 text-center mt-5">
            @if($terbeli === false)
                <button href="" class="btn text-white" data-bs-toggle="modal"
                    data-bs-target="#exampleModal{{ $data->id }}"
                    style="background-color: #F1592B; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Silakan
                    beli untuk
                    membaca versi fullnya</button>
            @endif
        </div>
    </div>


    <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                                        style="background: url('{{ asset('/img/koleksi/' . $data->gambar) }}'); height: 240px; width: auto; background-size: cover; background-position: center; background-repeat: no-repeat">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <span class="d-flex justify-content-between">
                                            <h2 class="card-title text-white">{{ $data->judul }}</h2>
                                            @if ($data->kategori === 'cerpen')
                                                <button class="btn btn-sm btn-outline-danger" @readonly(true)>
                                                    {{ $data->kategori }}
                                                </button>
                                            @endif
                                            @if ($data->kategori === 'novel')
                                                <button class="btn btn-sm btn-outline-success">
                                                    {{ $data->kategori }}
                                                </button>
                                            @endif
                                            @if ($data->kategori === 'ensiklopedia')
                                                <button class="btn btn-sm btn-outline-primary">
                                                    {{ $data->kategori }}
                                                </button>
                                            @endif

                                        </span>

                                        <p class="card-text text-white-50 align-center"><i><small>By :
                                                    {{ $data->nama }} | <a href="https://wa.link/5xr6gf"
                                                        class="text-decoration-none text-white-50"><i
                                                            class="bi bi-whatsapp"></i></a> |
                                                    <a href="mailto:bookita.resmi@gmail.com"
                                                        class="text-decorationn-none text-white-50"> <i
                                                            class="bi bi-envelope"></i></a></small></i></p>
                                        <p class="card-text text-white-50">Rp. {{ number_format($data->harga) }}</p>
                                        <p class="card-text text-white-50">{{ $data->sinopsis }}</p>
                                        <span class="d-flex justify-content-between">
                                            <button type="submit" class="btn opacity-75 mt-3 text-white"
                                                data-bs-dismiss="modal" style="background-color: #F1592B; width: 45%"><i
                                                    class="bi bi-caret-left"></i> Kembali
                                            </button>
                                            <a href="/transaksi/{{ $data->id }}"
                                                class="btn btn-submit opacity-75 mt-3 text-white"
                                                style="background-color: #F1592B; width: 45%;" type="submit">
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

    @include('layouts.footer')

    {{-- cdn bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
