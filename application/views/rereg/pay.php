<input type="hidden" id="student-id" value="<?= $student->id ?>">

<div class="d-flex flex-column p-3">
    <div class="d-flex flex-column">
        <h1 class="fw-bold" style="font-size: 35px;">Pembayaran Daftar Ulang</h1>
        <p class="fw-semibold color-body" style="font-size: 20px;">Silakan lakukan pembayaran daftar ulang sesuai nominal dan petunjuk yang telah ditentukan untuk menyelesaikan proses pendaftaran dan memastikan status calon peserta didik sebagai siswa resmi.</p>
    </div>

    <hr class="my-4" style="border-width: 3px;">

    <?php if (!sizeof($student_uploads) > 0) : ?>
        <div class="d-flex w-100 mb-4 px-4 align-items-center rounded-3 bg-white" style="height: 6rem; border-left: 1rem solid #43b638;">
            <h2 class="fw-bold" style="font-size: 20px;">Pembayaran</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="d-flex w-100 flex-column align-items-center justify-content-between bg-white" style="height: 31rem; margin-bottom: 1.125rem; padding: 3rem; gap: 1.5rem; border-radius: var(--bs-border-radius-lg);">
                    <img src="<?= base_url('/assets/img/pay/need-uploads.png') ?>" alt="need upload" width="450">
                    <div class="d-flex flex-column text-center" style="gap: 1rem;">
                        <p class="fw-bold">Pembayaran Daftar Ulang belum tersedia!!!</p>
                        <p class="fw-bold color-body" style="font-size: 0.75rem;">Silakan anda upload dokumen persyaratan terlebih dahulu sebelum anda melanjutkan ke tahap pembayaran daftar ulang</p>
                    </div>
                </div>
                <div id="skl-file-name" class="d-flex flex-column mb-4 fw-bold" style="font-size: 0.825rem; gap: 1.125rem;">
                </div>
            </div>
        </div>
    <?php elseif ($student_payment->status === 'new'): ?>
        <div class="d-flex w-100 mb-4 px-4 align-items-center rounded-3 bg-white" style="height: 6rem; border-left: 1rem solid #43b638;">
            <h2 class="fw-bold" style="font-size: 20px;">Pembayaran</h2>
        </div>

        <div class="d-flex flex-column mb-4 p-5 rounded-3 bg-white">
            <h3 class="mb-4 fw-bold" style="font-size: 20px;">Informasi Pembayaran Daftar Ulang</h3>

            <div class="d-flex align-items-start mb-5 gap-4">
                <img src="<?= base_url('/assets/img/bank-bri.png') ?>" alt="bank bri" width="105">

                <div class="d-flex flex-column">
                    <p class="fw-bold" style="font-size: 1.5rem;">Bank BRI</p>
                    <p class="fw-semibold mb-3 color-body">Atas Nama Mts Al-Multazam</p>
                    <p class="fw-bold" style="font-size: 1.25rem;">No. Rekening : 0123 01 000123 53 4</p>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-5">
                <p class="fw-semibold">Total Biaya</p>

                <p class="fw-bold" style="font-size: 1.75rem;">Rp2.500.000,-</p>
            </div>

            <p class="mb-4 fw-bold" style="font-size: 1.25rem;">Cara bayar & Konfirmasi Pembayaran Daftar Ulang</p>

            <p class="mb-5 fw-bold">Silakan ikuti langkah-langkah berikut untuk menyelesaikan proses pembayaran dan konfirmasi daftar ulang:</p>

            <div class="row">
                <div class="col-md-12">
                    <ol class="d-flex flex-column color-body fw-semibold gap-3">
                        <li>Lakukan pembayaran daftar ulang sesuai nominal yang tertera melalui metode yang disediakan, seperti transfer bank atau pembayaran melalui gerai resmi (misalnya Indomaret/Alfamart).</li>
                        <li>Lalu kirim bukti pembayaran kepada Admin PPDB melalui nomor WhatsApp yang telah anda dapatkan sebelumnya untuk menginformasikan bahwa Calon Peserta Didik yang bersangkutan telah berhasil melakukan pembayaran daftar ulang</li>
                        <li>Selanjutnya silahkan tunggu proses verifikasi pembayaran dan informasi status pembayaran dari admin PPDB Melalui WhatsApp selama 1x24 Jam.</li>
                    </ol>
                </div>
            </div>
        </div>
    <?php elseif ($student_payment->status === 'confirmed'): ?>
        <div class="d-flex w-100 mb-4 px-4 align-items-center rounded-3 bg-white" style="height: 6rem; border-left: 1rem solid #43b638;">
            <h2 class="fw-bold" style="font-size: 20px;">Pembayaran</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="d-flex w-100 flex-column align-items-center justify-content-between bg-white" style="height: 31rem; margin-bottom: 1.125rem; padding: 3rem; gap: 1.5rem; border-radius: var(--bs-border-radius-lg);">
                    <img src="<?= base_url('/assets/img/pay/paid.png') ?>" alt="paid" width="450">
                    <div class="d-flex flex-column text-center" style="gap: 1rem;">
                        <p class="fw-bold">Anda telah melakukan Pembayaran Daftar Ulang!!!</p>
                        <p class="fw-bold color-body" style="font-size: 0.75rem;">Silakan cek notifikasi WhatsApp dari admin PPDB terkait Info status pembayaran daftar ulang anda dan informasi penting lainnya.</p>
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