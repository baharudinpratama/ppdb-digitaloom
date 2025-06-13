<style>
    ul {
        margin: 0;
    }

    li {
        margin-bottom: 1rem;
    }
</style>

<div class="d-flex flex-column mb-4 p-5 rounded-4 bg-white">
    <p class="mb-5 fw-bold" style="font-size: 1.5rem;">Kelas Dipilih</p>
    <p class="mb-4 fw-bold" style="font-size: 1.25rem;">Informasi Kelas Tujuan</p>

    <ul>
        <li>Kelas Tujuan : <span class="fw-bold">Kelas 7</span></li>
        <li>Pilihan Kelas : <span class="fw-bold">Program Kelas <?= ucfirst($student->class_program) ?></span></li>
    </ul>
</div>