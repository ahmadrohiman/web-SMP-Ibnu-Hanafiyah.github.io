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
              <h5 class="card-title fw-semibold mb-4">Data Calon Siswa</h5>
              <a href="/registration/create" class="btn btn-primary">Tambah</a>
              <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Nama</th>
                        <th>Tempat/Tgl Lahir</th>
                        <th>L/P</th>
                        <th>Asal SD/MI</th>
                        <th>No Hand Phone</th>
                        <th>Alamat Rumah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registration as $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $value->schoolyears_id }}</td>
                        <td>{{ $value->name_student }}</td>
                        <td>{{ $value->date_of_birth }}</td>
                        <td>{{ $value->gender }}</td>
                        <td>{{ $value->elementary_of_origin }}</td>
                        <td>{{ $value->phone_number }}</td>
                        <td>{{ $value->home_address }}</td>
                        <td>
                            <a href="{{ url('registration/edit') }}/{{ $value->id }}" class="btn btn-warning"><i class="ti ti-edit"></i></a>
                        </td>
                        <td>
                            <a href="/registration/delete/{{ $value->id }}" class="btn btn-danger"><i class="ti ti-circle-x"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                {{-- <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tahun Lulus</th>
                        <th>Nama Siswa</th>
                        <th>Tempat/Tgl Lahir</th>
                        <th>jenis Kelamin</th>
                        <th>Asal SD/MI</th>
                        <th>No.HP</th>
                        <th>Alamat Rumah</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot> --}}
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
