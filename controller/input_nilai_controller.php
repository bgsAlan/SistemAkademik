<?php

require __DIR__ . '/../config/db.php';

$id = $_GET['id'];

$result = mysqli_query(
    $conn,
    "SELECT * FROM siswa WHERE id = '$id'"
);

$siswa = mysqli_fetch_assoc($result);

$get_mapel = mysqli_query(
    $conn,
    "SELECT * FROM mata_pelajaran ORDER BY nama"
);
