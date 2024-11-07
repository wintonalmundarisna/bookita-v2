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

        .card {
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
    @isset($data2)
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
                            <span class="d-flex justify-content-between">
                                <h2 class="card-title text-white">{{ $data2->judul }}</h2>
                                @if ($data2->kategori === 'cerpen')
                                    <button class="btn btn-sm btn-outline-danger" @readonly(true)>
                                        {{ $data2->kategori }}
                                    </button>
                                @endif
                                @if ($data2->kategori === 'novel')
                                    <button class="btn btn-sm btn-outline-success">
                                        {{ $data2->kategori }}
                                    </button>
                                @endif
                                @if ($data2->kategori === 'ensiklopedia')
                                    <button class="btn btn-sm btn-outline-primary">
                                        {{ $data2->kategori }}
                                    </button>
                                @endif

                            </span>

                            <p class="card-text text-white-50 align-center"><i><small>By :
                                {{ $data2->nama }} | <a href="https://wa.link/5xr6gf"
                                    class="text-decoration-none text-white-50"><i
                                        class="bi bi-whatsapp"></i></a> |
                                <a href="mailto:bookita.resmi@gmail.com"
                                    class="text-decorationn-none text-white-50"> <i
                                        class="bi bi-envelope"></i></a></small></i></p>
                            
                                

                                        <p class="card-text text-white-50">Rp. {{ number_format($data2->harga) }}</p>
                                        <p class="card-text text-white-50">{{ $data2->sinopsis }}</p>
                                        <span class="d-flex justify-content-between">
                                            <a type="submit" href="/baca/{{ $data2->id }}"
                                                class="btn btn-submit opacity-75 mt-3 text-white"
                                                style="background-color: #F1592B; width: 45%"><i
                                                    class="bi bi-book me-1"></i> Baca
                                            </a>
                                            <a href="/transaksi/{{ $data2->id }}"
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
    @endisset
    {{-- banner --}}
    {{-- Semua Kategori --}}
    @isset($data)
        <div class="container-xl mt-5">
            <div class="row text-start align-center">
                <p class="fs-3 fw-semibold">{{ $judul }}</p>
            </div>
            <div class="row p-0">
                @foreach ($data->skip(1) as $d)
                    <div class="col p-0 d-flex justify-content-center g-5 align-content-center">
                        <div class="card p-0" style="width: 12rem">
                            <div class="card-header"
                                style="background: url('{{ asset('img/koleksi/' . $d->gambar) }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 200px; width: 100%">
                            </div>
                            <div class="card-body" style="height: 130px">
                                <h5 class="card-title">{{ $d->judul }}</h5>
                                <small><i class="bi bi-star-fill"></i> 4+</small>
                            </div>
                            <div class="card-footer bg-white d-flex justify-content-between border-0 align-content-center">
                                <p class="card-text h-100 my-auto"><small class="text-body-secondary">Rp.
                                        {{ number_format($d->harga) }}</small></p>
                                <button class="btn btn-sm text-white" style="background-color: #F1592B;"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal{{ $d->id }}"><i
                                        class="bi bi-eye"></i> <small>DETAIL</small></button>
                            </div>
                        </div>
                    </div>
                    {{-- </div> --}}
                @endforeach
                {{-- </th>
                </tr>
            </table> --}}
            </div>
        </div>
    @endisset
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
</body>

</html>

{{-- Perbaikan kategori --}}
{{-- sesuaikan tebal tipis huruf --}}
{{-- Belum pakai data pada banner --}}

{{-- about --}}
