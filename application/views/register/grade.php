<div class="d-flex flex-column p-3">
    <div class="d-flex flex-column">
        <h1 class="fw-bold" style="font-size: 35px;">Pendaftaran Siswa</h1>
        <p class="fw-semibold color-body" style="font-size: 20px;">Pastikan semua data yang diisi adalah benar dan sesuai dengan dokumen resmi. Harap periksa kembali sebelum menyimpan!</p>
    </div>

    <hr class="my-4" style="border-width: 3px;">

    <div class="d-flex w-100 mb-4 px-4 align-items-center rounded-3 bg-white" style="height: 6rem; border-left: 1rem solid #43b638;">
        <h2 class="fw-bold" style="font-size: 20px;">Program / Jenjang Pendidikan <span class="text-danger">*</span></h2>
    </div>

    <form id="grade-form" class="d-flex flex-column">
        <div class="d-flex flex-column mb-4 p-5 rounded-3 bg-white">
            <h3 class="mb-5 fw-bold" style="font-size: 20px;">Informasi Kelas <span class="text-danger">*</span></h3>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-4">
                        <label for="grade" class="form-label">Kelas Tujuan</label>
                        <input type="text" class="form-control" id="grade" name="grade" value="Kelas 7" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-4">
                        <label for="class-program" class="form-label">Program Kelas</label>
                        <select class="form-select" name="class-program" id="class-program" aria-label="Program Kelas">
                            <option value="">Pilih Program Kelas</option>
                            <option value="reguler">Program Kelas Reguler</option>
                            <option value="unggulan">Program Kelas Unggulan</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <a href="<?= base_url('/register/parent') ?>" class="btn btn-outline-primary" style="min-width: 7.5rem; padding: 10px;">
                <span class="fw-bold" style="font-size: 13px;">Sebelumnya</span>
            </a>

            <button type="submit" class="btn btn-primary" style="min-width: 7.5rem; padding: 10px;">
                <span class="fw-bold text-white" style="font-size: 13px;">Simpan & Lanjutkan</span>
            </button>
        </div>
    </form>
</div>