<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white py-4">
        <div class="container-md">
            <a class="navbar-brand" href="/home"><img src="/bookita.PNG" alt="" class="navbar-image"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ $active === 'Kategori' ? 'active text-danger' : '' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item {{ request()->is('kategori/cerpen') ? 'text-danger' : '' }}"
                                    type="submit" href="/kategori/{{ 'cerpen' }}" name="cerpen"
                                    value="cerpen">Cerpen</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('kategori/novel') ? 'text-danger' : '' }}"
                                    href="/kategori/{{ 'novel' }}" name="novel" value="novel">Novel</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('kategori/ensiklopedia') ? 'text-danger' : '' }}"
                                    href="/kategori/{{ 'ensiklopedia' }}" name="ensiklopedia"
                                    value="ensiklopedia">Ensiklopedia</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('kategori/semua/semua') ? 'text-danger' : '' }}"
                                    href="/kategori/semua/{{ 'semua' }}" name="semua" value="semua">Semua
                                    Kategori</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link kontak" onclick="kontak()" aria-current="page" href="#kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'Koleksi' ? 'active text-danger' : '' }}" aria-current="page"
                            href="/koleksi">Koleksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'About' ? 'active text-danger' : '' }}" aria-current="page"
                            href="/about">About</a>
                    </li>
                </ul>
                <form action="/cari" class="w-100">
                    @if (request('nama'))
                        <input type="hidden" name="nama" value="{{ request('nama') }}">
                    @endif
                    @if (request('judul'))
                        <input type="hidden" name="judul" value="{{ request('judul') }}">
                    @endif
                    <div class="input-group d-md-flex w-100">
                        <input type="text" name="cari" value="{{ request('cari') }}" autocomplete="none"
                            class="form-control bg-body-secondary border-0 rounded-0"
                            placeholder="Cari berdasarkan nama pembuat atau judul buku.." aria-label="cari"
                            aria-describedby="button-addon2">
                        <button class="btn bg-body-secondary border-0 rounded-0" type="submit" id="button-addon2"><i
                                class="bi bi-search"></i></button>
                    </div>
                </form>
                <div class="nav-item">
                    <form action="/logout">
                        @csrf
                        <button type="submit" class="nav-link logout">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> --}}

    <script language="JavaScript" type="text/javascript" src="{{ asset('js/jquery3.7.1.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.logout', function(event) {
                var form = $(this).closest("form");
                event.preventDefault();
                Swal.fire({
                    title: "Yakin ingin logout?",
                    icon: "info",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, logout!",
                    cancelButtonText: "Batal"
                }).then((willDelete) => {
                    if (willDelete.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
{{-- 
</body>

</html> --}}
