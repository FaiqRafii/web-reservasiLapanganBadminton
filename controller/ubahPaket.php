<?php
include 'koneksi.php';

$idPaket = $_POST['idPaket'];
$namaPaket = $_POST['namaPaket'];
$idLapangan = $_POST['lapangan'];
$jamMulai = $_POST['jamMulai'];
$jamSelesai = $_POST['jamSelesai'];
$jamPaket = $jamMulai . " - " . $jamSelesai;
$harga=str_replace('.','',$_POST['hargaPaket']);

$update=$koneksi->query("UPDATE paket SET nama_paket='".$namaPaket."',  id_lapangan='".$idLapangan."', jam_paket='".$jamPaket."', harga_paket='".$harga."'");

if($update){
    header("Location:../pages/admin-paket.php?update=sukses");
}else{
    header("Location:../pages/admin-paket.php?update=gagal");
}
