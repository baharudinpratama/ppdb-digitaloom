<div class="d-flex flex-column p-3">
    <div class="d-flex flex-column">
        <h1 class="fw-bold" style="font-size: 35px;">Pengumuman</h1>
        <p class="fw-semibold color-body" style="font-size: 20px;">Silakan cek pengumuman resmi berikut untuk mengetahui status akhir pendaftaran dan informasi penting lainnya terkait kegiatan awal masuk sekolah.</p>
    </div>

    <hr class="my-4" style="border-width: 3px;">

    <?php if ($student_payment->status !== 'confirmed') : ?>
        <div class="d-flex w-100 mb-4 px-4 align-items-center rounded-3 bg-white" style="height: 6rem; border-left: 1rem solid #43b638;">
            <h2 class="fw-bold" style="font-size: 20px;">Pengumuman</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="d-flex w-100 flex-column align-items-center justify-content-between bg-white" style="height: 31rem; margin-bottom: 1.125rem; padding: 3rem; gap: 1.5rem; border-radius: var(--bs-border-radius-lg);">
                    <img src="<?= base_url('/assets/img/notification/completed.png') ?>" alt="completed" width="450">
                    <div class="d-flex flex-column text-center" style="gap: 1rem;">
                        <p class="fw-bold">Belum ada pengumuman saat ini!!!</p>
                        <p class="fw-bold color-body" style="font-size: 0.75rem;"> Mohon segera lengkapi proses Upload Dokumen Persyaratan dan lakukan Pembayaran Daftar Ulang untuk melanjutkan ke tahap pengumuman kelulusan.</p>
                    </div>
                </div>
                <div id="skl-file-name" class="d-flex flex-column mb-4 fw-bold" style="font-size: 0.825rem; gap: 1.125rem;">
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="d-flex w-100 mb-4 px-4 align-items-center rounded-3 bg-white" style="height: 6rem; border-left: 1rem solid #43b638;">
            <h2 class="fw-bold" style="font-size: 20px;">Pembayaran</h2>
        </div>

        <div class="d-flex flex-column mb-4 p-5 rounded-3 bg-white">
            <h3 class="mb-5 fw-bold" style="font-size: 1.5rem;">Selamat! Anda Telah Diterima Sebagai Peserta Didik Baru di Mts Al-Multazam Rumpin</h3>

            <p class="mb-4 fw-semibold">Pihak sekolah telah berhasil memverifikasi seluruh dokumen persyaratan serta pembayaran daftar ulang Anda. Dengan ini, kami menyatakan bahwa ananda [Nama Peserta Didik] telah resmi diterima sebagai peserta didik baru pada tahun ajaran [2025/2026] di Mts Al-Multazam Rumpin.</p>

            <p class="mb-3 fw-semibold">📌 Informasi Penting :</p>

            <ul class="mb-3 fw-semibold">
                <li>
                    <strong>Tanggal Masuk Sekolah</strong> : Senin, 15 Juli 2025
                </li>
                <li>
                    <strong>Waktu</strong> : 07.00 WIB
                </li>
                <li>
                    <strong>Lokasi</strong> : Gedung Utama Mts Al-Multazam Rumpin
                </li>
                <li>
                    <strong>Seragam</strong> : Seragam sekolah atau pakaian rapi dan sopan
                </li>
            </ul>

            <p class="mb-3 fw-semibold">Silakan simpan dan cetak bukti pengumuman ini sebagai arsip pribadi.</p>

            <p class="mb-3 fw-semibold">Terima kasih telah menjadi bagian dari keluarga besar PTEI Al-Multazam Rumpin. Kami tunggu kehadiran ananda di hari pertama kegiatan sekolah!</p>
        </div>
    <?php endif; ?>
</div>