<?php

require __DIR__ . '/../config/db.php';



require __DIR__ . '/../config/db.php';

$nama = $_GET['nama'] ?? '';

$sql = "
SELECT
    nilai.id,
    siswa.nisn,
    siswa.nama AS nama_siswa,
    mata_pelajaran.nama AS nama_mapel,
    nilai.nilai
FROM nilai
JOIN siswa
    ON nilai.siswa_id = siswa.id
JOIN mata_pelajaran
    ON nilai.mapel_id = mata_pelajaran.id
";

if (!empty($nama)) {
    $sql .= " WHERE siswa.nama LIKE '%$nama%'";
}

$sql .= " ORDER BY siswa.nama ASC";

$get_nilai = mysqli_query($conn, $sql);
?>