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
    <div class="d-flex flex-column mb-3 py-4">
        <h1 class="fw-bold" style="font-size: 25px;">Form Akun Siswa</h1>
    </div>

    <div class="d-flex flex-column mb-5 p-5 rounded-4 bg-white">
        <div class="d-flex flex-column mb-3 gap-1">
            <p class="fw-bold">Calon Peserta Didik</p>
            <p class="fw-semibold color-body">ID / No. Pendaftaran : </p>
            <p class="fw-semibold color-body">NISN : <?= $student->nisn ?></p>
            <p class="fw-semibold">Jenjang Dipilih : Mts / Kelas 7</p>
        </div>
    </div>

    <div class="d-flex flex-column mb-4 p-5 rounded-4 bg-white">
        <div class="col-md-6 mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" value="<?= $user->username ?? '' ?>" placeholder="Username" <?= isset($user->username) ? 'disabled' : '' ?>>
        </div>
        <div class="col-md-6 mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="col-md-6 mb-3">
            <label for="confirm-password" class="form-label">Confirm Password</label>
            <input type="text" class="form-control" id="confirm-password" placeholder="Confirm Password">
        </div>
    </div>

    <div class="d-flex align-items-center gap-3">
        <button id="btn-submit" class="btn bg-primary text-white" style="width: 12rem;">Simpan</button>
        <a href="<?= base_url('/users') ?>" class="btn bg-transparent border-secondary text-secondary" style="width: 7.5rem;">Batal</a>
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