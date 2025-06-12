<div class="d-flex flex-column p-3">
    <div class="d-flex flex-column">
        <h1 class="fw-bold" style="font-size: 35px;">Pendaftaran Siswa</h1>
        <p class="fw-semibold color-body" style="font-size: 20px;">Pastikan semua data yang diisi adalah benar dan sesuai dengan dokumen resmi. Harap periksa kembali sebelum menyimpan!</p>
    </div>

    <hr class="my-4" style="border-width: 3px;">

    <div class="d-flex w-100 mb-4 px-4 align-items-center rounded-3 bg-white" style="height: 6rem; border-left: 1rem solid #43b638;">
        <h2 class="fw-bold" style="font-size: 20px;">Konfirmasi Data</h2>
    </div>

    <form id="confirmation-form" class="d-flex flex-column">
        <div class="d-flex flex-column mb-4 p-5 rounded-3 bg-white">
            <h3 class="mb-5 fw-bold" style="font-size: 20px;">Konfirmasi Data</h3>

            <p class="mb-5 fw-bold">Mohon periksa kembali seluruh data yang telah diisi untuk memastikan keakuratan. Data yang dikonfirmasi akan digunakan sebagai dasar seleksi dan administrasi siswa. Jika sudah benar, silakan klik 2 checkbox sebagai persetujuan data yang akan dikirim lalu klik tombol Konfirmasi untuk melanjutkan proses pendaftaran.</p>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="confirm-1">
                        <label class="form-check-label" for="confirm-1">
                            Dengan ini, saya menyatakan bahwa seluruh data yang telah saya isi adalah benar dan sesuai dengan dokumen resmi. Saya memahami bahwa kesalahan atau ketidaksesuaian data yang dikirimkan dapat memengaruhi proses pendaftaran.
                        </label>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="confirm-2">
                        <label class="form-check-label" for="confirm-2">
                            Saya juga menyetujui bahwa data yang telah dikirimkan maka akan digunakan dan disimpan dengan baik oleh pihak sekolah sebagai kebutuhan proses PPDB ini dan tidak akan disebarluaskan kepada pihak manapun.
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <a href="<?= base_url('/register/achievement') ?>" class="btn btn-outline-primary" style="min-width: 7.5rem; padding: 10px;">
                <span class="fw-bold" style="font-size: 13px;">Sebelumnya</span>
            </a>

            <button type="submit" class="btn btn-primary" style="min-width: 7.5rem; padding: 10px;">
                <span class="fw-bold text-white" style="font-size: 13px;">Simpan & Lanjutkan</span>
            </button>
        </div>
    </form>
</div>

<div class="modal fade" id="modal-loading" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex flex-column p-5 align-items-center">
                    <img src="<?= base_url('/assets/images/message.gif') ?>" alt="Message" width="160" class="img-fluid mb-4">
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
                    <img src="<?= base_url('/assets/images/approved.gif') ?>" alt="Approved" width="140" class="img-fluid mb-4">
                    <p class="mb-4 fw-bold" style="font-size: 20px;">Pendaftaran Peserta Didik Berhasil!!!</p>
                    <p class="text-center fw-semibold">Data pendaftaran Anda telah berhasil dikirim. Silakan pantau info pengumuman serta informasi Tahapan selanjutnya melalui Notifikasi WhatsApp yang akan kami kirimkan. Semoga sukses!</p>
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