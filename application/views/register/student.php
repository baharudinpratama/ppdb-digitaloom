<div class="d-flex flex-column p-3">
    <div class="d-flex flex-column">
        <h1 class="fw-bold" style="font-size: 35px;">Pendaftaran Siswa</h1>
        <p class="fw-semibold color-body" style="font-size: 20px;">Pastikan semua data yang diisi adalah benar dan sesuai dengan dokumen resmi. Harap periksa kembali sebelum menyimpan!</p>
    </div>

    <hr class="my-4" style="border-width: 3px;">

    <div class="d-flex w-100 mb-4 px-4 align-items-center rounded-3 bg-white" style="height: 6rem; border-left: 1rem solid #43b638;">
        <h2 class="fw-bold" style="font-size: 20px;">Data Diri Siswa <span class="text-danger">*</span></h2>
    </div>

    <form id="student-form" class="d-flex flex-column">
        <div class="d-flex flex-column mb-4 p-5 rounded-3 bg-white">
            <h3 class="mb-5 fw-bold" style="font-size: 20px;">Informasi Pribadi <span class="text-danger">*</span></h3>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="nik" class="form-label">Nomor Induk Kependudukan (NIK)</label>
                        <input type="text" class="form-control" id="nik" name="nik">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="nisn" class="form-label">Nomor NISN</label>
                        <input type="text" class="form-control" id="nisn" name="nisn">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" autocomplete="given-name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="gender" id="gender" aria-label="Jenis Kelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="birth-place" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="birth-place" name="birth-place">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="birth-date" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="birth-date" name="birth-date">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="nationality" class="form-label">Kewarganegaraan</label>
                        <input type="text" class="form-control" id="nationality" name="nationality">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea class="form-control" id="address" name="address" rows="3" autocomplete="street-address"></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="language" class="form-label">Bahasa Sehari Hari</label>
                        <input type="text" class="form-control" id="language" name="language">
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mb-4 p-5 rounded-3 bg-white">
            <h3 class="mb-5 fw-bold" style="font-size: 20px;">Informasi Kesehatan</h3>

            <div class="d-flex flex-column">
                <p class="form-label">Golongan Darah</p>

                <div class="d-flex mt-3 mb-4 justify-content-between align-items-center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="blood-type" id="blood-type-a" value="a">
                        <label class="form-check-label" for="blood-type-a">Darah A</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="blood-type" id="blood-type-b" value="b">
                        <label class="form-check-label" for="blood-type-b">Darah B</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="blood-type" id="blood-type-ab" value="ab">
                        <label class="form-check-label" for="blood-type-ab">Darah AB</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="blood-type" id="blood-type-o" value="o">
                        <label class="form-check-label" for="blood-type-o">Darah O</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="blood-type" id="blood-type-none" value="">
                        <label class="form-check-label" for="blood-type-none">Tidak Tahu</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="mb-4">
                    <label for="medical-history" class="form-label">Riwayat Penyakit</label>
                    <textarea class="form-control" id="medical-history" name="medical-history" rows="3"></textarea>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mb-4 p-5 rounded-3 bg-white">
            <h3 class="mb-5 fw-bold" style="font-size: 20px;">Informasi Pendidikan Asal <span class="text-danger">*</span></h3>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="prev-school-name" class="form-label">Nama Sekolah Asal</label>
                        <input type="text" class="form-control" id="prev-school-name" name="prev-school-name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="prev-school-npsn" class="form-label">NPSN Sekolah Asal</label>
                        <input type="text" class="form-control" id="prev-school-npsn" name="prev-school-npsn">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="prev-school-acc" class="form-label">Akreditasi Sekolah Asal</label>
                        <input type="text" class="form-control" id="prev-school-acc" name="prev-school-acc">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="prev-school-anbk" class="form-label">Total Nilai ANBK Sekolah Asal</label>
                        <input type="text" class="form-control" id="prev-school-anbk" name="prev-school-anbk">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="mb-4">
                    <label for="prev-school-address" class="form-label">Alamat Sekolah Asal</label>
                    <textarea class="form-control" id="prev-school-address" name="prev-school-address" rows="3"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="diploma-number" class="form-label">Nomor Ijazah</label>
                        <input type="text" class="form-control" id="diploma-number" name="diploma-number">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="diploma-year" class="form-label">Tahun Ijazah</label>
                        <input type="text" class="form-control" id="diploma-year" name="diploma-year">
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary" style="min-width: 7.5rem; padding: 10px;">
                <span class="fw-bold text-white" style="font-size: 13px;">Simpan & Lanjutkan</span>
            </button>
        </div>
    </form>
</div>