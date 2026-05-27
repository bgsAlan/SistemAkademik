<?php include '../../layout/header.php'; ?>
<?php include '../../layout/sidebar.php'; ?>

<div class="main-content">

    <div class="container-fluid">

        <div class="card card-box shadow-sm p-5">

            <div class="text-center mb-5">
                <h1 class="fw-bold">
                    Tambah User
                </h1>

                <p class="text-muted">
                    Pilih jenis user yang ingin ditambahkan ke sistem
                </p>
            </div>

            <div class="row g-4 justify-content-center">

                <!-- Tambah Guru -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">

                        <div class="card-body p-4">

                            <div
                                class="d-flex align-items-center justify-content-center mb-4"
                                style="
                                    width:70px;
                                    height:70px;
                                    border-radius:18px;
                                    background: rgba(34,197,94,0.15);
                                    font-size:32px;
                                ">
                                👨‍🏫
                            </div>

                            <h4 class="fw-bold mb-3">
                                Tambah Guru
                            </h4>

                            <p class="text-secondary mb-4">
                                Menambahkan data guru baru ke dalam sistem presensi sekolah.
                            </p>

                            <a href="add_guru_view.php"
                                class="btn btn-success rounded-3 px-4">
                                Tambah Guru
                            </a>

                        </div>

                    </div>
                </div>

                <!-- Tambah Siswa -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">

                        <div class="card-body p-4">

                            <div
                                class="d-flex align-items-center justify-content-center mb-4"
                                style="
                                    width:70px;
                                    height:70px;
                                    border-radius:18px;
                                    background: rgba(59,130,246,0.15);
                                    font-size:32px;
                                ">
                                🎓
                            </div>

                            <h4 class="fw-bold mb-3">
                                Tambah Siswa
                            </h4>

                            <p class="text-secondary mb-4">
                                Menambahkan data siswa baru ke dalam sistem presensi sekolah.
                            </p>

                            <a href="add_siswa_view.php"
                                class="btn btn-primary rounded-3 px-4">
                                Tambah Siswa
                            </a>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<?php include '../../layout/footer.php'; ?>