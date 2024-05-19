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
    <link rel="shortcut icon" href="icon-bookita-fix.png" />

    {{-- sweetalert --}}
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css
    " rel="stylesheet">

    {{-- jquery buat sweetalert --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">
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
    @include('layouts.navbar')

    {{-- Table --}}
    <div class="container-xl my-5">
        @isset($data)
            <table class="table">
                <span style="display: inline-flex; gap: 1.5vw; margin-bottom: 2vw;">
                    <h3 class="fs-4 fw-bold pt-1">Koleksi Bukumu</h3>
                    <button type="button" class="btn btn-success py-2 fw-bolder"><a href="/tambah-buku"
                            style="text-decoration: none; color: white">Tambah Koleksi Buku</a></button>
                </span>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" style="margin-bottom: 2vw;" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <thead>
                    <tr>
                        <th class="fs-6 fw-bolder">Cover</th>
                        <th class="fs-6 fw-bolder">Judul Buku</th>
                        {{-- <th class="fs-6 fw-bolder">Nama Pembuat</th> --}}
                        {{-- <th class="fs-6 fw-bolder">Kategori</th> --}}
                        <th class="fs-6 fw-bolder" style="text-align: center;">
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
                                        style="width: 10vh;" alt="">
                                @else
                                    <img src="img/home/cerpen.png" class="img img-fluid" style="width: 3vw;" alt="">
                                @endif
                            </td>
                            <td>
                                <p>
                                    {{ $d->judul }}
                                </p>
                            </td>
                            {{-- <td>{!! $d->nama !!}</td> --}}
                            {{-- <td>{!! $d->kategori !!}</td> --}}
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
                                            <button type="submit" class="border-0 bg-white text-danger delete">
                                                HAPUS
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
                                                    {!! $d->nama !!}</small></p>
                                            <p class="card-text text-white-50">{{ $d->sinopsis }}</p>
                                            <span class="d-flex justify-content-between">
                                                <button type="button" class="btn btn-submit opacity-75 mt-3 text-white"
                                                    data-bs-dismiss="modal"
                                                    style="background-color: #F1592B; width: 45%"><i
                                                        class="bi bi-arrow-left" style=""></i> Kembali
                                                </button>
                                                <a type="button" href="/baca/{{ $d->id }}" class="btn btn-submit opacity-75 mt-3 text-white"
                                                    style="background-color: #F1592B; width: 45%; ">
                                                    Baca<i class="bi bi-arrow-right ms-2" style=""></i>
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

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.delete', function(event) {
                var form = $(this).closest("form");

                event.preventDefault();
                swal({
                    title: "Yakin ingin hapus buku ?",
                    text: "Buku akan dihapus secara permanen",
                    icon: "warning",
                    type: "warning",
                    buttons: ["Kembali", "Hapus"],
                    cancelButtonColor: '#3085d6',
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
        });
    </script>
</body>

</html>
