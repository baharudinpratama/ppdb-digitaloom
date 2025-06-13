<style>
    hr {
        margin: 1rem 0;
        border-top: none;
        border-bottom: 3px solid #eaeaea;
        opacity: 100;
    }

    .nav-link {
        color: #198754 !important;
    }

    .nav-link.active {
        background-color: #198754 !important;
        color: white !important;
    }
</style>

<div class="d-flex flex-column p-3">
    <div class="d-flex flex-column py-4">
        <h1 class="fw-bold" style="font-size: 25px;">Verifikasi Data Calon Siswa</h1>
    </div>

    <div class="d-flex flex-column mb-5 p-5 rounded-4 bg-white">
        <div class="d-flex flex-column mb-3 gap-1">
            <p class="fw-bold">Calon Peserta Didik</p>
            <p class="fw-semibold color-body">ID / No. Pendaftaran : </p>
            <p class="fw-semibold color-body">NISN : <?= $student->nisn ?></p>
            <p class="fw-semibold">Jenjang Dipilih : Mts / Kelas 7</p>
        </div>

        <p class="fw-semibold">Tanggal Pendaftaran : <span class="fw-bold"><?= date('d-m-Y', strtotime($student->created_at)) ?></span></p>

        <hr style="margin: 3rem 0;">

        <p class="fw-semibold">Status Pendaftaran : <span class="fw-bold">Sedang Diproses</span></p>
    </div>

    <div class="d-flex flex-column mb-3 p-4 rounded-4 bg-white fw-bold">
        <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" style="min-height: 3.5rem;" id="pill-student-tab" data-bs-toggle="pill" data-bs-target="#pill-student" type="button" role="tab" aria-controls="pill-student" aria-selected="true">Data Diri Siswa</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" style="min-height: 3.5rem;" id="pill-parent-tab" data-bs-toggle="pill" data-bs-target="#pill-parent" type="button" role="tab" aria-controls="pill-parent" aria-selected="false">Data Orang Tua / Wali</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" style="min-height: 3.5rem;" id="pill-program-tab" data-bs-toggle="pill" data-bs-target="#pill-class-program" type="button" role="tab" aria-controls="pill-class-program" aria-selected="false">Kelas Dipilih</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" style="min-height: 3.5rem;" id="pill-achievement-tab" data-bs-toggle="pill" data-bs-target="#pill-achievement" type="button" role="tab" aria-controls="pill-achievement" aria-selected="false">Prestasi</button>
            </li>
        </ul>
    </div>

    <div class="tab-content" id="pills-content">
        <div class="tab-pane fade show active" id="pill-student" role="tabpanel" aria-labelledby="pill-student-tab" tabindex="0">
            <?php $this->load->view('student/show_tabs/student_tab', ['student' => $student]); ?>
        </div>
        <div class="tab-pane fade" id="pill-parent" role="tabpanel" aria-labelledby="pill-parent-tab" tabindex="0">
            <?php $this->load->view('student/show_tabs/parent_tab', ['parents' => $parents]); ?>
        </div>
        <div class="tab-pane fade" id="pill-class-program" role="tabpanel" aria-labelledby="pill-class-program-tab" tabindex="0">
            <?php $this->load->view('student/show_tabs/class_program_tab', ['student' => $student]); ?>
        </div>
        <div class="tab-pane fade" id="pill-achievement" role="tabpanel" aria-labelledby="pill-achievement-tab" tabindex="0">
            <?php $this->load->view('student/show_tabs/achievement_tab', ['achievements' => $achievements]); ?>
        </div>
    </div>
</div>