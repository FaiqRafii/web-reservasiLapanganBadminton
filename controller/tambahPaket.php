<?php
include 'koneksi.php';

$namaPaket = $_POST['namaPaket'];
$lapangan = (int) $_POST['lapangan'];
$jamMulai = (string) $_POST['jamMulai'];
$jamSelesai = (string) $_POST['jamSelesai'];
$jamPaket = $jamMulai . " - " . $jamSelesai;
$h=$_POST['hargaPaket'];
$harga=str_replace(".","",$h);

echo $lapangan;

$insert=$koneksi->query("INSERT INTO paket (id_lapangan, nama_paket, jam_paket, harga_paket) VALUES ('".$lapangan."','".$namaPaket."','".$jamPaket."','".$harga."')");

if($insert){
    header('Location:../pages/admin-paket.php?tambah=sukses');
}else{
    header('Location:../pages/admin-paket.php?tambah=gagal');
}