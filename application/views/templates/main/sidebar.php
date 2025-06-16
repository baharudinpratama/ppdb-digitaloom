<style>
    a {
        color: var(--color-body);
        text-decoration: none;
    }

    .sidebar-hr {
        margin: 1rem 0;
        border-top: none;
        border-bottom: 3px solid #eaeaea;
        opacity: 100;
    }

    .menu-active {
        color: #43B638;
    }
</style>

<div class="position-relative d-flex flex-column h-100">
    <div class="d-flex mb-5">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" width="50">
    </div>

    <?php if ($this->session->role === 'admin') : ?>
        <div class="d-flex flex-column">
            <p class="mb-4 fw-bold" style="font-size: 12px;">Menu</p>

            <a href="<?= base_url('dashboard/' . $this->session->userdata('role')) ?>" class="d-flex align-items-center gap-3">
                <img src="<?= $active_menu === 'dashboard' ? base_url('/assets/img/sidebar/home-active.png') : base_url('/assets/img/sidebar/home.png') ?>" alt="dashboard" width="29">

                <p class="fw-bold <?= $active_menu === 'dashboard' ? 'menu-active' : '' ?>">Beranda</p>
            </a>

            <hr class="sidebar-hr">

            <a href="<?= base_url('students') ?>" class="d-flex align-items-center gap-3">
                <img src="<?= $active_menu === 'students' ? base_url('/assets/img/sidebar/doc-pencil-active.png') : base_url('/assets/img/sidebar/doc-pencil.png') ?>" alt="students" width="29">

                <p class="fw-bold <?= $active_menu === 'students' ? 'menu-active' : '' ?>">Data Pendaftar</p>
            </a>

            <hr class="sidebar-hr">

            <div role="button" id="selection-menu" class="d-flex align-items-center gap-3">
                <img src="<?= in_array($active_menu, ['payment', 'test']) ? base_url('/assets/img/sidebar/flowchart-active.png') : base_url('/assets/img/sidebar/flowchart.png') ?>" alt="selection" width="29">

                <p class="fw-bold <?= in_array($active_menu, ['payment', 'test']) ? 'menu-active' : '' ?>">Seleksi Calon Siswa</p>

                <div class="ms-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 14.975q-.2 0-.375-.062T11.3 14.7l-4.6-4.6q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l3.9 3.9l3.9-3.9q.275-.275.7-.275t.7.275t.275.7t-.275.7l-4.6 4.6q-.15.15-.325.213t-.375.062" />
                    </svg>
                </div>
            </div>

            <div id="selection-submenu" class="ps-4" style="display: none;">
                <div style="margin: 2rem 0;"></div>

                <a href="<?= base_url('payments') ?>" class="d-flex align-items-center gap-3">
                    <img src="<?= $active_menu === 'payment' ? base_url('/assets/img/sidebar/payment-active.png') : base_url('/assets/img/sidebar/payment.png') ?>" alt="dashboard" width="29">

                    <p class="fw-bold <?= $active_menu === 'payment' ? 'menu-active' : '' ?>">Data Pembayaran</p>
                </a>

                <div style="margin: 2rem 0;"></div>

                <a href="<?= base_url('tests') ?>" class="d-flex align-items-center gap-3">
                    <img src="<?= $active_menu === 'test' ? base_url('/assets/img/sidebar/test-active.png') : base_url('/assets/img/sidebar/test.png') ?>" alt="students" width="29">

                    <p class="fw-bold <?= $active_menu === 'test' ? 'menu-active' : '' ?>">Data Tes</p>
                </a>
            </div>

            <hr class="sidebar-hr">

            <div role="button" id="re-reg-menu" class="d-flex align-items-center gap-3">
                <img src="<?= in_array($active_menu, ['user', 'reg-file']) ? base_url('/assets/img/sidebar/student-active.png') : base_url('/assets/img/sidebar/student.png') ?>" alt="re-reg" width="29">

                <p class="fw-bold <?= in_array($active_menu, ['user', 'reg-file']) ? 'menu-active' : '' ?>">Daftar Ulang Calon Siswa</p>

                <div class="ms-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 14.975q-.2 0-.375-.062T11.3 14.7l-4.6-4.6q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l3.9 3.9l3.9-3.9q.275-.275.7-.275t.7.275t.275.7t-.275.7l-4.6 4.6q-.15.15-.325.213t-.375.062" />
                    </svg>
                </div>
            </div>

            <div id="re-reg-submenu" class="ps-4" style="display: none;">
                <div style="margin: 2rem 0;"></div>

                <a href="<?= base_url('users') ?>" class="d-flex align-items-center gap-3">
                    <img src="<?= $active_menu === 'user' ? base_url('/assets/img/sidebar/user-setting-active.png') : base_url('/assets/img/sidebar/user-setting.png') ?>" alt="dashboard" width="29">

                    <p class="fw-bold <?= $active_menu === 'user' ? 'menu-active' : '' ?>">Daftar Akun</p>
                </a>

                <div style="margin: 2rem 0;"></div>

                <a href="<?= base_url('tests') ?>" class="d-flex align-items-center gap-3">
                    <img src="<?= $active_menu === 'reg-file' ? base_url('/assets/img/sidebar/user-file-active.png') : base_url('/assets/img/sidebar/user-file.png') ?>" alt="students" width="29">

                    <p class="fw-bold <?= $active_menu === 'reg-file' ? 'menu-active' : '' ?>">Data Pendaftaran Ulang</p>
                </a>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($this->session->role === 'student') : ?>
        <div class="d-flex flex-column mb-5 gap-1">
            <p class="fw-bold" style="font-size: 0.75rem;">NISN : </p>
            <p class="fw-bold text-black" style="font-size: 1.125rem;">Nama</p>
            <p class="fw-medium text-black">Jenjang Dipilih : Mts / Kelas 7</p>
        </div>

        <div class="d-flex flex-column">
            <p class="mb-4 fw-bold" style="font-size: 12px;">Menu</p>

            <a href="<?= base_url('rereg/upload') ?>" class="d-flex align-items-center gap-3">
                <img src="<?= $active_menu === 'upload' ? base_url('/assets/img/sidebar/file-upload-active.png') : base_url('/assets/img/sidebar/file-upload.png') ?>" alt="upload" width="29">

                <p class="fw-bold <?= $active_menu === 'upload' ? 'menu-active' : '' ?>">Upload Dokumen Persyaratan</p>
            </a>

            <hr class="sidebar-hr">

            <a href="<?= base_url('rereg/pay') ?>" class="d-flex align-items-center gap-3">
                <img src="<?= $active_menu === 'pay' ? base_url('/assets/img/sidebar/pay-active.png') : base_url('/assets/img/sidebar/pay.png') ?>" alt="pay" width="29">

                <p class="fw-bold <?= $active_menu === 'pay' ? 'menu-active' : '' ?>">Pembayaran Daftar Ulang</p>
            </a>

            <hr class="sidebar-hr">

            <a href="<?= base_url('rereg/notification') ?>" class="d-flex align-items-center gap-3">
                <img src="<?= $active_menu === 'notification' ? base_url('/assets/img/sidebar/loudspeaker-active.png') : base_url('/assets/img/sidebar/loudspeaker.png') ?>" alt="notification" width="29">

                <p class="fw-bold <?= $active_menu === 'notification' ? 'menu-active' : '' ?>">Pengumuman</p>
            </a>
        </div>
    <?php endif; ?>

    <div class="position-absolute d-flex w-100 p-4 justify-content-center bg-white" style="bottom: 0;">
        <a href="<?= base_url('logout') ?>" class="btn btn-outline-danger w-100 bg-white text-danger">Logout</a>
    </div>
</div>