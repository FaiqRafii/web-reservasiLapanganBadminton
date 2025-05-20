<?php
include 'koneksi.php';

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$qCredentials = $koneksi->query("SELECT * FROM akun WHERE email='" . $email . "'");
if (!$qCredentials->num_rows > 0) {
    header('Location: ../login.php?status=emailSalah');
} else {
    $credential = $qCredentials->fetch_assoc();

    $isLogin = password_verify($password, $credential['password']);
    if (!$isLogin) {
        header('Location: ../login.php?status=paswordSalah');
    } else {
        $_SESSION['isLogin'] = true;
        $_SESSION['id_akun'] = $credential['id_akun'];
        $_SESSION['nama_akun'] = $credential['nama'];
        $_SESSION['email_akun'] = $credential['email'];
        $_SESSION['no_hp_akun'] = $credential['no_hp'];
        $_SESSION['role_akun'] = $credential['role'];
        if ($credential['role'] == 'admin') {
            header('Location: ../pages/admin.php');
        } else {
            header('Location: ../index.php');
        }
    }
}
