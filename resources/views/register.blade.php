<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- cdn bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    {{-- Vite buat hot reload --}}
    @vite([])
    <title>Register</title>
    <link rel="shortcut icon" href="icon-bookita-fix.png" />

</head>

<style>
    body {
        font-family: "Poppins", sans-serif;
        font-weight: 300;
        font-style: normal;
    }

    .btn {
        background-color: #FF5D0A;
        width: 100%;
        color: #ffff;
    }

    .inputForm {
        width: 400px;
    }

    .form-control {
        border: none;
        border-bottom: 2px solid #000842;
        outline: none;
        background: transparent;
        border-radius: 0;

    }

    .form-label {
        color: #999999;
    }

    .h2 {
        color: #FF5D0A;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 text-black">

                    <div class="px-5 ms-xl-4">
                        <p class="h2 fw-bold mb-0 mt-4">booKita</p>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-xl-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form action="/register" method="POST" style="width: 100%;" enctype="multipart/form-data">
                            @csrf
                            <h3 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px;">Daftar Akun</h3>
                            <p class="fw-semibold">Sudah punya akun ? <a href="/" class=""
                                    style="text-decoration: none; color: #FF5D0A">Login disini</a></p>
                            <div class="form-outline mb-1">
                                <label class="form-label fw-bold mt-3" for="Username">Nama :</label>
                                <input type="text" id="UserName" name="name"
                                    class="form-control form-control-sm" />
                                <label class="form-label fw-bold mt-3" for="noTelp">No Telp :</label>
                                <input type="number" id="noTelp" name="noTelp"
                                    class="form-control form-control-sm " />
                                <label class="form-label fw-bold mt-3" for="form2Example28">Email :</label>
                                <input type="email" id="formEmail" name="email"
                                    class="form-control form-control-sm " />

                            </div>
                            <div class="form-outline mb-1">
                                <label class="form-label fw-bold mt-3" for="inputPassword">Kata Sandi :</label>
                                <input type="password" id="formEmail" name="password"
                                    class="form-control form-control-sm " />
                            </div>
                            <div class="form-outline mb-1">
                                <label class="form-label fw-bold mt-3" for="image">Foto Profil</label>
                                <img alt="" value="" class="img-preview img-fluid mb-3 col-sm-5">
                                <input type="file" class="form-control-buat" id="image" name="gambar" required
                                    onchange="previewImage()" />
                            </div>
                            <button class="btn btn-warning mt-5 rounded-pill fw-bold" type="submit">Daftar</button>
                        </form>

                    </div>

                </div>
                <div class="col-lg-6 m-auto d-none ps-5 d-sm-block">
                    <img src="sign up.svg" alt="Register image" class="page-image w-75 vh-75">
                </div>
            </div>
        </div>
    </section>

    {{-- cdn bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

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
</body>

</html>
