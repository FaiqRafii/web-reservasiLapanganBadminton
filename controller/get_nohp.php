<?php
include 'koneksi.php';

if (isset($_GET['id_akun'])) {
    $id = $_GET['id_akun'];
    $query = $koneksi->query("SELECT no_hp FROM akun WHERE id_akun = '$id'");
    $dataRaw = $query->fetch_assoc()['no_hp'];
    $data = '0' . substr($dataRaw, 2);
    echo $data;
}
