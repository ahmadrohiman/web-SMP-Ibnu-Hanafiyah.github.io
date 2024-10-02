<!DOCTYPE html>
<html lang="en">
<!-- Header -->
@include('layouts.partials.header')
<body>
    <!-- Spinner Start -->
    @include('layouts.partials.spinner')
    <!-- Topbar Start -->
    @include('layouts.partials.topbar')
    <!-- Navbar Start -->
    @include('layouts.partials.navbar')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Visi & Misi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/profilguru">Profil Guru</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Visi & Misi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Features Start -->
    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">Visi</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Terwujudnya Lulusan Yang Cerdas Dan Berkarakter (DASTER) </p>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-4">
                    <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">Misi</h2>
                    <p data-aos="fade-up" data-aos-delay="100">1. Mewujudkan Siswa unggul dalam Akademik/non akademik</p>
                    <p data-aos="fade-up" data-aos-delay="100">2. Pembelajaran yang relavan menghadapi abad-21</p>
                    <p data-aos="fade-up" data-aos-delay="100">3. Pelayanan yang prima Pendik/Tendik yang kompeten, serta tidak tertinggal Teknologi dan Informasi</p>
                </div>
            </div>
        </div>
    </div>
<!-- Features End -->


<!-- Footer Start -->
@include('layouts.partials.footer')
<!-- Copyright Start -->
@include('layouts.partials.copyright')
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
<!-- JavaScript Libraries -->
@include('layouts.partials.javaScript')
<script src="js/main.js"></script>
</body>

</html>
