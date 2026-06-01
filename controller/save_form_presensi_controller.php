<?php

session_start();
require("../config/db.php");

if (isset($_POST['submit'])) {

    $presensi_id = $_POST['presensi_id'];
    $status = $_POST['form-presensi'];
    $user_id = $_SESSION['user_id'];

    // Cek apakah sudah mengisi presensi
    $check = mysqli_query(
        $conn,
        "SELECT * FROM presensi_detail
         WHERE presensi_id = '$presensi_id'
         AND user_id = '$user_id'"
    );

    if (mysqli_num_rows($check) > 0) {

        $_SESSION['error'] = "Anda sudah mengisi presensi";

        if ($_SESSION['role'] == 'guru') {
            header("Location: ../view/guru/presensi_guru_view.php");
        } elseif ($_SESSION['role'] == 'siswa') {
            header("Location: ../view/siswa/presensi_view.php");
        }

        exit;
    }

    // Simpan presensi
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

    // Pesan hasil
    if ($query) {
        $_SESSION['success'] = "Presensi berhasil diisi";
    } else {
        $_SESSION['error'] = "Gagal mengisi presensi";
    }

    // Redirect sesuai role
    if ($_SESSION['role'] == 'guru') {
        header("Location: ../view/guru/presensi_guru_view.php");
    } elseif ($_SESSION['role'] == 'siswa') {
        header("Location: ../view/siswa/presensi_view.php");
    } else {
        header("Location: ../index.php");
    }

    exit;
}
