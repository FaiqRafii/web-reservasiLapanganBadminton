<?php
include 'koneksi.php';

if (isset($_GET['idPemesanan'])) {
    $idPemesanan = $_GET['idPemesanan'];
    $status = $_GET['status'];

    if ($status == 'rejected') {
        $rejected = $koneksi->query("DELETE FROM pemesanan WHERE id_pemesanan='" . $idPemesanan . "'");

        if ($rejected) {
            header('Location: ../pages/admin.php?approval=rejected');
        } else {
            header('Location: ../pages/admin.php?approval=gagal');
        }
    } else {
        $approved = $koneksi->query("UPDATE pemesanan SET status_pemesanan='approved' WHERE id_pemesanan='" . $idPemesanan . "'");

        if ($approved) {
            header('Location: ../pages/admin.php?approval=approved');
        } else {
            header('Location: ../pages/admin.php?approval=gagal');
        }
    }
}
