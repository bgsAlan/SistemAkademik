<?php
require(__DIR__ . '/../config/db.php');

//ambil presensi guru yang aktif atau semua
$result = mysqli_query($conn,"SELECT * FROM presensi WHERE status = 'aktif' AND (target = 'guru' OR target = 'semua')ORDER BY id DESC;");



?> 