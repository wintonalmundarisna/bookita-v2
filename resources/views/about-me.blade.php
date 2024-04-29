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
        * {
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

        .image-baca {
            width: 100%;
            max-width: 70%;
            height: auto;
        }
    </style>
</head>

<body>

    @include('layouts.navbar')

    <div class="container">
        <div class="row">
            <div class="col">
                <p class=" m-0 px-3 py-2"><span class="text-black fs-1 font-family-Montserrat">Kami kelompok dua sebagai
                        pengembang web</span><span class="text-secondary fs-1 font-family-Montserrat"> </span><span
                        class="text-orange fs-1">boo</span><span
                        class="text-dark fs-1 font-family-Montserrat">K</span><span
                        class="text-orange fs-1 font-family-Montserrat">ita</span><span
                        class="text-secondary fs-1 font-family-Montserrat"> </span><span
                        class="text-black fs-1 font-family-Montserrat">untuk tugas matakuliah web lanjut</span></p>
                <p class="text-dark fs-6 fw-normal font-family-Montserrat  m-0 px-3 py-2">BooKita adalah website tentang
                    buku. BooKita berisi fitur tentang baca buku, buat buku pribadi, kelola buku pribadi dan kelola buku
                    koleksi milik orang lain yang akan dibaca.</p>
                <p class="text-dark fs-6 fw-normal font-family-Montserrat  m-0 px-3 py-2">BooKita dibuat menggunakan
                    teknologi HTML, CSS, BOOTSTRAP, PHP, JS, AJAX, LARAVEL, MySQL dan Figma sebagai media desainnya.</p>
            </div>
            <div class="col text-center">
                <img src="bookita.PNG" alt="" class="w-75">
            </div>
        </div>

        <h2 class="text-center text-black fs-2 fw-bold font-family-Montserrat  mt-5 px-3 py-2">Tim Kami</h2>

        <div class="card mb-3 border-light" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="ma'piyaan.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">UI Design & Front-End</h5>
                        <p class="card-text"><small class="text-body-secondary">Alfian Muhadiin Fatahillah</small></p>
                        <p class="card-text">Saya adalah front-end enginer dan UI designer pemula, saya menggunakan
                            react.js & next.js sebagai framework pembuatan web. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-row-reverse">
            <div class="card mb-3 border-light" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="dion.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">UI & Support</h5>
                            <p class="card-text"><small class="text-body-secondary">Muhammad Nurdiono</small></p>
                            <p class="card-text">Saya adalah mahasiswa UNINDRA PGRI semester enam yang sedang belajar
                                JAVA dan MySQL</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-3 border-light" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="deni.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Front-End</h5>
                        <p class="card-text"><small class="text-body-secondary">Deni Ardiansyah</small></p>
                        <p class="card-text"> Saya belajar front-end semenjak masuk kuliah dan masih belajar hingga
                            sekarang.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-row-reverse">
            <div class="card mb-3 border-light" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="winton.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Full Stack & UI/UX design</h5>
                            <p class="card-text"><small class="text-body-secondary">Winton Almundarisna</small></p>
                            <p class="card-text">Saya adalah seorang php web developer yang fokus menggunakan LARAVEL
                                dan MySQL sejak tahun 2021 hingga sekarang.</p>
                        </div>
                    </div>
                </div>
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
