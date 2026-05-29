<?php
session_start();
include '../../layout/header.php';
include '../../layout/sidebar_guru.php';
require __DIR__ . '/../../controller/input_nilai_controller.php';
?>

<div class="main-content">

    <div class="container py-4">

        <div class="card shadow mx-auto" style="max-width: 700px;">

            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">
                    Input Nilai Siswa
                </h4>
            </div>

            <div class="card-body">

                <form action="../../controller/simpan_nilai_controller.php" method="POST">

                    <input type="hidden"
                        name="siswa_id"
                        value="<?= $siswa['id'] ?>">

                    <div class="mb-3">
                        <label class="form-label">
                            Nama Siswa
                        </label>

                        <input type="text"
                            class="form-control"
                            value="<?= $siswa['nama'] ?>"
                            readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            NISN
                        </label>

                        <input type="text"
                            class="form-control"
                            value="<?= $siswa['nisn'] ?>"
                            readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Mata Pelajaran
                        </label>

                        <select name="mapel_id"
                            class="form-select"
                            required>

                            <option value="">
                                -- Pilih Mata Pelajaran --
                            </option>

                            <?php while ($mapel = mysqli_fetch_assoc($get_mapel)): ?>
                                <option value="<?= $mapel['id'] ?>">
                                    <?= $mapel['nama'] ?>
                                </option>
                            <?php endwhile; ?>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Nilai
                        </label>

                        <input type="number"
                            name="nilai"
                            min="0"
                            max="100"
                            class="form-control"
                            required>
                    </div>

                    <button type="submit"
                        class="btn btn-primary">
                        Simpan Nilai
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>
<?php include '../../layout/footer.php'; ?>