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
              <h5 class="card-title fw-semibold mb-4">Tambah Pengguna Baru</h5>
              <form action="{{ url('user/store') }}" method="POST" id="addForm">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>

                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" autofocus required value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan email" autofocus required value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password" value="{{ old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
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
