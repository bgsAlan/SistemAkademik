<?php
session_start();
require("../config/db.php");
//Membuka presensi
if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $target = $_POST["target"];
    $desc = $_POST["description"];

    //Cek apakah ada presensi aktif
    $check = mysqli_query($conn, "SELECT* FROM presensi WHERE status='aktif';");
    if (mysqli_num_rows($check) > 0) {

        $_SESSION['error'] =
            "Masih ada presensi yang aktif";

        header("Location: ../view/admin/open_presensi_view.php");
        exit;
    }
    //Kirim ke presensi
    $sql_presensi = "INSERT INTO presensi(judul,target,tanggal,jam_dibuka,keterangan) VALUES ('$title','$target','$date','$time','$desc');";

    $query_presensi = mysqli_query($conn, $sql_presensi);

    if ($query_presensi) {

        $_SESSION['success'] = "Presensi berhasil dibuka";

        header("Location: ../view/admin/open_presensi_view.php");
        exit;
    } else {

        $_SESSION['error'] = "Gagal membuka presensi";

        header("Location: ../view/admin/open_presensi_view.php");
        exit;
    }
}
