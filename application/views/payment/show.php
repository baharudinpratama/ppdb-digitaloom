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

        <div class="d-flex justify-content-between align-items-center">
            <?php
            $text = '';
            $color = '';

            switch ($student->reg_status) {
                case 'new':
                    $text = 'Sedang Diproses';
                    $color = 'text-warning';
                    break;
                case 'approved':
                    $text = 'Disetujui';
                    $color = 'text-success';
                    break;
                case 'rejected':
                    $text = 'Ditolak';
                    $color = 'text-danger';
                    break;
                default:
                    $text = '';
                    $color = '';
                    break;
            }
            ?>
            <p class="fw-semibold">Status Pendaftaran : <span class="fw-bold <?= $color ?>"><?= $text ?></span></p>

            <?php if ($student->reg_status == 'new') : ?>
                <div class="dropdown">
                    <div role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= base_url('assets/img/dots.png') ?>" alt="Dots" width="35">
                    </div>
                    <ul class="dropdown-menu p-0" style="min-width: 15rem;">
                        <li class="m-0 px-3 py-2">
                            <div role="button" id="btn-approve" class="d-flex align-items-center gap-2">
                                <img src="<?= base_url('assets/img/check-fill-rounded.png') ?>" alt="Approved" width="20"> Peserta Didik Lolos
                            </div>
                        </li>
                        <li class="m-0">
                            <hr class="mx-3 my-0">
                        </li>
                        <li class="m-0 px-3 py-2">
                            <div role="button" id="btn-reject" class="d-flex align-items-center gap-2">
                                <img src="<?= base_url('assets/img/close-fill-rounded.png') ?>" alt="Rejected" width="20"> Peserta Didik Ditolak
                            </div>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
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
