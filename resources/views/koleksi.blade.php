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
    <title>Koleksi</title>

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
    {{-- Table --}}
    <div class="container-xl my-5">
        @isset($data)
            <table class="table">
                <span style="display: inline-flex; gap: 1.5vw; margin-bottom: 2vw;">
                    <h3 class="fs-4 fw-bold pt-1">Koleksi Bukumu</h3>
                    <button type="button" class="btn btn-success py-2 fw-bolder"><a href="/tambah-buku"
                            style="text-decoration: none; color: white;">Tambah Koleksi Buku</a></button>
                </span>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" style="margin-bottom: 2vw;" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <thead>
                    <tr>
                        <th class="fs-5 fw-bolder">Cover</th>
                        <th class="fs-5 fw-bolder">Judul Buku</th>
                        {{-- <th class="fs-5 fw-bolder">Nama Pembuat</th> --}}
                        <th class="fs-5 fw-bolder">Kategori</th>
                        <th class="fs-5 fw-bolder" style="text-align: center;">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- loop --}}
                    @foreach ($data as $d)
                        <tr class="fw-lighter align-middle">
                            <td>
                                @if ($d->gambar)
                                    <img src="{{ asset('/img/koleksi/' . $d->gambar) }}" class="img img-fluid"
                                        style="width: 3vw;" alt="">
                                @else
                                    <img src="img/home/cerpen.png" class="img img-fluid" style="width: 3vw;" alt="">
                                @endif
                            </td>
                            <td>{!! $d->judul !!}</td>
                            {{-- <td>{!! $d->nama !!}</td> --}}
                            <td>{!! $d->kategori !!}</td>
                            <td>
                                <div class="row" style="text-align: center">
                                    <div class="col">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal{{ $d->id }}"
                                            href="" style="text-decoration: none">DETAIL</a>
                                    </div>
                                    <div class="col">
                                        <form action="/koleksi/edit/{{ $d->id }}">
                                            @csrf
                                            <button type="submit" class="border-0 bg-white text-success">
                                                EDIT
                                            </button>

                                        </form>
                                    </div>
                                    <div class="col">
                                        <form action="/koleksi/{{ $d->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="border-0 bg-white text-danger">
                                                <a
                                                    onclick="return confirm('Yakin ingin menghapus {{ $d->judul }} ?')">HAPUS</a>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    {{-- loop --}}
                </tbody>
            </table>
        @endisset
    </div>
    {{-- Table --}}
    {{-- modal --}}
    @foreach ($data as $d)
        <div class="modal fade" id="exampleModal{{ $d->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel{{ $d->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="linear-gradient(to right top, #DB2D31, #8C0003)">
                    {{-- banner --}}
                    <div class="row align-center">
                        <div class="col">
                            <div class="card p-3"
                                style="width: 100%; background: linear-gradient(to right top, #273F62, #020600)">
                                <div class="row g-0">
                                    <div class="col modal-col-banner ps-2" style="">
                                        <img src="img/koleksi/{{ $d->gambar }}"
                                            class="img-fluid modal-gambar-banner" alt="...">
                                    </div>
                                    <div class="col modal-wadah-banner">
                                        <div class="card-body">
                                            <h1 class="card-title text-white w-auto modal-judul-banner">
                                                {{ $d->judul }}
                                                </h5>
                                                <h6 class="text-white-50 modal-nama-pembuat">By : {{ $d->nama }}
                                                </h6>
                                                <p class="text-white-50 modal-isi-banner">{{ $d->isi }}</p>
                                                <div class="row modal-row" style="justify-content: space-between">
                                                    <button type="button"
                                                        class="btn btn-submit px-5 opacity-75 mt-3 text-white modal-tombol-banner"
                                                        data-bs-dismiss="modal" style="background-color: #F1592B;"><i
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
    @endforeach

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

{{-- Perbaikan kategori --}}
{{-- sesuaikan tebal tipis huruf --}}
{{-- Belum pakai data pada banner --}}

{{-- koleksi --}}
{{-- ditambahkan cover pada th --}}
