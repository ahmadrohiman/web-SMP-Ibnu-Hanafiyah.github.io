<!doctype html>
<html lang="en">
@include('layouts.admin.header')
<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('layouts.admin.menu')
    <div class="body-wrapper">
      @include('layouts.admin.setting')
      <div class="container-fluid">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Tambah Tahun</h5>
              <form action="{{ url('schoolyears/store') }}" method="POST" id="addForm">
                @csrf
                <div class="mb-3">
                    <label for="years" class="form-label">Tahun PPDB</label>
                    <input type="text" class="form-control @error('years') is-invalid @enderror" id="years" name="years" placeholder="Masukan Tahun PPDB" value="{{ old('years') }}">
                    @error('years')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="number_of_registrans" class="form-label">Jumlah Siswa</label>
                  <input type="text" class="form-control @error('number_of_registrans') is-invalid @enderror" id="number_of_registrans" name="number_of_registrans" placeholder="Masukan Jumlah Jumlah Siswa" value="{{ old('number_of_registrans') }}">
                  @error('number_of_registrans')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
            </div>
          </div>
        @include('layouts.admin.footer')
      </div>
    </div>
  </div>
  @include('layouts.admin.script')
</body>
</html>
