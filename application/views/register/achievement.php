<div class="d-flex flex-column p-3">
    <div class="d-flex flex-column">
        <h1 class="fw-bold" style="font-size: 35px;">Pendaftaran Siswa</h1>
        <p class="fw-semibold color-body" style="font-size: 20px;">Pastikan semua data yang diisi adalah benar dan sesuai dengan dokumen resmi. Harap periksa kembali sebelum menyimpan!</p>
    </div>

    <hr class="my-4" style="border-width: 3px;">

    <div class="d-flex w-100 mb-4 px-4 align-items-center rounded-3 bg-white" style="height: 6rem; border-left: 1rem solid #43b638;">
        <h2 class="fw-bold" style="font-size: 20px;">Upload Bukti Prestasi (Opsional)</h2>
    </div>

    <form id="achievement-form" class="d-flex flex-column">
        <div class="d-flex flex-column mb-4 p-5 rounded-3 bg-white">
            <h3 class="mb-5 fw-bold" style="font-size: 20px;">Bukti Prestasi</h3>

            <div class="row">
                <div class="col-md-12">
                    <label for="achievement-file" class="form-label mb-4">Upload Dokumen</label>
                    <div class="d-flex w-100 flex-column align-items-center justify-content-between" style="margin-bottom: 18px; padding: 3rem; gap: 1.5rem; border-radius: var(--bs-border-radius); border: 1px solid var(--bs-border-color)">
                        <img src="<?= base_url('/assets/img/upload.png') ?>" alt="upload" width="46">
                        <div class="d-flex flex-column text-center" style="gap: 1rem;">
                            <p class="fw-bold">Upload Bukti/Sertifikat Prestasi Lomba dalam bentuk PDF/JPG/PNG ukuran Maks 2mb</p>
                            <p class="fw-bold color-body" style="font-size: 13px;">Pastikan dokumen terbaca dengan jelas dan sah (memiliki tanda tangan/pengesahan resmi)</p>
                        </div>
                        <button type="button" id="achievement-file-btn" class="btn btn-primary" style="min-width: 7.5rem; padding: 10px;">
                            <span class="fw-bold text-white" style="font-size: 13px;">Upload</span>
                        </button>
                        <input type="file" id="achievement-file" name="achievement-files[]" hidden multiple>
                    </div>
                    <div id="achievement-file-name" class="d-flex flex-column" style="gap: 18px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <a href="<?= base_url('/register/grade') ?>" class="btn btn-outline-primary" style="min-width: 7.5rem; padding: 10px;">
                <span class="fw-bold" style="font-size: 13px;">Sebelumnya</span>
            </a>

            <button type="submit" class="btn btn-primary" style="min-width: 7.5rem; padding: 10px;">
                <span class="fw-bold text-white" style="font-size: 13px;">Simpan & Lanjutkan</span>
            </button>
        </div>
    </form>
</div>