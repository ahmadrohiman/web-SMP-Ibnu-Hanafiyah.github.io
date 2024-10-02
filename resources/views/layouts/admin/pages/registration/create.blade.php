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
            <div class="card-body col-lg-4">
              <h5 class="card-title fw-semibold mb-4">Tambah Calon Siswa Baru</h5>
              <!-- Display success message -->
              @if(session('message'))
                <div class="alert alert-success">
                  {{ session('message') }}
                </div>
              @endif
              <form action="{{ url('registration/store') }}" method="POST" id="addForm">
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
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
          </div>
        </div>
        <!-- Conten end -->
        <!--  Content End -->
        @include('layouts.admin.footer')
      </div>
    </div>
  </div>
  @include('layouts.admin.script')
</body>
</html>
