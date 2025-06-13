<style>
    ul {
        margin: 0;
    }

    li {
        margin-bottom: 1rem;
    }
</style>

<div class="d-flex flex-column mb-4 p-5 rounded-4 bg-white">
    <p class="mb-5 fw-bold" style="font-size: 1.5rem;">Prestasi</p>
    <p class="mb-4 fw-bold" style="font-size: 1.25rem;">Dokumen Prestasi Calon Siswa</p>

    <?php if (sizeof($achievements) <= 0) : ?>
        <p class="fw-semibold fst-italic color-body">Tidak ada data file.</p>
    <?php else : ?>
        <?php foreach ($achievements as $index => $achievement) : ?>
            <ul>
                <li>
                    <div class="d-flex flex-column">
                        <p class="mb-1 fw-semibold">Prestasi <?= $index + 1 ?></p>
                        <p class="fw-semibold fst-italic color-body"><?= $achievement->original_name ?></p>
                    </div>
                </li>
            </ul>
        <?php endforeach; ?>
    <?php endif; ?>
</div>