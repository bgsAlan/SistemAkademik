<?php

session_start();

require("../config/db.php");

if (isset($_POST['submit'])) {

    $presensi_id = $_POST['presensi_id'];

    $status =
        $_POST['form-presensi'];

    // ambil user login
    $user_id =
        $_SESSION['user_id'];
    // CEK SUDAH ABSEN
    $check = mysqli_query(
        $conn,

        "SELECT * FROM presensi_detail

    WHERE
    presensi_id='$presensi_id'
    AND

    user_id='$user_id'"
    );

    if (mysqli_num_rows($check) > 0) {

        $_SESSION['error'] =
            "Anda sudah mengisi presensi";

        header("Location: ../view/guru/presensi_guru_view.php");
        exit;
    }
    // INSERT PRESENSI

    $query = mysqli_query(
        $conn,

        "INSERT INTO presensi_detail

    (
        presensi_id,
        user_id,
        status_kehadiran
    )

    VALUES

    (
        '$presensi_id',
        '$user_id',
        '$status'
    )"
    );

    // HASIL

    if ($query) {

        $_SESSION['success'] =
            "Presensi berhasil diisi";
    } else {

        $_SESSION['error'] =
            "Gagal mengisi presensi";
    }

    header("Location: ../view/guru/presensi_guru_view.php");
    exit;
}
