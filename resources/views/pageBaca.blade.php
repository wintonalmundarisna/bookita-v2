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
        <image class="main-image">
            <img src="bacabuku.png" class="image-baca w-100" alt="">
        </image>

        <h1 class="text-center pt-5">The Butcher And The Wren</h1>



    </section>
    <div class="container-xl p-4">
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

    @include('layouts.footer')

    {{-- cdn bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
