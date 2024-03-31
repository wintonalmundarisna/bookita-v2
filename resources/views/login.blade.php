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
    {{-- Vite buat hot reload --}}
    @vite([])

    {{-- icon bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Login</title>
    <style>
  body{
    font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: normal;
  }
    .btn{
        background-color: #FF5D0A;
        width: 100% ;
        color: #ffff;
    }
    .inputForm{
        width: 400px;
    }
    .form-control{
        border: none;
  border-bottom: 2px solid #000842;
  outline: none;
  background: transparent;
  border-radius: 0;

    }
    .form-label{
       color: #999999;
    }
    .h2{
      color: #FF5D0A;
    }
</style>
    <head>
    <section class="vh-100 pt-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
                <div class="col">
                    <img src="logo.png" class="w-25" alt="">
                </div>
                <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
              </div>
                    <form>
                    <h3 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px;">Sign Up</h3>
                    <p>if you don't have an account register you can <a href="#!" class="link-warning">register here !</a></p>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter you email address"></input>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input placeholder="Enter you password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="pt-1 mb-4">
                    <button class="btn btn-warning btn-md rounded-pill fw-bold" type="button">Login</button>
                  </div>
                  <div class="text-center">
                      <span class="d-line">or continue white</span>
                </div>
                    </form>
                </div>
                <div class="col">
                    <img src="login.png" class="w-100" alt="">
                </div>
            </div>
        </div>
    </head>

<body>


    {{-- cdn bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
