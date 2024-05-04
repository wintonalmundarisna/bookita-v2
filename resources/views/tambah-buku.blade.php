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

    {{-- link trix --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    {{-- link trix --}}

    {{-- css --}}
    <link rel="stylesheet" href="/css/style.css" />

    <title>Form Tambah Buku</title>

    <style>
        html {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
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
                margin-left: 10px;
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
    <nav class="navbar navbar-expand-lg py-4">
        <div class="container-md">
            <a class="navbar-brand" href="#">
                <p class="h2 fw-bold mb-0" style="color: #F1592B;">booKita</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-light">
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
                        <a class="nav-link active" aria-current="page" href="#">Koleksi</a>
                    </li>
                </ul>
                <div class="nav-link logout"><a href="" style="text-decoration: none; color: black">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-md" style="margin-top: 5vw;">
        <div class="col mt-5">
            {{-- form --}}
            <form action="/koleksi" method="POST" enctype="multipart/form-data">
                @csrf
                <h4 class="text-header mb-4">Buat Buku</h4>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul</label>
                    <input type="text" placeholder="Buat Judul..." name="judul"
                        class="form-control @error('judul') is-invalid @enderror"
                        style="background: rgba(255, 255, 255, 0.20);
backdrop-filter: blur(4px);
-webkit-backdrop-filter: blur(4px);
border-radius: 10px;
border: 1px solid rgba(255, 255, 255, 0.18);"
                        autofocus required value="{{ old('judul') }}" />
                    @error('judul')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select bg-light opacity-75" aria-label="Default select example" name="kategori">
                        <option name="kategori" selected value="cerpen">Cerpen</option>
                        <option name="kategori" value="novel">Novel</option>
                        <option name="kategori" value="ensiklopedia">Ensiklopedia</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Sinopsis</label>
                    <input type="text" placeholder="Sinopsis tidak lebih dari 500 kata..." name="sinopsis"
                        class="form-control @error('sinopsis') is-invalid @enderror"
                        style="background: rgba(255, 255, 255, 0.20);
backdrop-filter: blur(4px);
-webkit-backdrop-filter: blur(4px);
border-radius: 10px;
border: 1px solid rgba(255, 255, 255, 0.18);"
                        autofocus required value="{{ old('sinopsis') }}" />
                    @error('sinopsis')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Buku</label>
                    @error('isi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="isi" type="hidden" name="isi" value="{{ old('isi') }}" required>
                    <trix-editor input="isi"
                        style="background: rgba(255, 255, 255, 0.20);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);"
                        required></trix-editor>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload Cover</label>
                    <img alt="" class="img-preview img-fluid mb-3 col-sm-5">
                    <input type="file" class="form-control-buat @error('gambar') is-invalid @enderror"
                        id="image" name="gambar" required onchange="previewImage()" />
                    @error('gambar')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    @if (session()->has('gagal'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session('gagal') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <button class="btn-buat-quote mt-2 me-2">
                    Simpan
                </button>

                <button class="btn-batal">
                    <a href="/koleksi">Batal</a>
                </button>
            </form>
            {{-- form --}}
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
    {{-- footer --}}
    <div class="container-fluid mt-5 text-dark" style="text-align: center">
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
