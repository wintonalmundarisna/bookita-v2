<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>booKita || {{ $title }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Select CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    {{-- list metode pembayaran --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
    {{-- list metode pembayaran --}}



    {{-- Vite buat hot reload --}}
    @vite([])
    <title>booKita || {{ $title }}</title>
    <link rel="shortcut icon" href="{{ $gambar }}" />

    <style>
        body {
            padding: 0;
            margin: 0;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* .selectpicker .dropdown-menu .inner li a img {
            max-width: 20px;
            max-height: 20px;
            margin-right: 10px;
        } */

        /* @media (max-width: 576px) { */
        @media (max-width: 770px) {
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

            .row.wadah {
                display: grid;
                grid-template-areas:
                    'atas'
                    'bawah'
            }

            .col-md-6.text {
                grid-area: bawah;

            }

            .col-md-6.image {
                grid-area: atas;
                margin-block: 20px;
                display: flex;
            }

            .wadah .image .tombol {
                margin-block: auto;
                margin-inline: auto;
                width: 100%
            }

            .col-md-6.image .span {
                display: flex;
            }

            .col-md-6.image .span img {
                width: 130px
            }

            .mb-3.row input {
                text-align: end
            }
        }

        /* @media (min-width: 528px) { */
        @media (min-width: 771px) {
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

        .fillContent {
            font-size: 2 vw;
            padding: 50px 100px 50px 100px;
        }
    </style>
</head>

<body>
    @include('layouts.navbar')

    <div class="container">
        <h2 style="width: fit-content">
            <a href="/baca/{{ $back->id }}" class="text-decoration-none text-black">
                <i class="bi bi-caret-left-fill"></i> Kembali
            </a>
        </h2>

        <form action="/transaksi/sukses" method="POST">
            @csrf
            <div class="card border-1 border-black mt-5 bg-dark-subtle">
                <div class="card-header d-flex border-black text-white" style="background-color: #F1592B;">
                    <h3 class="card-title w-100 text-center"><i class="bi bi-pencil-square"></i> Data Transaksi</h3>
                </div>
                <div class="card-body">
                    <div class="row wadah">
                        <div class="col-md-6">
                            <input type="hidden" name="id" value="{{ $back->id }}">
                            <div class="mb-3 row">
                                <label for="nama" class="col col-form-label">Nama Pembeli</label>
                                <div class="col">
                                    <input type="email" name="nama" readonly class="form-control-plaintext" id="nama"
                                        value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="noTelp" class="col col-form-label">No Telp Pembeli</label>
                                <div class="col">
                                    <input type="number" name="noTelp" readonly class="form-control-plaintext" id="noTelp"
                                        value="{{ $user->noTelp }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="saldo" class="col col-form-label">Pointa Pembeli</label>
                                <div class="col">
                                    <input type="text" name="saldoPembeli" readonly class="form-control-plaintext" id="saldo"
                                        name="saldo" value="{{ number_format($user->saldo) }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="judul" class="col col-form-label">Judul Buku</label>
                                <div class="col">
                                    <input type="text" name="judul" readonly class="form-control-plaintext" id="judul"
                                        value="{{ $back->judul }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="harga" class="col col-form-label">Harga Buku</label>
                                <div class="col">
                                    <input type="text" name="harga" readonly class="form-control-plaintext" id="harga"
                                        value="{{ number_format($back->harga) }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="biayaAdmin" class="col col-form-label">Biaya Admin</label>
                                <div class="col">
                                    <input type="number" readonly class="form-control-plaintext" id="biayaAdmin"
                                        value="1000">
                                </div>
                            </div>
                            <div class="row">
                                <label for="harga" class="col col-form-label">Metode Pembayaran</label>
                                <div class="col p-0">
                                    <select class="selectpicker w-100" data-live-search="true" name="metode">
                                        <option
                                            data-content="<img class='pb-1' src='{{ asset('logo.png') }}' width='25'> POINTA ({{ $back->noTelp }})"
                                            value="{{ $back->noTelp }}">
                                            POINTA</option>
                                        <option
                                            data-content="<img class='pb-1' src='{{ asset('img/transaksi/dana.png') }}' width='19'> DANA ({{ $back->noTelp }})"
                                            value="DANA">
                                            DANA</option>
                                        <option
                                            data-content="<img class='pb-1' src='{{ asset('img/transaksi/gopay.png') }}' width='20'> GOPAY ({{ $back->noTelp }})"
                                            value="GOPAY">
                                            GOPAY</option>
                                        <option
                                            data-content="<img class='pb-1' src='{{ asset('img/transaksi/ovo.jpg') }}' width='20'> OVO ({{ $back->noTelp }})"
                                            value="OVO">
                                            OVO</option>
                                        <option
                                            data-content="<img class='pb-1' src='{{ asset('img/transaksi/bsi.png') }}' width='28'> BSI ({{ $back->noTelp }})"
                                            value="BSI">
                                            BSI</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 image">
                            <div class="span text-end">
                                <img src="{{ asset('img/koleksi/' . $back->gambar) }}" alt=""
                                    width="150px">
                            </div>
                            <div class="text-end tombol pt-4">
                                <button type="button" class="btn text-white" style="background-color: #F1592B;"
                                    id="minus">-</button>
                                <input type="number" name="qty" class="border-0  text-center bg-dark-subtle"
                                    style="width: 74px" readonly value="1" id="quantity">
                                <button type="button" class="btn text-white" style="background-color: #F1592B;"
                                    id="plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row d-flex justify-content-between">
                        <label for="total" class="col-3 col-form-label">Total</label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext"
                                style="background-color: transparent" name="total" id="total" value="{{ $back->harga }}">
                        </div>
                        <div class="col text-end">
                            <button class="confirm btn text-white" type="submit"
                                style="background-color: #F1592B; width: 152px">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Select JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>

    <script>
        // btn plus minus
        let total = document.getElementById('total');
        let totalParse = parseInt(total.value) + 1000;

        // karna gabisa pake koma, maka diakalin
        total.value = totalParse.toLocaleString('en-EN');

        document.getElementById('plus').addEventListener('click', function() {
            let quantity = document.getElementById('quantity');
            quantity.value = parseInt(quantity.value) + 1;
            total.value = (totalParse * quantity.value).toLocaleString('en-EN');
        });

        document.getElementById('minus').addEventListener('click', function() {
            let quantity = document.getElementById('quantity');
            if (quantity.value > 1) {
                quantity.value = parseInt(quantity.value) - 1;
                total.value = (totalParse * quantity.value).toLocaleString('en-EN');
            }
        });
        // btn plus minus

        // modal confirm
        $(document).ready(function() {
            $(document).on('click', '.confirm', function(event) {
                var form = $(this).closest("form");

                event.preventDefault();
                Swal.fire({
                    title: "Transfer Rp. " + total.value,
                    text: "Ke (+62 " + {{ $back->noTelp }} + ")",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Transfer"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
        // modal confirm
    </script>
</body>

</html>
