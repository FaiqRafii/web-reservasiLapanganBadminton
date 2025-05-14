<?php
include 'koneksi.php';

$idAkun = $_POST['namaPemesan'];
$idLapangan = $_POST['lapangan'];
$tanggal = $_POST['tanggal'];
$idPaket = $_POST['id_paket'];

$q = $koneksi->query("INSERT INTO pemesanan (id_akun, id_lapangan, id_paket, tanggal_pemesanan, status_pemesanan) VALUES ('" . $idAkun . "', '" . $idLapangan . "', '".$idPaket."','" . $tanggal . "', 'pending')");

if ($q) {
    header("Location: ../pages/admin-pemesanan.php?tambah=sukses");
} else {
    header("Location: ../pages/admin-pemesanan.php?tambah=gagal");
}
