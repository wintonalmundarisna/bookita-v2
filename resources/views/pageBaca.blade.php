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

        .image-baca {
            width: 100%;
            max-width: 70%;
            height: auto;
        }

        .fillContent {
            font-size: 2 vw;
            padding: 50px 100px 50px 100px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white py-4">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="bookita.PNG" alt="" class="navbar-image"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
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
                <div class="logout">Logout</div>
            </div>
        </div>
    </nav>

    <section class="main-content text-center">
        <image class="main-image">
            <img src="bacabuku.png" class="image-baca rounded" alt="">
        </image>

        <h1 class="text-center pt-5">The Butcher And The Wren</h1>



    </section>
    <div class="fillContent">
        <p class="first">
            Kegelapan yang pekat semakin mendekat. Mengisahkan tentang kehidupan seorang pemburu hantu legendaris yang
            menangkap dan memusnahkan para hantu setiap ada kesempatan. Kegelapan yang pekat semakin mendekat.
            Mengisahkan tentang kehidupan seorang pemburu hantu legendaris yang menangkap dan memusnahkan para hantu
            setiap ada kesempatan. Kegelapan yang pekat semakin mendekat. Mengisahkan tentang kehidupan seorang pemburu
            hantu legendaris yang menangkap dan memusnahkan para hantu setiap ada kesempatan
        </p>
        <p class="second">
            Kegelapan yang pekat semakin mendekat. Mengisahkan tentang kehidupan seorang pemburu hantu legendaris yang
            menangkap dan memusnahkan para hantu setiap ada kesempatan.
        </p>
        <p class="third">
            Kegelapan yang pekat semakin mendekat. Mengisahkan tentang kehidupan seorang pemburu hantu legendaris yang
            menangkap dan memusnahkan para hantu setiap ada kesempatan.
        </p>
        <p class="fourth">
            Kegelapan yang pekat semakin mendekat. Mengisahkan tentang kehidupan seorang pemburu hantu legendaris yang
            menangkap dan memusnahkan para hantu setiap ada kesempatan.
        </p>
        <p class="fifth">
            Kegelapan yang pekat semakin mendekat. Mengisahkan tentang kehidupan seorang pemburu hantu legendaris yang
            menangkap dan memusnahkan para hantu setiap ada kesempatan. Kegelapan yang pekat semakin mendekat.
            Mengisahkan tentang kehidupan seorang.
        </p>
    </div>

    <div class="position-relative bg-dark  row">

        <div class="text-footer">
            <p>jadikan memabaca menyenangkan bersama bookita</p>
        </div>
        <div class="contact">



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

            {{-- cdn bootstrap --}}
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
</body>

</html>
