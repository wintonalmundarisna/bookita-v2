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

    {{-- cdn bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
