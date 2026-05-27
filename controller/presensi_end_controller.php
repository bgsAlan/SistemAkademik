<?php

session_start();
require("../config/db.php");

$query = mysqli_query(
    $conn,
    "UPDATE presensi
SET status='ditutup'
WHERE status='aktif'"
);

if ($query) {

    $_SESSION['success'] =
        "Presensi berhasil ditutup";
} else {

    $_SESSION['error'] =
        "Gagal menutup presensi";
}

header("Location: ../view/admin/open_presensi_view.php");
exit;
