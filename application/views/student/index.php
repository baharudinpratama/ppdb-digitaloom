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
        <h1 class="fw-bold" style="font-size: 1.5rem;">Data Calon Siswa Baru</h1>
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

    <div class="position-relative d-flex w-100 mb-5 p-5 rounded-4 bg-success overflow-hidden" style="min-height: 21rem;">
        <div class="position-absolute" style="top: -2.5rem; right: -2.5rem;">
            <div class="d-flex">
                <div class="col px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 24 24">
                        <path fill="#c7e684" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                </div>
                <div class="col px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 24 24">
                        <path fill="#c7e684" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                </div>
                <div class="col px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 24 24">
                        <path fill="#c7e684" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                </div>
                <div class="col px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 24 24">
                        <path fill="#c7e684" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                </div>
                <div class="col px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 24 24">
                        <path fill="#c7e684" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                </div>
            </div>
            <div class="d-flex">
                <div class="col px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 24 24">
                        <path fill="#c7e684" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                </div>
                <div class="col px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 24 24">
                        <path fill="#c7e684" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                </div>
                <div class="col px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 24 24">
                        <path fill="#c7e684" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                </div>
                <div class="col px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 24 24">
                        <path fill="#c7e684" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                </div>
                <div class="col px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 24 24">
                        <path fill="#c7e684" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column w-100 text-white">
            <p class="mb-5 fw-bold" style="font-size: 1.5rem;">Total Pendaftar</p>
            <p class="mb-4 fw-bold" style="font-size: 1.25rem;"><span style="font-size: 2.5rem;"><?= sizeof($students) ?></span> Calon Siswa</p>
            <hr class="mb-5" style="border-color: #D8D8D8;">
            <div class="d-flex justify-content-end align-items-center">
                <p class="fw-bold">Tahun Pelajaran 2025/2026</p>
            </div>
        </div>
    </div>

    <div class="p-2">
        <table id="table" class="table table-responsive w-100 align-middle">
            <thead>
                <tr>
                    <th class="text-center">Tanggal<br>Daftar</th>
                    <th class="text-center">Nama & No. PPDB<br>Calon Siswa</th>
                    <th class="text-center">NISN</th>
                    <th class="text-center">Jenis<br>Kelamin</th>
                    <th class="text-center">Kelas<br>Dipilih</th>
                    <th class="text-center">Asal<br>Sekolah</th>
                    <th class="text-center">Status<br>Pendaftaran</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student) : ?>
                    <tr>
                        <td class="fw-bold text-center"><?= date('d-m-Y', strtotime($student->created_at)) ?></td>
                        <td>
                            <div>
                                <div class="fw-semibold"><?= $student->name ?></div>
                                <div class="text-muted small"><?= $student->reg_number ?></div>
                            </div>
                        </td>
                        <td class="fw-semibold text-center"><?= $student->nisn ?></td>
                        <td class="fw-semibold text-center"><?= ucfirst($student->gender) ?></td>
                        <td class="fw-semibold text-center">MTS / Kelas 7</td>
                        <td class="fw-semibold text-center"><?= $student->prev_school_name ?></td>
                        <?php
                        $text = '';
                        $color = '';

                        switch ($student->reg_status) {
                            case 'new':
                                $text = 'Sedang Diproses';
                                $color = 'badge text-bg-secondary';
                                break;
                            case 'approved':
                                $text = 'Disetujui';
                                $color = 'badge text-bg-success';
                                break;
                            case 'rejected':
                                $text = 'Ditolak';
                                $color = 'badge text-bg-danger';
                                break;
                            default:
                                $text = '';
                                $color = '';
                                break;
                        }
                        ?>
                        <td class="fw-bold text-center"><span class="<?= $color ?>"><?= $text ?></span></td>
                        <td class="text-center">
                            <?php if ($student->reg_status === 'new') : ?>
                                <a href="<?= base_url('/students/' . $student->id) ?>" class="btn w-100 bg-warning text-white fw-bold">
                                    Verifikasi Data
                                </a>
                            <?php endif; ?>
                            <?php if ($student->reg_status !== 'new') : ?>
                                <a href="<?= base_url('/students/' . $student->id) ?>" class="btn w-100 bg-primary text-white fw-bold">
                                    Lihat Detail
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>