<div class="d-flex flex-column">
    <div class="d-flex mb-5">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="50">
    </div>

    <div class="d-flex flex-column">
        <p class="mb-4 fw-bold" style="font-size: 12px;">Navigasi Pendaftaran</p>

        <div class="d-flex align-items-center gap-3">
            <img src="<?= base_url('assets/img/student-active.png') ?>" alt="Logo" width="60">

            <div class="d-flex flex-column text-dark">
                <p class="fw-bold" style="font-size: 18px;">Data Peserta Didik <span class="text-danger">*</span></p>
                <p id="student-form-status" class="fw-medium fst-italic">Belum Diisi</p>
            </div>
        </div>

        <div class="my-2 ms-4 border-right" style="width: 6px; height: 3rem; border-style: dashed; <?= $step >= 2 ? 'border-color: #43b638;' : '' ?>"></div>

        <div class="d-flex align-items-center gap-3">
            <?php $img_name = $step >= 2 ? 'parent-active' : 'parent'; ?>
            <img src="<?= base_url("assets/img/{$img_name}.png") ?>" alt="Logo" width="60">

            <div class="d-flex flex-column text-dark">
                <p class="fw-bold" style="font-size: 18px;">Data Orang Tua/wali <span class="text-danger">*</span></p>
                <p id="parent-form-status" class="fw-medium fst-italic">Belum Diisi</p>
            </div>
        </div>

        <div class="my-2 ms-4 border-right" style="width: 6px; height: 3rem; border-style: dashed; <?= $step >= 3 ? 'border-color: #43b638;' : '' ?>"></div>

        <div class="d-flex align-items-center gap-3">
            <?php $img_name = $step >= 3 ? 'grade-active' : 'grade'; ?>
            <img src="<?= base_url("assets/img/{$img_name}.png") ?>" alt="Logo" width="60">

            <div class="d-flex flex-column text-dark">
                <p class="fw-bold" style="font-size: 18px;">Kelas Dipilih <span class="text-danger">*</span></p>
                <p id="grade-form-status" class="fw-medium fst-italic">Belum Diisi</p>
            </div>
        </div>

        <div class="my-2 ms-4 border-right" style="width: 6px; height: 3rem; border-style: dashed; <?= $step >= 4 ? 'border-color: #43b638;' : '' ?>"></div>

        <div class="d-flex align-items-center gap-3">
            <?php $img_name = $step >= 4 ? 'achievement-active' : 'achievement'; ?>
            <img src="<?= base_url("assets/img/{$img_name}.png") ?>" alt="Logo" width="60">

            <div class="d-flex flex-column text-dark">
                <p class="fw-bold" style="font-size: 18px;">Prestasi</p>
                <p id="achievement-form-status" class="fw-medium fst-italic">Belum Diisi</p>
            </div>
        </div>

        <div class="my-2 ms-4 border-right" style="width: 6px; height: 3rem; border-style: dashed; <?= $step >= 5 ? 'border-color: #43b638;' : '' ?>"></div>

        <div class="d-flex align-items-center gap-3">
            <?php $img_name = $step >= 5 ? 'check-active' : 'check'; ?>
            <img src="<?= base_url("assets/img/{$img_name}.png") ?>" alt="Logo" width="60">

            <div class="d-flex flex-column text-dark">
                <p class="fw-bold" style="font-size: 18px;">Konfirmasi</p>
            </div>
        </div>
    </div>
</div>