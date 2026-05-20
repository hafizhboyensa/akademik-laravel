<header>
    <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ route('home') }}">
                Akademik
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 fw-medium">
                    <li class="nav-item">
                        <a class="nav-link px-3" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/mahasiswa">Mahasiswa</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <div class="input-group">
                        <input class="form-control bg-light border-0 px-4 rounded-start-pill" type="search" placeholder="Cari data..." aria-label="Search">
                        <button class="btn btn-primary px-4 rounded-end-pill" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</header>
