<input type="hidden" id="student-id" value="<?= $student->id ?>">

<div class="d-flex flex-column p-3">
    <div class="d-flex flex-column">
        <h1 class="fw-bold" style="font-size: 35px;">Upload Berkas Persyaratan </h1>
        <p class="fw-semibold color-body" style="font-size: 20px;">Silahkan Upload dokumen persyaratan dengan lengkap dan sesuai ketentuan untuk proses verifikasi daftar ulang. Pastikan Dokumen yang diupload jelas, sesuai format dan dapat terbaca</p>
    </div>

    <hr class="my-4" style="border-width: 3px;">

    <?php if (!sizeof($student_uploads) > 0) : ?>
        <div class="d-flex w-100 mb-4 px-4 align-items-center rounded-3 bg-white" style="height: 6rem; border-left: 1rem solid #43b638;">
            <h2 class="fw-bold" style="font-size: 20px;">Upload Dokumen Persyaratan</h2>
        </div>

        <form id="upload-form" class="d-flex flex-column">
            <div class="d-flex flex-column mb-4 p-5 rounded-3 bg-white">
                <h3 class="mb-5 fw-bold" style="font-size: 20px;">Dokumen Persyaratan</h3>

                <div class="row">
                    <div class="col-md-12">
                        <label for="photo-file" class="form-label mb-4">1. Pas Foto Siswa (Ukuran 3x4)</label>
                        <div class="d-flex w-100 flex-column align-items-center justify-content-between" style="margin-bottom: 1.125rem; padding: 3rem; gap: 1.5rem; border-radius: var(--bs-border-radius); border: 1px solid var(--bs-border-color)">
                            <img src="<?= base_url('/assets/img/upload.png') ?>" alt="upload" width="46">
                            <div class="d-flex flex-column text-center" style="gap: 1rem;">
                                <p class="fw-bold">Upload Pas Foto dengan ukuran 3x4 dalam bentuk JPG atau PNG ukuran Maks 2mb</p>
                                <p class="fw-bold color-body" style="font-size: 0.75rem;">Pastikan Pas foto yang diupload dengan menggunakan gaya formal</p>
                            </div>
                            <button type="button" id="photo-file-btn" class="btn btn-primary" style="min-width: 7.5rem; padding: 10px;">
                                <span class="fw-bold text-white" style="font-size: 0.75rem;">Upload</span>
                            </button>
                            <input type="file" id="photo-file" name="photo-file" hidden>
                        </div>
                        <p class="mb-3 fw-semibold color-body" style="font-size: 0.75rem;">
                            Catatan :<br>
                            Pas Foto Upload dengan gaya formal serta Latar Belakang Merah untuk Laki - Laki, sedangkan Latar Belakang Biru untuk Perempuan
                        </p>
                        <div id="photo-file-name" class="d-flex flex-column mb-4 fw-bold" style="font-size: 0.825rem; gap: 1.125rem;">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="nisn-file" class="form-label mb-4">2. Scan NISN</label>
                        <div class="d-flex w-100 flex-column align-items-center justify-content-between" style="margin-bottom: 1.125rem; padding: 3rem; gap: 1.5rem; border-radius: var(--bs-border-radius); border: 1px solid var(--bs-border-color)">
                            <img src="<?= base_url('/assets/img/upload.png') ?>" alt="upload" width="46">
                            <div class="d-flex flex-column text-center" style="gap: 1rem;">
                                <p class="fw-bold">Upload Scan NISN dalam bentuk PDF, JPG atau PNG ukuran Maks 2mb</p>
                                <p class="fw-bold color-body" style="font-size: 0.75rem;">Pastikan Scan NISN yang diupload terlihat dengan jelas </p>
                            </div>
                            <button type="button" id="nisn-file-btn" class="btn btn-primary" style="min-width: 7.5rem; padding: 10px;">
                                <span class="fw-bold text-white" style="font-size: 0.75rem;">Upload</span>
                            </button>
                            <input type="file" id="nisn-file" name="nisn-file" hidden>
                        </div>
                        <div id="nisn-file-name" class="d-flex flex-column mb-4 fw-bold" style="font-size: 0.825rem; gap: 1.125rem;">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="birth-cert-file" class="form-label mb-4">3. Akta Kelahiran</label>
                        <div class="d-flex w-100 flex-column align-items-center justify-content-between" style="margin-bottom: 1.125rem; padding: 3rem; gap: 1.5rem; border-radius: var(--bs-border-radius); border: 1px solid var(--bs-border-color)">
                            <img src="<?= base_url('/assets/img/upload.png') ?>" alt="upload" width="46">
                            <div class="d-flex flex-column text-center" style="gap: 1rem;">
                                <p class="fw-bold">Upload Fotocopy Akta Kelahiran dalam bentuk PDF, JPG atau PNG ukuran Maks 2mb</p>
                                <p class="fw-bold color-body" style="font-size: 0.75rem;">Pastikan Scan Fotocopy Akta Kelahiran yang diupload terlihat dengan jelas </p>
                            </div>
                            <button type="button" id="birth-cert-file-btn" class="btn btn-primary" style="min-width: 7.5rem; padding: 10px;">
                                <span class="fw-bold text-white" style="font-size: 0.75rem;">Upload</span>
                            </button>
                            <input type="file" id="birth-cert-file" name="birth-cert-file" hidden>
                        </div>
                        <div id="birth-cert-file-name" class="d-flex flex-column mb-4 fw-bold" style="font-size: 0.825rem; gap: 1.125rem;">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="kk-file" class="form-label mb-4">4. Kartu Keluarga (KK)</label>
                        <div class="d-flex w-100 flex-column align-items-center justify-content-between" style="margin-bottom: 1.125rem; padding: 3rem; gap: 1.5rem; border-radius: var(--bs-border-radius); border: 1px solid var(--bs-border-color)">
                            <img src="<?= base_url('/assets/img/upload.png') ?>" alt="upload" width="46">
                            <div class="d-flex flex-column text-center" style="gap: 1rem;">
                                <p class="fw-bold">Upload Scan Fotocopy KK/KTP Calon Peserta didik (jika sudah berusia 17 Tahun) dalam bentuk PDF, JPG atau PNG ukuran Maks 2mb</p>
                                <p class="fw-bold color-body" style="font-size: 0.75rem;">Pastikan Scan KK/KTP yang diupload terlihat dengan jelas </p>
                            </div>
                            <button type="button" id="kk-file-btn" class="btn btn-primary" style="min-width: 7.5rem; padding: 10px;">
                                <span class="fw-bold text-white" style="font-size: 0.75rem;">Upload</span>
                            </button>
                            <input type="file" id="kk-file" name="kk-file" hidden>
                        </div>
                        <div id="kk-file-name" class="d-flex flex-column mb-4 fw-bold" style="font-size: 0.825rem; gap: 1.125rem;">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="skl-file" class="form-label mb-4">5. Scan Ijazah atau SKL (Surat Keterangan Lulus)</label>
                        <div class="d-flex w-100 flex-column align-items-center justify-content-between" style="margin-bottom: 1.125rem; padding: 3rem; gap: 1.5rem; border-radius: var(--bs-border-radius); border: 1px solid var(--bs-border-color)">
                            <img src="<?= base_url('/assets/img/upload.png') ?>" alt="upload" width="46">
                            <div class="d-flex flex-column text-center" style="gap: 1rem;">
                                <p class="fw-bold">Upload Scan Ijazah ataupun SKL (Jika belum mempunyai Ijazah) Calon Peserta didik dalam bentuk PDF, JPG atau PNG ukuran Maks 2mb</p>
                                <p class="fw-bold color-body" style="font-size: 0.75rem;">Pastikan Scan Ijazah/SKL yang diupload terlihat dengan jelas </p>
                            </div>
                            <button type="button" id="skl-file-btn" class="btn btn-primary" style="min-width: 7.5rem; padding: 10px;">
                                <span class="fw-bold text-white" style="font-size: 0.75rem;">Upload</span>
                            </button>
                            <input type="file" id="skl-file" name="skl-file" hidden>
                        </div>
                        <div id="skl-file-name" class="d-flex flex-column mb-4 fw-bold" style="font-size: 0.825rem; gap: 1.125rem;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex w-100 mb-4 px-4 align-items-center rounded-3 bg-white" style="height: 6rem; border-left: 1rem solid #43b638;">
                <h2 class="fw-bold" style="font-size: 20px;">Konfirmasi Dokumen Persyaratan</h2>
            </div>

            <div class="d-flex flex-column mb-4 p-5 rounded-3 bg-white">
                <h3 class="mb-5 fw-bold" style="font-size: 20px;">Konfirmasi Data</h3>

                <p class="mb-5 fw-bold">Sebelum melanjutkan, pastikan seluruh dokumen persyaratan yang Anda upload telah diperiksa dengan saksama. Pastikan juga dokumen yang diupload dapat terlihat dengan jelas dan mudah dibaca. Dengan mencentang checkbox di bawah ini dan mengklik tombol 'Submit Dokumen', Anda menyatakan bahwa seluruh dokumen yang disampaikan adalah benar dan valid.</p>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="confirm-1">
                            <label class="form-check-label color-body" for="confirm-1">
                                Saya menyatakan bahwa seluruh dokumen yang saya unggah adalah benar, lengkap, dan sesuai dengan ketentuan yang berlaku. Saya memahami bahwa dokumen yang telah dikirim akan digunakan untuk proses verifikasi dan tidak dapat diubah kembali setelah dikonfirmasi.
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" style="min-width: 7.5rem; padding: 10px;">
                    <span class="fw-bold text-white" style="font-size: 13px;">Submit Dokumen</span>
                </button>
            </div>
        </form>
    <?php else : ?>
        <div class="d-flex w-100 mb-4 px-4 align-items-center rounded-3 bg-white" style="height: 6rem; border-left: 1rem solid #43b638;">
            <h2 class="fw-bold" style="font-size: 20px;">Konfirmasi Dokumen Persyaratan</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="d-flex w-100 flex-column align-items-center justify-content-between bg-white" style="height: 31rem; margin-bottom: 1.125rem; padding: 3rem; gap: 1.5rem; border-radius: var(--bs-border-radius-lg);">
                    <img src="<?= base_url('/assets/img/upload/completed.png') ?>" alt="upload" width="450">
                    <div class="d-flex flex-column text-center" style="gap: 1rem;">
                        <p class="fw-bold">Anda telah mengupload dokumen persyaratan!!!</p>
                        <p class="fw-bold color-body" style="font-size: 0.75rem;">Saat ini dokumen persyaratan anda telah masuk di sistem kami. silakan anda melanjutkan ke tahapan terakhir yaitu melakukan pembayaran Daftar Ulang</p>
                    </div>
                </div>
                <div id="skl-file-name" class="d-flex flex-column mb-4 fw-bold" style="font-size: 0.825rem; gap: 1.125rem;">
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<div class="modal fade" id="modal-loading" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex flex-column p-5 align-items-center">
                    <img src="<?= base_url('/assets/img/message.gif') ?>" alt="Message" width="160" class="img-fluid mb-4">
                    <p class="fw-bold" style="font-size: 20px;">Sedang Mengirim...</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-response" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex flex-column p-5 align-items-center">
                    <img src="<?= base_url('/assets/img/approved.gif') ?>" alt="Approved" width="140" class="img-fluid mb-4">
                    <p class="mb-4 fw-bold" style="font-size: 20px;">Dokumen Persyaratan berhasil terkirim!!!</p>
                    <p class="text-center fw-semibold">Dokumen Persyaratan yang telah anda upload berhasil masuk ke dalam sistem kami. Selanjutnya anda diminta untuk segera melakukan Pembayaran data ulang pada menu pembayaran daftar ulang.</p>
                </div>

                <div class="d-flex justify-content-end align-items-center">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary btn-ok" style="min-width: 7.5rem; padding: 10px;">
                            <span class="fw-bold text-white" style="font-size: 13px;">Ok</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>