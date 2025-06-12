<style>
    .table,
    .table thead,
    .table tbody {
        --bs-table-bg: transparent !important;
    }

    table#table thead {
        height: 4rem;
        vertical-align: middle;
    }

    table#table tbody tr {
        border-radius: 0.75rem;
        overflow: hidden;
        margin-bottom: 1rem;
    }

    table#table tbody tr td {
        vertical-align: middle;
        padding: 1rem;
    }
</style>

<div class="d-flex flex-column p-3">
    <div class="d-flex flex-column py-4">
        <h1 class="fw-bold" style="font-size: 25px;">Data Calon Siswa Baru</h1>
    </div>

    <table id="table" class="table align-middle">
        <thead>
            <tr>
                <th class="text-center">Tanggal Daftar</th>
                <th class="text-center">Nama & No. PPDB<br>Calon Siswa</th>
                <th class="text-center">NISN</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Kelas Dipilih</th>
                <th class="text-center">Asal Sekolah</th>
                <th class="text-center">Status Pendaftaran</th>
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
                            <div class="text-muted small"><?= $student->ppdb_number ?? 'PPDB-' . date('Ymd') . '-' . $student->id ?></div>
                        </div>
                    </td>
                    <td class="fw-semibold text-center"><?= $student->nisn ?></td>
                    <td class="fw-semibold text-center"><?= ucfirst($student->gender) ?></td>
                    <td class="fw-semibold text-center">MTS / Kelas 7</td>
                    <td class="fw-semibold text-center"><?= $student->prev_school_name ?></td>
                    <td class="fw-bold text-center">Sedang Diproses</td>
                    <td class="text-center">
                        <a href="<?= base_url('/students/' . $student->id) ?>" class="btn btn-warning text-white fw-bold">
                            Verifikasi Data
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>