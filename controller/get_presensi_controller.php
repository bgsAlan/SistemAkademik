<?php

require(__DIR__ . '/../config/db.php');

// ambil presensi aktif terbaru
$query = mysqli_query(
    $conn,
    "SELECT * FROM presensi
WHERE status='aktif'
ORDER BY id DESC
LIMIT 1"
);

$presensi = mysqli_fetch_assoc($query);

// total pengisi
$total_pengisi = 0;

if ($presensi) {

    $count = mysqli_query(
        $conn,
        "SELECT COUNT(*) as total
    FROM presensi_detail
    WHERE presensi_id='" . $presensi['id'] . "'"
    );

    $result = mysqli_fetch_assoc($count);

    $total_pengisi = $result['total'];
}
