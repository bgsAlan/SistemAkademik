<?php
session_start();
require __DIR__ . '/../../controller/get_siswa_controller.php';

include '../../layout/header.php';
include '../../layout/sidebar_guru.php';
?>

<div class="main-content">

    <div class="container-fluid py-4">

        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Input Nilai Siswa</h5>
            </div>

            <div class="card-body">
                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $_SESSION['success']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <?php unset($_SESSION['success']); ?>
                <?php endif; ?>

                <?php if (isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $_SESSION['error']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <?php unset($_SESSION['error']); ?>
                <?php endif; ?>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th width="70">No</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th width="150">Input Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php while ($siswa = mysqli_fetch_assoc($get_siswa)): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $siswa['nisn'] ?></td>
                                    <td><?= $siswa['nama'] ?></td>
                                    <td>
                                        <a href="form_input_nilai_view.php?id=<?= $siswa['id'] ?>"
                                            class="btn btn-primary btn-sm">
                                            Input Nilai
                                        </a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>

</div>