<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (!is_numeric($id)) {
        header("Location: ../pages/admin-akun.php?hapus=gagal");
        exit;
    }

    $hasil = $koneksi->query("DELETE FROM akun WHERE id_akun=$id");

    if($hasil){
        header("Location:../pages/admin-akun.php?hapus=sukses");
    }else{
        header("Location:../pages/admin-akun.php?hapus=gagal");
    }
}
