<?php

session_start();

require('../../controller/get_presensi_guru_controller.php');

include '../../layout/header.php';
include '../../layout/sidebar_guru.php';

?>

<div class="main-content">

    <div class="container-fluid">

        <div class="mb-4">

            <h2 class="fw-bold">
                Presensi Guru
            </h2>

            <p class="text-muted">
                Daftar presensi aktif
            </p>

        </div>

        <div class="row g-4">

            <?php if (mysqli_num_rows($result) > 0) : ?>

                <?php while ($presensi = mysqli_fetch_assoc($result)) : ?>

                    <div class="col-lg-4">

                        <div class="card border-0 shadow-sm rounded-4">

                            <div class="card-body p-4">

                                <h4 class="fw-bold mb-3">
                                    <?= $presensi['judul']; ?>
                                </h4>

                                <p class="text-muted mb-2">
                                    Tanggal:
                                    <?= $presensi['tanggal']; ?>
                                </p>

                                <p class="text-muted mb-4">
                                    Jam:
                                    <?= $presensi['jam_dibuka']; ?>
                                </p>

                                <a
                                    href="../../controller/isi_presensi_guru_controller.php?id=<?= $presensi['id']; ?>"

                                    class="btn btn-primary rounded-3">

                                    Isi Presensi

                                </a>

                            </div>

                        </div>

                    </div>

                <?php endwhile; ?>

            <?php else : ?>

                <div class="col-12">

                    <div class="alert alert-secondary">

                        Tidak ada presensi aktif

                    </div>

                </div>

            <?php endif; ?>

        </div>

    </div>

</div>

<?php include '../../layout/footer.php'; ?>