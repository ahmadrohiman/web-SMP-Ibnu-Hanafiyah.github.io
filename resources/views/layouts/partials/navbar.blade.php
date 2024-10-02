<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="beranda" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-0">
            <img src="{{ asset('images/logo.png') }}" alt="Images" width="75" class="img-thumbnail rounded-circle" class="text-primary me-2"> SMP Ibnu Hanafiyah </h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="beranda" class="nav-item nav-link">beranda</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil Sekolah</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="profilguru" class="dropdown-item">Profil Guru</a>
                    <a href="visidanmisi" class="dropdown-item">Visi dan Misi</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="/programs" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program Sekolah</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="/lomba" class="dropdown-item">Program Tahunan</a>
                    <a href="/programbulanan" class="dropdown-item">Program Bulanan</a>
                </div>
            </div>
        <a href="/daftar" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Daftar Sekarang<i class="fa fa-arrow-right ms-3"></i></a><i class="ti ti-login"></i>
    </div>
</nav>
