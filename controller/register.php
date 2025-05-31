<?php
require_once 'koneksi.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$passwordRaw = $_POST['password'];
$noHpRaw = $_POST['noHp'];
$noHp = "62" . $noHpRaw;

$password = password_hash($passwordRaw, PASSWORD_DEFAULT);

$regist = $koneksi->query("INSERT INTO akun(nama,email,password,role,no_hp) VALUES ('$nama','$email','$password','user','$noHp')");
$idAkun = $koneksi->insert_id;

if ($regist) {
    $_SESSION['isLogin'] = true;
    $_SESSION['id_akun'] = $idAkun;
    $_SESSION['nama_akun'] = $nama;
    $_SESSION['email_akun'] = $email;
    $_SESSION['no_hp_akun'] = $noHp;
    $_SESSION['role_akun'] = 'user';

    header('Location: ../');
} else {
    header('Location: ../register.php?tambah=gagal');
}
