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

<div class="d-flex flex-column">
    <div class="d-flex mb-5">
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" width="50">
    </div>

    <div class="d-flex flex-column">
        <p class="mb-4 fw-bold" style="font-size: 12px;">Menu</p>

        <a href="<?= base_url('dashboard/' . $this->session->userdata('role')) ?>" class="d-flex align-items-center gap-3">
            <img src="<?= $active_menu === 'dashboard' ? base_url('/assets/images/sidebar/home-active.png') : base_url('/assets/images/sidebar/home.png') ?>" alt="dashboard" width="29">

            <p class="fw-bold <?= $active_menu === 'dashboard' ? 'menu-active' : '' ?>">Beranda</p>
        </a>

        <hr class="sidebar-hr">

        <a href="<?= base_url('students') ?>" class="d-flex align-items-center gap-3">
            <img src="<?= $active_menu === 'students' ? base_url('/assets/images/sidebar/doc-pencil-active.png') : base_url('/assets/images/sidebar/doc-pencil.png') ?>" alt="students" width="29">

            <p class="fw-bold <?= $active_menu === 'students' ? 'menu-active' : '' ?>">Data Pendaftar</p>
        </a>

        <hr class="sidebar-hr">
    </div>
</div>