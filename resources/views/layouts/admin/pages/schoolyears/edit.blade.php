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
              <h5 class="card-title fw-semibold mb-4">Ubah Tahun PPDB</h5>
              <form action="{{ url('schoolyears/update') }}/{{ $detail->id }}" method="POST" id="addForm">
                @csrf
                <div class="mb-3">
                    <label for="years" class="form-label">Tahun PPDB</label>
                    <input type="text" class="form-control" id="years" name="years"  value="{{ $detail->years }} {{ old('years') }}">
                  </div>
                  <div class="mb-3">
                    <label for="number_of_registrans" class="form-label">Jumlah Siswa</label>
                    <input type="text" class="form-control" id="number_of_registrans" name="number_of_registrans" value="{{ $detail->number_of_registrans }} {{ old('number_of_registrans') }}">
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
