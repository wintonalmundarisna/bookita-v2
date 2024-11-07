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
    {{-- @vite([]) --}}
    <title>Login</title>
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
</style>

<body>
    <section class="vh-100 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-4">
                    {{-- Pemberitahuan ketika berhsil register atau login --}}
                     @if (session()->has('success'))
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                         <strong>{{ session('success') }}</strong>
                         <button type="button" class="btn-close" data-bs-dismiss="alert"
                             aria-label="Close"></button>
                     </div>
                 @endif

                 @if (session()->has('hasError'))
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                         <strong>{{ session('hasError') }}</strong>
                         <button type="button" class="btn-close" data-bs-dismiss="alert"
                             aria-label="Close"></button>
                     </div>
                 @endif
                 {{-- Pemberitahuan ketika berhsil register atau login --}}

                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        <p class="h2 fw-bold mb-0">booKita</p>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form action="/" method="POST" style="width: 23rem;">
                            @csrf
                            <h3 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px;">Masuk Akun</h3>
                            <p class="fw-semibold">Belum punya akun ? <a href="/register" class=""
                                    style="text-decoration: none; color: #FF5D0A">Daftar disini</a></p>
                            <div class="form-outline">
                                <label class="form-label fw-bold mt-4" for="form2Example28">Email :</label>
                                <input type="email" id="formEmail" name="email"
                                    class="form-control form-control-sm " />
                            </div>
                            <div class="form-outline">
                                <label class="form-label fw-bold mt-5" for="inputPassword">Kata Sandi :</label>
                                <input type="password" id="formEmail" name="password"
                                    class="form-control form-control-sm " />
                            </div>

                            <button class="btn btn-warning rounded-pill fw-bold mt-5" type="submit">Masuk</button>
                        </form>

                    </div>

                </div>
                <div class="col-sm-6 py-10 d-none d-sm-block pt-5">
                    <img src="Login.png" alt="Login image" class="page-image w-100">
                </div>
            </div>
        </div>
    </section>

    {{-- cdn bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
