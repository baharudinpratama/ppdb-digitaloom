<style>
    hr {
        margin: 1rem 0;
        border-top: none;
        border-bottom: 3px solid #eaeaea;
        opacity: 100;
    }

    .nav-link {
        color: black !important;
    }

    .nav-link.active {
        background-color: #43B638 !important;
        color: white !important;
    }

    .text-success {
        color: #43B638 !important;
    }
</style>

<input type="hidden" id="student-id" value="<?= $student->id ?>">

<div class="d-flex flex-column p-3">
    <div class="d-flex flex-column py-4">
        <h1 class="fw-bold" style="font-size: 25px;">Konfirmasi Berkas & Pembayaran Daftar Ulang</h1>
    </div>

    <div class="d-flex flex-column mb-5 p-5 rounded-4 bg-white">
        <div class="d-flex flex-column mb-3 gap-1">
            <p class="fw-bold">Calon Peserta Didik</p>
            <p class="fw-semibold color-body">ID / No. Pendaftaran : </p>
            <p class="fw-semibold color-body">NISN : <?= $student->nisn ?></p>
            <p class="fw-semibold">Jenjang Dipilih : Mts / Kelas 7</p>
        </div>

        <p class="fw-semibold">Jenjang Dipilih : <span class="fw-bold">MTS / Kelas 7</span></p>

        <hr style="margin: 3rem 0;">

        <div class="d-flex justify-content-between align-items-center">
            <?php
            $text = 'Menunggu Konfirmasi';
            $color = 'badge text-bg-secondary';

            if (isset($student->payment->status)) {
                if ($student->payment->status === 'confirmed') {
                    $text = 'Pembayaran Diterima';
                    $color = 'badge text-bg-success';
                }
            }
            ?>
            <p class="fw-semibold">Status Pembayaran : <span class="fw-bold <?= $color ?>"><?= $text ?></span></p>
        </div>
    </div>

    <div class="d-flex w-100 mb-4 px-5 align-items-center rounded-4 bg-white" style="height: 6rem;">
        <h2 class="fw-bold" style="font-size: 20px;">Konfirmasi Berkas & Pembayaran Daftar Ulang</h2>
    </div>

    <div class="d-flex w-100 mb-4 p-5 pb-4 align-items-center rounded-4 bg-white">
        <div class="d-flex flex-column">
            <p class="mb-4 fw-bold" style="font-size: 1.25rem;">Berkas Persyaratan</p>

            <div class="d-flex align-items-start mb-4 gap-3">
                <?php if (isset($student->upload_map['photo'])) : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#43b638" d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7t-.7-.275t-.7.275zM12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                <?php else : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#c62e2e" d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275t.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275z" />
                    </svg>
                <?php endif; ?>

                <div class="d-flex flex-column">
                    <p class="mb-1 fw-semibold">Pas Foto</p>
                    <p class="fw-semibold fst-italic color-body"><?= isset($student->upload_map['photo']) ? $student->upload_map['photo']->original_name : '' ?></p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4 gap-3">
                <?php if (isset($student->upload_map['nisn'])) : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#43b638" d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7t-.7-.275t-.7.275zM12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                <?php else : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#c62e2e" d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275t.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275z" />
                    </svg>
                <?php endif; ?>

                <div class="d-flex flex-column">
                    <p class="mb-1 fw-semibold">NISN</p>
                    <p class="fw-semibold fst-italic color-body"><?= isset($student->upload_map['nisn']) ? $student->upload_map['nisn']->original_name : '' ?></p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4 gap-3">
                <?php if (isset($student->upload_map['birth-cert'])) : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#43b638" d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7t-.7-.275t-.7.275zM12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                <?php else : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#c62e2e" d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275t.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275z" />
                    </svg>
                <?php endif; ?>

                <div class="d-flex flex-column">
                    <p class="mb-1 fw-semibold">Akta Kelahiran</p>
                    <p class="fw-semibold fst-italic color-body"><?= isset($student->upload_map['birth-cert']) ? $student->upload_map['birth-cert']->original_name : '' ?></p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4 gap-3">
                <?php if (isset($student->upload_map['kk'])) : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#43b638" d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7t-.7-.275t-.7.275zM12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                <?php else : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#c62e2e" d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275t.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275z" />
                    </svg>
                <?php endif; ?>

                <div class="d-flex flex-column">
                    <p class="mb-1 fw-semibold">Kartu Keluarga</p>
                    <p class="fw-semibold fst-italic color-body"><?= isset($student->upload_map['kk']) ? $student->upload_map['kk']->original_name : '' ?></p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4 gap-3">
                <?php if (isset($student->upload_map['skl'])) : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#43b638" d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7t-.7-.275t-.7.275zM12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                <?php else : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#c62e2e" d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275t.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275z" />
                    </svg>
                <?php endif; ?>

                <div class="d-flex flex-column">
                    <p class="mb-1 fw-semibold">Surat Keterangan Lulus</p>
                    <p class="fw-semibold fst-italic color-body"><?= isset($student->upload_map['skl']) ? $student->upload_map['skl']->original_name : '' ?></p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4 gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#43b638" d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7t-.7-.275t-.7.275zM12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                </svg>

                <div class="d-flex flex-column">
                    <p class="mb-1 fw-semibold">Bukti Bayar</p>
                    <p class="fw-semibold fst-italic color-body">Pembayaran melalui :</p>

                    <div class="d-flex align-items-start mt-4 ms-4 gap-3">
                        <img src="<?= base_url('assets/img/rereg/paid.png') ?>" alt="paid" class="rounded-3">

                        <div class="d-flex flex-column">
                            <p class="fw-bold">Bank BRI</p>
                            <p class="fw-semibold color-body">Atas nama Yayasan PTEI Al Multazam</p>
                            <p class="fw-semibold color-body">No.Rekening : 0123 01 000123 53 4</p>
                            <p class="mt-3" style="font-size: 0.75rem;">Total Pembayaran : <span class="fw-bold">Rp2.500.000,-</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex align-items-center gap-3">
        <button id="btn-submit" class="btn bg-primary text-white" style="width: 12rem;">Konfirmasi</button>
        <a href="<?= base_url('/rereg/') ?>" class="btn bg-transparent border-secondary text-secondary" style="width: 7.5rem;">Batal</a>
    </div>
