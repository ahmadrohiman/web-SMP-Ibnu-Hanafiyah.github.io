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
              <h5 class="card-title fw-semibold mb-4">Pengguna</h5>
              <a href="/user/create" class="btn btn-primary">Tambah</a>
              <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <th>{{ $value->name }}</th>
                        <th>{{ $value->email }}</th>
                        <td>
                            <a href="{{ url('user/edit') }}/{{ $value->id }}" class="btn btn-warning">Ubah</a>
                            <a href="/user/delete/{{ $value->id }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
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
