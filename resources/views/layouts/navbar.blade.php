<nav class="navbar navbar-expand-lg bg-white py-4">
    <div class="container-md">
        <a class="navbar-brand" href="/home"><img src="/bookita.PNG" alt="" class="navbar-image"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                                href="/kategori/semua/{{ 'semua' }}" name="semua"
                                value="semua">Semua Buku</a>
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
                    <a class="nav-link {{ $active === 'About' ? 'active text-danger' : '' }}" aria-current="page" href="/about">About</a>
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
                        class="form-control bg-body-secondary border-0 rounded-0" placeholder="Cari berdasarkan nama pembuat atau judul buku.."
                        aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn bg-body-secondary border-0 rounded-0" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                </div>
            </form>
            <div class="nav-item logout">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="nav-link" type="submit"
                        onclick="return confirm('Yakin ingin logout ?')">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>
