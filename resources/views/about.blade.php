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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">


    {{-- Vite buat hot reload --}}
    @vite([])
    <title>booKita | {{ $active }}</title>
    <link rel="shortcut icon" href="icon-bookita-fix.png" />

    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
        }

        .bab {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        .banner-text {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
            ;
        }

        .card-tittle {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
        }

        /* .bawah {
            align-content: center
        } */

        .deskripsi {
            text-align: justify;
        }

        .card-shadow {
            border: 1px solid black;
            box-shadow: 10px 10px 5px 0px gray;
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

            .img-about {
                width: 25vw;
            }

            .banner-img {
                visibility: hidden;
            }

            .atas {
                grid-area: atas;
                margin-top: 350px;
            }

            .bawah {
                grid-area: bawah;
                margin-top: 50px;
            }

            .wadah {
                display: grid;
                /* grid-template-rows:
                "
                atas
                bawah
                " */
                grid-template-areas:
                    "
 bawah atas "

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

            .img-about {
                width: 15vw;

            }

            .card {
                width: auto;
                font-size: clamp(1rem, 2.5vw, 1rem);
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

    <div class="container">
        <div class="row wadah">
            <div class="col atas" style="text-align: justify">
                <p class="banner-text text-bold m-0 px-3 py-2"><span class="fs-1">Kami kelompok dua sebagai
                        pengembang web</span><span class="text-secondary fs-1 font-family-Montserrat"> </span><span
                        class=" fs-1" style="color: #F1592B">boo</span><span class=" fs-1 font-family-Montserrat"
                        style="color: #00453E">K</span><span class=" fs-1 font-family-Montserrat"
                        style="color: #F1592B">ita</span><span class="text-secondary fs-1 font-family-Montserrat">
                    </span><span class="text-black fs-1 font-family-Montserrat">untuk tugas matakuliah web lanjut</span>
                </p>
                <p class="text-dark fs-6 fw-normal font-family-Montserrat  m-0 px-3 py-2">BooKita adalah website
                    tentang
                    buku. BooKita berisi fitur tentang baca buku, buat buku pribadi, kelola buku pribadi dan kelola buku
                    koleksi milik orang lain yang akan dibaca.</p>
                <p class="text-dark fs-6 fw-normal font-family-Montserrat  m-0 px-3 py-2">BooKita dibuat
                    menggunakan
                    teknologi HTML, CSS, BOOTSTRAP, PHP, JS, AJAX, LARAVEL, MySQL dan Figma sebagai media desainnya.</p>
            </div>
            <div class="col text-center bawah">
                <img src="bookita.PNG" alt="" class="img img-fluid w-75">
            </div>
        </div>

        <h2 class="text-center text-black fs-2 fw-bold font-family-Montserrat  mt-5 px-3 pb-5">Tim Kami</h2>

        <div class="card-prof card mb-5 border-0" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="deen.png" class="img-about img-fluid " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title text-bold fw-bold">UI & Front-End Web Developer</h4>
                        <p class="card-text"><small class="text-body-secondary">Alfian Muhadiin Fatahillah</small></p>
                        <p class="card-text deskripsi">Saya adalah front-end enginer dan UI designer pemula, saya
                            menggunakan
                            react.js & next.js sebagai framework pembuatan web. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-row-reverse">
            <div class="card mb-3 border-0" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="winton.jpeg" class="img-about rounded-circle img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">UI/UX & Full-Stack Web Developer</h4>
                            <p class="card-text"><small class="text-body-secondary">Winton Almundarisna</small></p>
                            <p class="card-text deskripsi">Saya adalah seorang php web developer yang fokus menggunakan
                                LARAVEL
                                dan MySQL sejak tahun 2021 hingga sekarang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-5 border-0" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="deni.png" class="img-about img-fluid " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Front-End Web Developer</h4>
                        <p class="card-text"><small class="text-body-secondary">Deni Ardiansyah</small></p>
                        <p class="card-text deskripsi"> Saya belajar front-end semenjak masuk kuliah dan masih belajar
                            hingga
                            sekarang.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-row-reverse">
            <div class="card mb-5 border-0" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="dion.jpeg" class="img-about img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title text-bold fw-bold">UI & Support</h4>
                            <p class="card-text"><small class="text-body-secondary">Muhammad Nurdiono</small></p>
                            <p class="card-text deskripsi">Saya adalah mahasiswa UNINDRA PGRI semester enam yang sedang
                                belajar
                                JAVA dan MySQL</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-5 border-0" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="rizal.jpeg" class="img-about img-fluid rounded-circle " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Sistem Analis</h4>
                        <p class="card-text"><small class="text-body-secondary">Muhammad Rizal Mulyawan</small></p>
                        <p class="card-text deskripsi"> Saya belajar front-end semenjak masuk kuliah dan masih belajar
                            hingga sekarang, dan Saya seorang gamers yang suka flutter.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-row-reverse">
            <div class="card mb-3 border-0" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 rounded-circle">
                        <img src="andri.jpeg" class="img-about rounded-circle img-fluid " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title fw-bold">Staf Marketing</h4>
                            <p class="card-text"><small class="text-body-secondary">Andri Saefulloh </small></p>
                            <p class="card-text deskripsi">saya adalah seorang guru eskul yang belajar Mysql dan java
                                dari awal masuk kuliah sampai sekarang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-5 border-0" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="ahya.png" class="img-about img-fluid rounded-circle " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Staf Administrasi</h4>
                        <p class="card-text"><small class="text-body-secondary">Muhammad Ahya Adityo</small></p>
                        <p class="card-text deskripsi"> Saya adalah seorang guru les matematika yang menyukai
                            perhitungan bukan kodingan</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="fw-bolder text-center mt-5 mb-4">Kritik dan Saran</h2>

        {{-- kritik dan saran --}}
        <div class="card card-shadow border-black border-2" style="background-color: #F1592B">
            <div class="row g-0">
                <div class="col-md-4 my-auto">
                    <img src="{{ asset('kritik.png') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8 text-white">
                    <form action="/kritik-saran" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3 row">
                                <h5 class="card-title text-center mt-3 mb-5">Ayo masukkan kritik dan saran kamu, agar
                                    booKita bisa
                                    menjadi semakin lebih baik lagi</h5>
                            </div>
                            <div class="mb-3 row">
                                <label for="kritik" class="col-sm-2 col-form-label">Kritik</label>
                                <div class="col-sm-10">
                                    <textarea name="kritik" autofocus id="kritik" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="saran" class="col-sm-2 col-form-label">Saran</label>
                                <div class="col-sm-10">
                                    <textarea name="saran" id="saran" cols="20" rows="3" class="form-control"></textarea>
                                    <button class="btn kirim btn-light w-100 mb-3 mt-5" type="submit">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- kritik dan saran --}}

    </div>

    @include('layouts.footer')

    {{-- cdn bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- cdn sweetalert2 --}}
    <script language="JavaScript" type="text/javascript" src="{{ asset('js/jquery3.7.1.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- cdn sweetalert2 --}}


    <script>
        @if (Session::has('kritik'))
            Swal.fire({
                imageUrl: "{{ asset('img/home/thank.png') }}",
                imageWidth: 500,
                imageHeight: 500,
                imageAlt: "Welcome image",
                timer: 2000,
                showConfirmButton: false
            });
        @endif

        $(document).ready(function() {
            $(document).on('click', '.kirim', function(event) {
                var form = $(this).closest("form");

                event.preventDefault();
                Swal.fire({
                    title: "Sudah yakin?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
</body>

</html>
