<?php
include 'koneksi.php';

if(isset($_GET['idPemesanan'])){
    $idPemesanan=$_GET['idPemesanan'];

    $hasil=$koneksi->query("DELETE FROM pemesanan WHERE id_pemesanan=".$idPemesanan." ");

    if($hasil){
        header('Location: ../pages/admin-pemesanan.php?hapus=sukses');
    }else{
        header('Location: ../pages/admin-pemesanan.php?hapus=gagal');
    }
}