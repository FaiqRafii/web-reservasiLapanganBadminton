<?php
include 'koneksi.php';

if(isset($_GET['idPemesanan'])&&isset($_GET['idAkun'])&&isset($_GET['noHp'])&&isset($_GET['lapangan'])&&isset($_GET['tanggal'])&&isset($_GET['idPaket'])){
    $idPemesanan=$_GET['idPemesanan'];
    $idAkun=$_GET['idAkun'];
    $noHp=$_GET['noHp'];
    $lapangan=$_GET['lapangan'];
    $tanggal=$_GET['tanggal'];
    $idPaket=$_GET['idPaket'];

    // echo $idPemesanan.$idAkun.$noHp.$lapangan.$tanggal.$idPaket;
    $update=$koneksi->query("UPDATE pemesanan SET id_akun='".$idAkun."', id_lapangan='".$lapangan."', id_paket='".$idPaket."', tanggal_pemesanan='".$tanggal."' WHERE id_pemesanan=".$idPemesanan."");

    if($update){
        header ('Location: ../pages/admin-pemesanan.php?update=sukses');
    }else{
        header ('Location: ../pages/admin-pemesanan.php?update=gagal');
    }

}