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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    {{-- Vite buat hot reload --}}
    @vite([])
    <title>Login</title>
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
                <div class="col-md-6 my-auto">

                    {{-- Pemberitahuan ketika berhsil register --}}
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
                    {{-- Pemberitahuan ketika berhsil register --}}
                    
                    <div class="col-sm-6 text-black">

                        <div class="col">
                            <img src="logo.png" class="w-25" alt="">
                        </div>

                        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                            <form style="width: 23rem;" action="/" method="get">
                                <h3 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px;">Sign in</h3>
                                <p>if you don't have an account register</p>
                                <p>you can <a href="#!" class="link-warning">Register here !</a></p>
                                <div class="form-outline mb-1">
                                    <label for="exampleInputEmail1" class="form-label fw-bold mt-3">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter you email address" name="email"></input>
                                </div>
                                <div class="form-outline mb-1">
                                    <label for="exampleInputPassword1" class="form-label fw-bold mt-3">Password</label>
                                    <input placeholder="Enter you password" type="password" class="form-control"
                                        name="password" id="exampleInputPassword1">
                                </div>
                                <div class="pt-1 mb-4">
                                    <button class="btn btn-warning btn-md rounded-pill fw-bold"
                                        type="button">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6 py-10 d-none d-sm-block pt-5">
                        <img src="login.png" alt="Login" class="w-100 vh-95">
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
