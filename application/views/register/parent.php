<div class="d-flex flex-column p-3">
    <div class="d-flex flex-column">
        <h1 class="fw-bold" style="font-size: 35px;">Pendaftaran Siswa</h1>
        <p class="fw-semibold color-body" style="font-size: 20px;">Pastikan semua data yang diisi adalah benar dan sesuai dengan dokumen resmi. Harap periksa kembali sebelum menyimpan!</p>
    </div>

    <hr class="my-4" style="border-width: 3px;">

    <div class="d-flex w-100 mb-4 px-4 align-items-center rounded-3 bg-white" style="height: 6rem; border-left: 1rem solid #43b638;">
        <h2 class="fw-bold" style="font-size: 20px;">Data Diri Orang Tua / Wali <span class="text-danger">*</span></h2>
    </div>

    <form id="parent-form" class="d-flex flex-column">
        <div class="d-flex flex-column mb-4 p-5 rounded-3 bg-white">
            <h3 class="mb-5 fw-bold" style="font-size: 20px;">Informasi Orang Tua / Wali <span class="text-danger">*</span></h3>

            <label class="mb-4">1. Ayah</label>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="father-name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="father-name" name="father-name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="father-phone" class="form-label">Nomor HP</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">+62</span>
                            <input type="number" class="form-control" id="father-phone" name="father-phone">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="father-birth-place" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="father-birth-place" name="father-birth-place">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="father-birth-date" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="father-birth-date" name="father-birth-date">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="father-education" class="form-label">Pendidikan Terakhir</label>
                        <input type="text" class="form-control" id="father-education" name="father-education">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="father-job" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="father-job" name="father-job">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="father-income" class="form-label">Penghasilan</label>
                        <input type="number" class="form-control" id="father-income" name="father-income">
                    </div>
                </div>
            </div>

            <div class="mb-4"></div>

            <label class="mb-4">2. Ibu</label>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="mother-name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="mother-name" name="mother-name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="mother-phone" class="form-label">Nomor HP</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">+62</span>
                            <input type="number" class="form-control" id="mother-phone" name="mother-phone">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="mother-birth-place" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="mother-birth-place" name="mother-birth-place">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="mother-birth-date" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="mother-birth-date" name="mother-birth-date">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="mother-education" class="form-label">Pendidikan Terakhir</label>
                        <input type="text" class="form-control" id="mother-education" name="mother-education">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="mother-job" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="mother-job" name="mother-job">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="mother-income" class="form-label">Penghasilan</label>
                        <input type="number" class="form-control" id="mother-income" name="mother-income">
                    </div>
                </div>
            </div>

            <div class="mb-4"></div>

            <label class="mb-4">3. Wali (Apabila tanggung jawab oleh wali (bukan orang tua))</label>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="caretaker-name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="caretaker-name" name="caretaker-name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="caretaker-phone" class="form-label">Nomor HP</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">+62</span>
                            <input type="number" class="form-control" id="caretaker-phone" name="caretaker-phone">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="caretaker-birth-place" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="caretaker-birth-place" name="caretaker-birth-place">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="caretaker-birth-date" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="caretaker-birth-date" name="caretaker-birth-date">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="caretaker-education" class="form-label">Pendidikan Terakhir</label>
                        <input type="text" class="form-control" id="caretaker-education" name="caretaker-education">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="caretaker-job" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="caretaker-job" name="caretaker-job">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="caretaker-income" class="form-label">Penghasilan</label>
                        <input type="number" class="form-control" id="caretaker-income" name="caretaker-income">
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mb-4 p-5 rounded-3 bg-white">
            <h3 class="mb-5 fw-bold" style="font-size: 20px;">Informasi Alamat Tempat Tinggal Orang Tua/Wali </h3>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-4">
                        <label for="parent-address" class="form-label">Alamat</label>
                        <textarea class="form-control" id="parent-address" name="parent-address" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <a href="<?= base_url('/register/student') ?>" class="btn btn-outline-primary" style="min-width: 7.5rem; padding: 10px;">
                <span class="fw-bold" style="font-size: 13px;">Sebelumnya</span>
            </a>

            <button type="submit" class="btn btn-primary" style="min-width: 7.5rem; padding: 10px;">
                <span class="fw-bold text-white" style="font-size: 13px;">Simpan & Lanjutkan</span>
            </button>
        </div>
    </form>
</div>