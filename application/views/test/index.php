<style>
    .table,
    .table thead,
    .table tbody {
        --bs-table-bg: transparent !important;
    }

    table#table thead {
        vertical-align: middle;
    }

    table#table thead th {
        padding: 1.5rem 0rem;
    }

    table#table tbody tr {
        border-radius: 0.75rem;
        overflow: hidden;
    }

    table#table tbody tr td {
        vertical-align: middle;
        padding: 1rem;
    }

    hr {
        border-top: none;
        border-bottom: 3px solid #eaeaea;
        opacity: 100;
    }

    .bg-success {
        background-color: #43B638 !important;
    }

    .bg-warning {
        background-color: #D9AA00 !important;
    }

    .bg-new {
        background-color: rgba(14, 73, 181, 0.15) !important;
    }
</style>

<div class="d-flex flex-column p-3">
    <div class="d-flex flex-column mt-4 mb-1">
        <h1 class="fw-bold" style="font-size: 1.5rem;">Data Tes Seleksi Calon Peserta Didik Baru</h1>
    </div>

    <?php if (isset($breadcrumbs)) : ?>
        <div class="d-flex align-items-center mb-5 gap-3">
            <?php if (sizeof($breadcrumbs) === 1): ?>
                <span class="fw-bold" style="color: #43B638"><?= $breadcrumbs[0]['title'] ?></span>
            <?php else : ?>
                <?php foreach ($breadcrumbs as $breadcrumb) : ?>
                    <?php
                    $color = "";
                    $breadcrumb['last'] ? $color = "#43B638" : $color = "#989898";
                    ?>

                    <span class="fw-bold" style="color: <?= $color ?>"><?= $breadcrumb['title'] ?></span>
                    <?php if (!$breadcrumb['last']) : ?>
                        /
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="d-flex align-items-center gap-4" style="margin-bottom: 4rem;">
        <div class="d-flex flex-fill p-4 rounded-4 bg-white">
            <div class="d-flex align-items-center gap-3">
                <img src="<?= base_url('assets/img/test/new.png') ?>" alt="new" class="rounded-3">
                <div class="d-flex flex-column fw-bold">
                    <p>Belum Tes</p>
                    <p style="color: #D9AA00;"><span style="font-size: 2rem;"><?= $count_new ?></span> Peserta</p>
                </div>
            </div>
        </div>

        <div class="d-flex flex-fill p-4 rounded-4 bg-white">
            <div class="d-flex align-items-center gap-3">
                <img src="<?= base_url('assets/img/test/passed.png') ?>" alt="passed" class="rounded-3">
                <div class="d-flex flex-column fw-bold">
                    <p>Lolos Tes</p>
                    <p style="color: #43B638;"><span style="font-size: 2rem;"><?= $count_passed ?></span> Peserta</p>
                </div>
            </div>
        </div>

        <div class="d-flex flex-fill p-4 rounded-4 bg-white">
            <div class="d-flex align-items-center gap-3">
                <img src="<?= base_url('assets/img/test/failed.png') ?>" alt="failed" class="rounded-3">
                <div class="d-flex flex-column fw-bold">
                    <p>Gagal Tes</p>
                    <p style="color: #C62E2E;"><span style="font-size: 2rem;"><?= $count_failed ?></span> Peserta</p>
                </div>
            </div>
        </div>
    </div>

    <div class="p-2">
        <table id="table" class="table table-responsive w-100 align-middle">
            <thead>
                <tr>
                    <th class="text-center">Nama & No. PPDB<br>Calon Siswa</th>
                    <th class="text-center">NISN</th>
                    <th class="text-center">Jenis<br>Kelamin</th>
                    <th class="text-center">Kelas<br>Dipilih</th>
                    <th class="text-center" width="20%">Hasil<br>Tes</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student) : ?>
                    <tr>
                        <td>
                            <div>
                                <div class="fw-semibold"><?= $student->name ?></div>
                                <div class="text-muted small"><?= $student->reg_number ?></div>
                            </div>
                        </td>
                        <td class="fw-semibold text-center"><?= $student->nisn ?></td>
                        <td class="fw-semibold text-center"><?= ucfirst($student->gender) ?></td>
                        <td class="fw-semibold text-center">MTS / Kelas 7</td>
                        <td class="fw-semibold text-center">
                            <?php if ($student->test->status === 'new') : ?>
                                <select class="form-select assign-status" aria-label="Assign status options">
                                    <option value="">Pilih Hasil Seleksi</option>
                                    <option value="passed">Lolos</option>
                                    <option value="failed">Gagal</option>
                                </select>
                            <?php else : ?>
                                <?php
                                $text = '';
                                $color = '';

                                switch ($student->test->status) {
                                    case 'passed':
                                        $text = 'Lolos Tes';
                                        $color = 'badge text-bg-success';
                                        break;
                                    case 'failed':
                                        $text = 'Gagal Tes';
                                        $color = 'badge text-bg-danger';
                                        break;
                                    default:
                                        $text = '';
                                        $color = '';
                                        break;
                                }
                                ?>
                                <span class="<?= $color ?>"><?= $text ?></span>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <?php if ($student->test->status === 'new') : ?>
                                <button type="button" data-id="<?= $student->test->id ?>" class="btn w-100 bg-warning text-white fw-bold btn-confirm">
                                    Konfirmasi
                                </button>
                            <?php endif; ?>
                            <?php if ($student->test->status !== 'new') : ?>
                                <button type="button" data-id="<?= $student->test->id ?>" class="btn w-100 bg-warning text-white fw-bold btn-confirm" disabled>
                                    Konfirmasi
                                </button>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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