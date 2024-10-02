<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h6 class="text-primary text-uppercase mb-2">Appointment</h6>
                <h1 class="display-6 mb-4">Make An Appointment To Pass Test & Get A License On The First Try</h1>
                <form>
                    <div class="mb-3">
                        <label for="schoolyears_id" class="form-label">Tahun Lulus</label>
                        <input type="text" class="form-control" id="schoolyears_id" name="schoolyears_id" placeholder="Masukan Tahun Lulus" value="{{ old('schoolyears_id') }}">
                      </div>
                    <div class="mb-3">
                      <label for="name_student" class="form-label">Nama Siswa</label>
                      <input type="text" class="form-control" id="name_student" name="name_student" placeholder="Masukan Nama" value="{{ old('name_student') }}">
                    </div>
                    <div class="mb-3">
                      <label for="date_of_birth" class="form-label">Tempat/Tgl Lahir</label>
                      <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Masukan Tempat/Tgl Lahir" value="{{ old('date_of_birth') }}">
                    </div>
                    <div class="mb-3">
                      <label for="gender" class="form-label">Jenis Kelamin</label>
                      <input type="text" class="form-control" id="gender" name="gender" placeholder="Masukan jenis Kelamin" value="{{ old('gender') }}">
                    </div>
                    <div class="mb-3">
                      <label for="elementary_of_origin" class="form-label">Asal SD/MI</label>
                      <input type="text" class="form-control" id="elementary_of_origin" name="elementary_of_origin" placeholder="Masukan Asal SD/MI" value="{{ old('elementary_of_origin') }}">
                    </div>
                    <div class="mb-3">
                      <label for="phone_number" class="form-label">No.HP</label>
                      <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Masukan No.HP" value="{{ old('phone_number') }}">
                    </div>
                    <div class="mb-3">
                      <label for="home_address" class="form-label">Alamat Rumah</label>
                      <input type="text" class="form-control" id="home_address" name="home_address" placeholder="Masukan Alamat Rumah" value="{{ old('home_address') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->
