
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
            <h1 class="display-4 text-white animated slideInDown mb-4">Program tahunan</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/programbulanan">Program bulanan</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Program tahunan</li>
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
                    <img class="position-absolute w-100 h-100" src="img/17san.jpg" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/17san.jpg" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="text-primary text-uppercase mb-2">Program Tahunan</h6>
                    <h1 class="display-6 mb-4">Program Tahunan Lomba 17 Agustusan di SMP Ibnu Hanafiyah: Merayakan Kemerdekaan dengan Keceriaan dan Kreativitas</h1>
                    <p>Program tahunan "Lomba 17 Agustusan" yang diadakan oleh SMP Ibnu Hanafiyah merupakan acara yang sangat dinantikan oleh seluruh guru maupun siswa. Setiap tahun, program ini menyajikan berbagai lomba dan kompetisi yang dirancang untuk merayakan Hari Kemerdekaan Republik Indonesia dengan penuh semangat dan kegembiraan. Acara ini mencakup berbagai perlombaan tradisional yaitu balap karung, lomba makan kerupuk, tarik tambang, dan permainan seru lainnya yang melibatkan siswa dari berbagai kelas. Melalui lomba-lomba ini, siswa tidak hanya merayakan kemerdekaan dengan cara yang menyenangkan, tetapi juga belajar tentang pentingnya kerja sama dan sportivitas.</p>
                    <p class="mb-4">TProgram ini tidak hanya menjadi ajang perayaan, tetapi juga merupakan momen berharga untuk memperkuat komunitas sekolah dan merayakan kemerdekaan dengan semangat kebersamaan.</p>
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
