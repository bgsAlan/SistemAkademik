<?php
session_start();

include '../../layout/header.php';
include '../../layout/sidebar_guru.php';
?>

<div class="main-content">

    <div class="container-fluid">

        <!-- HEADER -->
        <div class="mb-4">

            <h2 class="fw-bold">
                Dashboard Guru
            </h2>

            <p class="text-muted mb-0">
                Selamat datang di dashboard guru
            </p>

        </div>

        <!-- CARD MENU -->
        <div class="row g-4">

            <!-- PRESENSI -->
            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm rounded-4 h-100">

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
                            📅
                        </div>

                        <h4 class="fw-bold mb-3">
                            Presensi
                        </h4>

                        <p class="text-muted mb-4">
                            Lakukan presensi harian guru
                        </p>

                        <a href="presensi_guru_view.php"
                            class="btn btn-primary rounded-3 px-4">

                            Isi Presensi

                        </a>

                    </div>

                </div>

            </div>

            <!-- INPUT NILAI -->
            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm rounded-4 h-100">

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
                            📝
                        </div>

                        <h4 class="fw-bold mb-3">
                            Input Nilai
                        </h4>

                        <p class="text-muted mb-4">
                            Input nilai siswa berdasarkan mata pelajaran
                        </p>

                        <a href="input_nilai_view.php"
                            class="btn btn-success rounded-3 px-4">

                            Input Nilai

                        </a>

                    </div>

                </div>

            </div>

            <!-- DATA NILAI -->
            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body p-4">

                        <div
                            class="d-flex align-items-center justify-content-center mb-4"
                            style="
                                width:70px;
                                height:70px;
                                border-radius:18px;
                                background: rgba(234,179,8,0.15);
                                font-size:32px;
                            ">
                            📊
                        </div>

                        <h4 class="fw-bold mb-3">
                            Data Nilai
                        </h4>

                        <p class="text-muted mb-4">
                            Lihat data nilai siswa yang sudah diinput
                        </p>

                        <a href="list_nilai_view.php"
                            class="btn btn-warning rounded-3 px-4 text-white">

                            Lihat Nilai

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include '../../layout/footer.php'; ?>