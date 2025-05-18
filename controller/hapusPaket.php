<?php
include 'koneksi.php';
$id = $_GET['id'];

$hapus = $koneksi->query("DELETE FROM paket WHERE id_paket=".$id."");

if ($hapus) {
    header("Location:./pages/admin-paket.php?hapus=sukses");
} else {
    header("Location:./pages/admin-paket.php?hapus=gagal");
}
