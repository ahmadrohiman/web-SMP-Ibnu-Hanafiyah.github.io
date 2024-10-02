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
            <h1 class="display-4 text-white animated slideInDown mb-4">Penerimaan Peserta Didik Baru</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/beranda">Beranda</a></li>
                </ol>
            </nav>
        </div>
    </div>
<!--feature start--->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/animasi.jpg" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/brosurPPDB.jpg" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="display-6 mb-4">Formulir Penerimaan Peserta Didik Baru (PPDB)</h1>
                <div class="card">
                    <div class="card-body ">
                      <h5 class="card-title fw-semibold mb-4">Lengkapi Formulir di bawah ini!</h5>
                      <!-- Display success message -->
                      @if(session('message'))
                        <div class="alert alert-success">
                          {{ session('message') }}
                        </div>
                      @endif
                      <form action="{{ url('daftar/store') }}" method="POST" id="addForm">
                        @csrf
                        <div class="mb-3">
                            <label for="schoolyears_id" class="form-label">Tahun Pendaftaran</label>
                            <input type="text" class="form-control" id="schoolyears_id" name="schoolyears_id" placeholder="Tulisakan Tahun Saat Ini" value="{{ old('schoolyears_id') }}">
                          </div>
                        <div class="mb-3">
                          <label for="name_student" class="form-label">Nama Siswa</label>
                          <input type="text" class="form-control" id="name_student" name="name_student" placeholder="Tuliskan Nama Lengkap" value="{{ old('name_student') }}">
                        </div>
                        <div class="mb-3">
                          <label for="date_of_birth" class="form-label">Tempat/Tgl Lahir</label>
                          <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Tuliskan Tempat/Tgl Lahir" value="{{ old('date_of_birth') }}">
                        </div>
                        <div class="mb-3">
                          <label for="gender" class="form-label">Jenis Kelamin</label>
                          <input type="text" class="form-control" id="gender" name="gender" placeholder="Boleh mengisi satu Huruf L atau P" value="{{ old('gender') }}">
                        </div>
                        <div class="mb-3">
                          <label for="elementary_of_origin" class="form-label">Asal SD/MI</label>
                          <input type="text" class="form-control" id="elementary_of_origin" name="elementary_of_origin" placeholder="Tuliskan Nama SD/MI anda" value="{{ old('elementary_of_origin') }}">
                        </div>
                        <div class="mb-3">
                          <label for="phone_number" class="form-label">No.HP</label>
                          <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Tuliskan No.HP" value="{{ old('phone_number') }}">
                        </div>
                        <div class="mb-3">
                          <label for="home_address" class="form-label">Alamat Rumah</label>
                          <input type="text" class="form-control" id="home_address" name="home_address" placeholder="Tuliskan Alamat Rumah" value="{{ old('home_address') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- featur End -->

<!--contant end--->
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



