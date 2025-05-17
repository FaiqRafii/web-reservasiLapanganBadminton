<?php
include 'koneksi.php';

$idAkun = $_POST['id_akun'];
$idLapangan = $_POST['inputLapangan'];
$tanggal = $_POST['inputTanggal'];
$idPaket = $_POST['id_paket'];

$q = $koneksi->query("INSERT INTO pemesanan (id_akun, id_lapangan, id_paket, tanggal_pemesanan, status_pemesanan) VALUES ('" . $idAkun . "', '" . $idLapangan . "', '".$idPaket."','" . $tanggal . "', 'pending')");

if ($q) {
    header("Location: ../pages/pembayaran.php");
} else {
    header("Location: ../index.php");
}
