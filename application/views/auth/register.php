<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">
</head>

<body style="background-color: #eee;">
    <div class="container-fluid d-flex w-100 vh-100">
        <div class="d-flex w-100 justify-content-center align-items-center">
            <div class="d-flex flex-column p-5 rounded-3 bg-white">
                <div class="d-flex pb-5 justify-content-center">
                    <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" width="180">
                </div>
                <div class="d-flex flex-column pb-5" style="max-width: 32rem;">
                    <h1 class="fw-bold" style="font-size: 25px;">Pilih Jenis Pendaftaran Calon Siswa</h1>
                    <p class="fw-medium color-body">Pilihan ini akan menentukan jenis formulir dan dokumen yang perlu diisi dan diunggah.</p>
                </div>
                <div class="mb-5">
                    <label for="register-option" class="form-label">Jenis Pendaftaran</label>
                    <select class="form-select" name="register-option" id="register-option" aria-label="Jenis Pendaftaran">
                        <option value="">Pilih Jenis Pendaftaran Calon Siswa</option>
                        <option value="1">Peserta Didik Baru</option>
                    </select>
                </div>
                <div class="d-grid">
                    <a href="<?= base_url('/register/student') ?>" class="btn btn-primary p-2">Masuk</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>