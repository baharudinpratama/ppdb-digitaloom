<style>
    ul {
        margin: 0;
    }

    li {
        margin-bottom: 1rem;
    }
</style>

<div class="d-flex flex-column mb-4 p-5 rounded-4 bg-white">
    <p class="mb-5 fw-bold" style="font-size: 1.5rem;">Data Orang Tua / Wali</p>
    <p class="mb-4 fw-bold" style="font-size: 1.25rem;">Informasi Orang Tua / Wali</p>

    <?php foreach ($parents as $parent) : ?>
        <p class="fw-bold mb-3"><?= ucfirst($parent->type) ?></p>
        <ul>
            <li>Nama : <span class="fw-bold"><?= $parent->name ?></span></li>
            <li>No. HP : <span class="fw-bold"><?= "+62$parent->phone" ?></span></li>
            <li>Tempat / Tanggal Lahir : <span class="fw-bold"><?= $parent->birth_place ?>, <?= date('d-m-Y', strtotime($parent->birth_date)) ?></span></li>
            <li>Pendidikan Terakhir : <span class="fw-bold"><?= $parent->education ?></span></li>
            <li>Pekerjaan : <span class="fw-bold"><?= $parent->job ?></span></li>
            <li>Penghasilan : <span class="fw-bold"><?= "Rp. " . number_format($parent->income, 0, ",", ".") ?></span></li>
        </ul>
    <?php endforeach; ?>
</div>

<div class="d-flex flex-column mb-4 p-5 rounded-4 bg-white">
    <p class="mb-4 fw-bold" style="font-size: 1.25rem;">Alamat Tempat Tinggal</p>

    <ul>
        <li>Alamat Lengkap : <span class="fw-bold"><?= $parents[0]->address ?></span></li>
    </ul>
</div>