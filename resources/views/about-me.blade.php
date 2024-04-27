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
            *{
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

       .image-baca{
        width: 100%;
  max-width: 70%;
  height: auto;
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
                        <a class="nav-link active" aria-current="page" href="#">home</a>
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

    <div class="container">
        <div class="row">
          <div class="col">
            <p class=" m-0 px-3 py-2"><span class="text-black fs-1 font-family-Montserrat">Kami kelompok dua sebagai pengembang web</span><span class="text-secondary fs-1 font-family-Montserrat"> </span><span class="text-orange fs-1">boo</span><span class="text-dark fs-1 font-family-Montserrat">K</span><span class="text-orange fs-1 font-family-Montserrat">ita</span><span class="text-secondary fs-1 font-family-Montserrat"> </span><span class="text-black fs-1 font-family-Montserrat">untuk tugas matakuliah web lanjut</span></p>
            <p class="text-dark fs-6 fw-normal font-family-Montserrat  m-0 px-3 py-2">BooKita adalah website tentang buku. BooKita berisi fitur tentang baca buku, buat buku pribadi, kelola buku pribadi dan kelola buku koleksi milik orang lain yang akan dibaca.</p>
            <p class="text-dark fs-6 fw-normal font-family-Montserrat  m-0 px-3 py-2">BooKita dibuat menggunakan teknologi HTML,  CSS, BOOTSTRAP, PHP, JS, AJAX, LARAVEL, MySQL dan Figma sebagai media desainnya.</p>
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
                  <p class="card-text">Saya adalah  front-end enginer dan UI designer pemula, saya menggunakan react.js & next.js sebagai framework pembuatan web. </p>
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
                      <p class="card-text">Saya adalah mahasiswa UNINDRA PGRI semester enam yang sedang belajar JAVA dan MySQL</p>
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
                  <p class="card-text"> Saya belajar front-end semenjak masuk kuliah dan masih belajar hingga sekarang.</p>
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
                      <p class="card-text">Saya adalah seorang php web developer yang fokus menggunakan LARAVEL dan MySQL sejak tahun 2021 hingga sekarang.</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <footer class="container-fluid mt-5 text-white" style="background-color: #303030;">
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
                            <h5 class="mb-3 bab text-start">Kontak</h5>
                        </div>
                        <div class="row mb-3 d-flex justify-content-start">
                            <button type="btn" class="btn px-4 py-2 text-white bab"
                                style="background-color: #F1592B; width: max-content;">bookita@gmail.com</button>
                        </div>
                        <div class="row">
                            <h5 class="fw-semibold bab d-flex justify-content-start">+ 62 878 206 255 14</h5>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="container-fluid bg-dark text-white p-3" style="text-align: center">
            <h6 class="fw-light">All Right Reserverd. Copyright © booKita 2024 </h6>
        </div>
          

    {{-- cdn bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
