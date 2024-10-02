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
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Program bulanan</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/lomba">Programtahunan</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Program Bulanan</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


<!-- Features Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/kl7.jpg" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/kls9.jpg" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="text-primary text-uppercase mb-2">Program bulanan</h6>
                    <h1 class="display-6 mb-4">Program Bulanan Pesantren Satu Hari di SMP Ibnu Hanafiyah: Menyemarakkan Keberagaman Pendidikan dan Kebersamaan</h1>
                    <p>Program bulanan "Pesantren Satu Hari" dirancang untuk memberikan pengalaman mendalam dan menyeluruh kepada peserta dalam waktu yang singkat. Dalam program ini, peserta akan mengalami berbagai kegiatan yang mencakup pelajaran agama, keterampilan hidup, dan aktivitas sosial dalam satu hari penuh.</p>
                    <p class="mb-4">Melalui program ini, diharapkan peserta tidak hanya mendapatkan manfaat akademik tetapi juga mengalami perkembangan pribadi yang positif.</p>
                </div>
                </div>
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