</div>

<div class="modal fade" id="modal-loading" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 18rem; height: 16rem;">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex align-items-center justify-content-center">
                    <img src="<?= base_url('assets/img/loading.gif') ?>" alt="loading" width="150">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="toast-container w-50 position-fixed top-50 start-50 translate-middle">
    <div id="toast" class="toast position-relative w-100 bg-success" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body" style="padding: 40px;">
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center h-100 text-white" style="gap: 10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m10.6 13.8l-2.15-2.15q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7L9.9 15.9q.3.3.7.3t.7-.3l5.65-5.65q.275-.275.275-.7t-.275-.7t-.7-.275t-.7.275zM12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>

                    <p id="toast-message"></p>
                </div>
            </div>

            <div role="button" class="position-absolute" style="top: 15px; right: 15px;" data-bs-dismiss="toast" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#fff" d="m12 13.4l-2.917 2.925q-.277.275-.704.275t-.704-.275q-.275-.275-.275-.7t.275-.7L10.6 12L7.675 9.108Q7.4 8.831 7.4 8.404t.275-.704q.275-.275.7-.275t.7.275L12 10.625L14.892 7.7q.277-.275.704-.275t.704.275q.3.3.3.713t-.3.687L13.375 12l2.925 2.917q.275.277.275.704t-.275.704q-.3.3-.712.3t-.688-.3z" />
                </svg>
            </div>
        </div>
    </div>
</div>