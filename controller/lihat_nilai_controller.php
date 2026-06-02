<?php

require(__DIR__ . '/../config/db.php');

// user yang login
$user_id = $_SESSION['user_id'];

// ambil data siswa berdasarkan user login
$get_siswa = mysqli_query($conn, "
    SELECT id
    FROM siswa
    WHERE user_id = '$user_id'
");

$siswa = mysqli_fetch_assoc($get_siswa);
$siswa_id = $siswa['id'];

// ambil nilai siswa
$query = mysqli_query($conn, "
    SELECT n.*, mp.nama AS nama_mapel
    FROM nilai n
    JOIN mata_pelajaran mp ON n.mapel_id = mp.id
    WHERE n.siswa_id = '$siswa_id'
");
