<!doctype html>
<html lang="en">
@include('layouts.admin.header')
<body>
    <div class="page-wrapper" id="main-wrapper">
        @include('layouts.admin.menu')
        <div class="body-wrapper">
            @include('layouts.admin.setting')
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Prediksi Pendaftaran Tahun Berikutnya</h5>
                        <p>Tahun: {{ $prediction['next_year'] }}</p>
                        <p>Jumlah Pendaftar yang Diprediksi: {{ $prediction['predicted_registrants'] }}</p>
                        <a href="{{ url('/schoolyears') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.footer')
</body>
</html>
