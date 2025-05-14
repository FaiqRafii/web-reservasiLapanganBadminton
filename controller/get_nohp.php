<?php
include 'koneksi.php';

if (isset($_GET['id_akun'])) {
    $id = $_GET['id_akun'];
    $query = $koneksi->query("SELECT no_hp FROM akun WHERE id_akun = '$id'");
    $data = $query->fetch_assoc();
    echo json_encode($data);
}
