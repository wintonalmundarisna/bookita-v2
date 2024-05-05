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
    <title>{{ $judul }}</title>
    <link rel="shortcut icon" href="{{ $gambar }}" />

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
                font-size: 3.5vw;
            }

            .address {
                font-size: 2.5vw;
            }

            .bab {
                font-size: 2.5vw;
            }

            .detail {
                font-size: 0.5vw;
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

            .bab {
                font-size: 1vw;
            }

            .detail {
                font-size: 1vw;
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
    {{-- banner --}}
    <div class="container-md mt-3">
        <div class="card mb-3 p-3" style="width: 100%; background: linear-gradient(to right top, #273F62, #020600)">
            <div class="row g-0">
                <div class="col-md-4" style="align-self: center;">
                    <div class="gambar-banner-biasa"
                        style="background: url('{{ asset('/img/koleksi/' . $data2->gambar) }}'); height: 240px; width: auto; background-size: cover; background-position: center; background-repeat: no-repeat">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title text-white">{{ $data2->judul }}</h2>
                        <p class="card-text text-white-50"><small>By :
                                {{ $data2->nama }}</small></p>
                        @if ($data2->kategori === 'cerpen')
                            <p class="card-text text-danger">
                                <small><i>{{ $data2->kategori }}</i></small>
                            </p>
                        @endif
                        @if ($data2->kategori === 'novel')
                            <p class="card-text text-success">
                                <small><i>{{ $data2->kategori }}</i></small>
                            </p>
                        @endif
                        @if ($data2->kategori === 'ensiklopedia')
                            <p class="card-text text-primary">
                                <small><i>{{ $data2->kategori }}</i></small>
                            </p>
                        @endif
                        <p class="card-text text-white-50">{{ $data2->sinopsis }}</p>
                        <button type="button" class="btn btn-submit opacity-75 mt-3 w-100 text-white"
                            style="background-color: #F1592B; width: fit-content">Baca
                            Sekarang <i class="bi bi-arrow-right ms-3" style=""></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- banner --}}
    {{-- Semua Kategori --}}
    <div class="container-xl mt-5">
        <div class="row text-start align-center">
            <p class="fs-3 fw-semibold">{{ $judul }}</p>
        </div>
        <div class="row align-content-end">
            <table class="" style="">
                <tr>
                    <th>
                        <div class="card-group gap-3">
                            @foreach ($data->skip(1) as $d)
                                <div class="card mb-5">
                                    <div class="card-header"
                                        style="background: url('{{ asset('/img/koleksi/' . $d->gambar) }}');background-size: cover; background-position: center; background-repeat: no-repeat; height: 250px; width: 100%">
                                    </div>
                                    <div class="card-body h-25 bg-body-secondary">
                                        <h5 class="card-title">{{ $d->judul }}</h5>
                                    </div>
                                    <div class="card-body bg-body-secondary">
                                        <small class="text-body-secondary">By. {{ $d->nama }}</small>
                                        <br>
                                        @if ($d->kategori === 'cerpen')
                                            <p class="card-text text-danger">
                                                <small><i>{{ $d->kategori }}</i></small>
                                            </p>
                                        @endif
                                        @if ($d->kategori === 'novel')
                                            <p class="card-text text-success">
                                                <small><i>{{ $d->kategori }}</i></small>
                                            </p>
                                        @endif
                                        @if ($d->kategori === 'ensiklopedia')
                                            <p class="card-text text-primary">
                                                <small><i>{{ $d->kategori }}</i></small>
                                            </p>
                                        @endif
                                    </div>
                                    <div class="card-body bg-body-secondary">
                                        <button type="button" class="btn btn-primary w-100 border-0 rounded-0 mt-2"
                                            style="background-color: #F1592B;" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $d->id }}">
                                            Lihat Detail
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </th>
                </tr>
            </table>
        </div>
    </div>
    {{-- Semua Kategori --}}
    {{-- modal --}}
    @foreach ($data as $d)
        <div class="modal fade" id="exampleModal{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                            style="background: url('{{ asset('/img/koleksi/' . $d->gambar) }}'); height: 240px; width: auto; background-size: cover; background-position: center; background-repeat: no-repeat">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h2 class="card-title text-white">{{ $d->judul }}</h2>
                                            <p class="card-text text-white-50"><small>By :
                                                    {{ $d->nama }}</small></p>
                                            @if ($d->kategori === 'cerpen')
                                                <p class="card-text text-danger">
                                                    <small><i>{{ $d->kategori }}</i></small>
                                                </p>
                                            @endif
                                            @if ($d->kategori === 'novel')
                                                <p class="card-text text-success">
                                                    <small><i>{{ $d->kategori }}</i></small>
                                                </p>
                                            @endif
                                            @if ($d->kategori === 'ensiklopedia')
                                                <p class="card-text text-primary">
                                                    <small><i>{{ $d->kategori }}</i></small>
                                                </p>
                                            @endif
                                            <p class="card-text text-white-50">{{ $d->sinopsis }}</p>
                                            <button type="button"
                                                class="btn btn-submit opacity-75 mt-3 w-100 text-white"
                                                style="background-color: #F1592B; width: fit-content">Baca
                                                Sekarang <i class="bi bi-arrow-right ms-3" style=""></i>
                                            </button>
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
</body>

</html>

{{-- Perbaikan kategori --}}
{{-- sesuaikan tebal tipis huruf --}}
{{-- Belum pakai data pada banner --}}

{{-- about --}}
