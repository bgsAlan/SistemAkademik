<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Guru</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Form Tambah Guru</h3>
                    </div>
                    <?php if (isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['error']; ?>
                        </div>
                        <?php unset($_SESSION['error']); ?>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="alert alert-success">
                            <?= $_SESSION['success']; ?>
                        </div>
                        <?php unset($_SESSION['success']); ?>
                    <?php endif; ?>
                    <div class="card-body">
                        <form action="../../controller/add_guru_controller.php" method="POST">

                            <div class="mb-3">
                                <label class="form-label">Nama Guru</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama guru" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">NIP</label>
                                <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary w-100">
                                Tambah Guru
                            </button>

                        </form>
                        <a href="dashboard_admin_view.php" class="btn btn-warning w-100 mt-2">
                            Kembali
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>