<?php
session_start();
require("../config/db.php");
$error = "";
$success = "";
if (isset($_POST["submit"])) {
    $name = $_POST["nama"];
    $email = $_POST["email"];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $nip = $_POST["nip"];

    // cek email
    $check_email = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

    if (mysqli_num_rows($check_email) > 0) {
        $_SESSION['error'] = "Email sudah digunakan!";
        header("Location: ../view/admin/add_guru_view.php");
        exit;
    }

    // cek nip
    $check_nip = mysqli_query($conn, "SELECT * FROM guru WHERE nip = '$nip'");

    if (mysqli_num_rows($check_nip) > 0) {
        $_SESSION['error'] = "NIP sudah digunakan!";
        header("Location: ../view/admin/add_guru_view.php");
        exit;
    }

    //INSERT INTO users
    $sql_users = "INSERT INTO users(email,password,role) VALUES ('$email','$password','guru');";
    $result_users = mysqli_query($conn, $sql_users);
    //INSERT INTO guru
    if ($result_users) {
        //Ambil id users terakhir
        $user_id = mysqli_insert_id($conn);
        //Masukkan ke guru
        $sql_guru = "INSERT INTO guru(user_id,nama,nip) VALUES ('$user_id','$name','$nip');";
        $result_guru = mysqli_query($conn, $sql_guru);

        if ($result_guru) {

            $_SESSION['success'] = "Data guru berhasil ditambahkan!";
            header("Location: ../view/admin/add_guru_view.php");
            exit;
        } else {

            $_SESSION['error'] = "Data guru gagal ditambahkan!";
            header("Location: ../view/admin/add_guru_view.php");
            exit;
        }
    } else {

        $_SESSION['error'] = "Data user gagal ditambahkan!";
        header("Location: ../view/admin/add_guru_view.php");
        exit;
    }
}
