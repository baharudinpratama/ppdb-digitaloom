<style>
    ul {
        margin: 0;
    }

    li {
        margin-bottom: 1rem;
    }
</style>

<div class="d-flex flex-column mb-4 p-5 rounded-4 bg-white">
    <p class="mb-5 fw-bold" style="font-size: 1.5rem;">Data Diri Calon Siswa</p>
    <p class="mb-3 fw-bold" style="font-size: 1.25rem;">Kategori Pendaftaran Calon Siswa</p>
    <p class="mb-5 fw-bold color-body">Peserta Didik Baru</p>
    <p class="mb-4 fw-bold" style="font-size: 1.25rem;">Informasi Pribadi</p>

    <ul>
        <li>Nomor Induk Kependudukan : <span class="fw-bold"><?= $student->nik ?></span></li>
        <li>NISN : <span class="fw-bold"><?= $student->nisn ?></span></li>
        <li>Nama Lengkap : <span class="fw-bold"><?= $student->name ?></span></li>
        <li>Jenis Kelamin : <span class="fw-bold"><?= ucfirst($student->gender) ?></span></li>
        <li>Tempat Lahir : <span class="fw-bold"><?= $student->birth_place ?></span></li>
        <li>Tanggal Lahir : <span class="fw-bold"><?= date('d-m-Y', strtotime($student->birth_date)) ?></span></li>
        <li>Kewarganegaraan : <span class="fw-bold"><?= $student->nationality ?></span></li>
        <li>Bahasa Sehari-hari : <span class="fw-bold"><?= $student->language ?></span></li>
    </ul>
</div>

<div class="d-flex flex-column mb-4 p-5 rounded-4 bg-white">
    <p class="mb-4 fw-bold" style="font-size: 1.25rem;">Alamat Tempat Tinggal</p>

    <ul>
        <li>Alamat Lengkap : <span class="fw-bold"><?= $student->address ?></span></li>
    </ul>
</div>

<div class="d-flex flex-column mb-4 p-5 rounded-4 bg-white">
    <p class="mb-4 fw-bold" style="font-size: 1.25rem;">Informasi Kesehatan</p>

    <ul>
        <li>Golongan Darah : <span class="fw-bold"><?= strtoupper($student->blood_type) ?></span></li>
        <li>Riwayat Penyakit : <span class="fw-bold"><?= $student->medical_history ?></span></li>
    </ul>
</div>

<div class="d-flex flex-column mb-4 p-5 rounded-4 bg-white">
    <p class="mb-4 fw-bold" style="font-size: 1.25rem;">Informasi Pendidikan Asal</p>

    <ul>
        <li>Nama Sekolah : <span class="fw-bold"><?= $student->prev_school_name ?></span></li>
        <li>NPSN : <span class="fw-bold"><?= $student->prev_school_npsn ?></span></li>
        <li>Akreditasi : <span class="fw-bold"><?= $student->prev_school_acc ?></span></li>
        <li>Alamat : <span class="fw-bold"><?= $student->prev_school_address ?></span></li>
        <li>Nomor Ijazah : <span class="fw-bold"><?= $student->diploma_number ?></span></li>
        <li>Tahun Ijazah : <span class="fw-bold"><?= $student->diploma_year ?></span></li>
    </ul>
</div>