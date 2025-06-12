<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">
    <style>
        .form-label {
            margin: 0 0 1rem;
        }

        .form-control {
            padding: 1rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="row h-100 p-2">
            <div class="col-md-6 p-0">
                <div class="h-100 position-relative p-0">
                    <img src="<?= base_url('assets/images/login-bg.jpg') ?>" class="w-100 h-100 object-fit-cover rounded-3" alt="Background">
                    <div class="position-absolute top-0 start-0 w-100 h-100 p-4 d-flex flex-column justify-content-end align-items-start rounded-3 bg-dark bg-opacity-50 text-white">
                        <div class="position-absolute" style="top: 2rem; left: 2rem;">
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" width="90">
                                <div class="d-flex flex-column text-start fw-semibold" style="max-width: 16rem;">
                                    <p>PESANTREN</p>
                                    <p>TAHFIZH EKONOMI ISLAM MULTAZAM</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-4" style="max-width: 28rem;">
                            <h1 class="fw-bold" style="font-size: 30px;">Selamat Datang Di Platform PPDB Al-Multazam</h1>
                            <p>Kami menyambut dengan hangat para calon peserta didik dan orang tua yang akan bergabung bersama kami untuk memulai perjalanan pendidikan yang lebih baik</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 p-0 d-flex align-items-center justify-content-center">
                <div class="w-100" style="max-width: 30rem;">
                    <div class="d-flex flex-column gap-5">
                        <div class="d-flex flex-column">
                            <h2 class="mb-4 fw-bold">Login</h2>
                            <p class="color-body">Masuk dan selesaikan proses upload berkas dan daftar ulang Calon Peserta Didik</p>
                        </div>

                        <form id="form">
                            <div class="mb-4">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username Calon Peserta Didik..." required>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password Calon Peserta Didik..." required>
                            </div>

                            <div class="form-check ms-2 mb-5">
                                <input class="form-check-input" type="checkbox" id="rememberLogin">
                                <label class="form-check-label ms-2" for="rememberLogin">
                                    Ingatkan saya ketika login
                                </label>
                            </div>

                            <div class="d-grid mb-5">
                                <button type="submit" class="btn btn-primary p-2">Masuk</button>
                            </div>
                        </form>

                        <div class="d-flex justify-content-between align-items-center fw-medium">
                            <p class="color-body">PTEI Al-Multazam</p>
                            <div class="vr mx-3" style="width: 3px;"></div>
                            <p class="color-body">Copyright@2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-loading" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex flex-column p-5 align-items-center">
                        <img src="<?= base_url('/assets/images/message.gif') ?>" alt="Message" width="160" class="img-fluid mb-4">
                        <p class="fw-bold" style="font-size: 20px;">Sedang Mengirim...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        const modalLoading = new bootstrap.Modal("#modal-loading");

        $("#form").on("submit", function(e) {
            e.preventDefault();

            $.ajax({
                method: "POST",
                url: "<?= base_url('/auth/login') ?>",
                data: {
                    username: $("#username").val(),
                    password: $("#password").val(),
                },
                dataType: "json",
                beforeSend: function() {
                    modalLoading.show();
                },
                complete: function() {
                    modalLoading.hide();
                },
                success: function(response) {
                    if (response.success) {
                        localStorage.setItem("session", JSON.stringify({
                            id: response.data.id,
                            username: response.data.username,
                            role: response.data.student_id === null ? "admin" : "murid"
                        }));

                        response.data.student_id === null ?
                            window.location.href = "/ppdb/dashboard/admin" :
                            window.location.href = "/ppdb/dashboard/student";
                    } else {
                        setTimeout(function() {
                            modalLoading.hide();
                            alert(response.message);
                        }, 3000);
                    }
                },
                error: function(xhr, status, error) {
                    setTimeout(function() {
                        modalLoading.hide();
                        alert("Terjadi kesalahan.");
                    }, 3000);
                }
            });
        });
    </script>
</body>

</html>