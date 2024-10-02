<!doctype html>
<html lang="en">
@include('layouts.admin.header')
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('layouts.admin.menu')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
    @include('layouts.admin.setting')
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Content Start -->
        <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Ubah data</h5>
              <form action="{{ url('registration/update') }}/{{ $detail->id }}" method="POST" id="addForm">
                @csrf
                <div class="mb-3">
                  <label for="schoolyears_id" class="form-label">Tahun Pendaftaran</label>
                  <input type="text" class="form-control" id="schoolyears_id" name="schoolyears_id" placeholder="Masukkan Tahun Lulusa" value="{{ $detail->schoolyears_id }} {{ old('schoolyears_id') }}">
                </div>
                <div class="mb-3">
                  <label for="name_student" class="form-label">Nama Siswa</label>
                  <input type="text" class="form-control" id="name_student" name="name_student" placeholder="Masukkan Nama Siswa" value="{{ $detail->name_student }} {{ old('name_student') }}">
                </div>
                <div class="mb-3">
                  <label for="date_of_birth" class="form-label">Tempat/Tgl Lahir</label>
                  <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Masukkan Nama Siswa" value="{{ $detail->date_of_birth }} {{ old('date_of_birth') }}">
                </div>
                <div class="mb-3">
                  <label for="gender" class="form-label">Jenis Kelamin</label>
                  <input type="text" class="form-control" id="gender" name="gender" placeholder="Masukkan jenis kelamin" value="{{ $detail->gender }} {{ old('gender') }}">
                </div>
                <div class="mb-3">
                  <label for="elementary_of_origin" class="form-label">Asal SD/MI</label>
                  <input type="text" class="form-control" id="elementary_of_origin" name="elementary_of_origin" placeholder="Masukkan Asal SD/MI" value="{{ $detail->elementary_of_origin }} {{ old('elementary_of_origin') }}">
                </div>
                <div class="mb-3">
                  <label for="phone_number" class="form-label">No.HP</label>
                  <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Masukkan No.HP" value="{{ $detail->phone_number }} {{ old('phone_number') }}">
                </div>
                <div class="mb-3">
                  <label for="home_address" class="form-label">Alamat Runah</label>
                  <input type="text" class="form-control" id="home_address" name="home_address" placeholder="Masukkan Alamat Rumah" value="{{ $detail->home_address }} {{ old('home_address') }}">
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
              </form>
            </div>
          </div>
        <!--  Content End -->
        @include('layouts.admin.footer')
      </div>
    </div>
  </div>
  @include('layouts.admin.script')
</body>
</html>
