<?php
require(__DIR__ . '/../config/db.php');
session_start();

$user_id = $_SESSION['user_id'];

$result = mysqli_query($conn, "SELECT * FROM presensi 
    WHERE status = 'aktif' 
    AND (target = 'guru' OR target = 'semua') 
    ORDER BY id DESC");
?>