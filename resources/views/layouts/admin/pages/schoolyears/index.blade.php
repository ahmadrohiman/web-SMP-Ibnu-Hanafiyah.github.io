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
              <h5 class="card-title fw-semibold mb-4">Prediksi Jumlah Siswa</h5>
              <p>Tahun: {{ $prediction['next_year'] ?? 'Tidak ada data' }}</p>
              <p>Jumlah Pendaftar yang Diprediksi: {{ $prediction['predicted_registrants'] ?? 'Tidak ada data' }}</p>

              <a href="/schoolyears/create" class="btn btn-primary">Tambah</a>
              <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun PPDB</th>
                        <th> Jumlah Siswa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schoolyears as $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $value->years }}</td>
                        <td>{{ $value->number_of_registrans }}</td>
                        <td>
                            <a href="{{ url('schoolyears/edit') }}/{{ $value->id }}" class="btn btn-warning">Ubah</a>
                            <a href="/schoolyears/delete/{{ $value->id }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tahun Pendaftaran</th>
                        <th>Jumlah Pendaftaran</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
            </div>
          </div>
        <!--  Content End -->
        @include('layouts.admin.footer')
      </div>
    </div>
  </div>
  @include('layouts.admin.script')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css"></script>
</body>
</html>
<script>
    new DataTable('#datatable');
</script>
