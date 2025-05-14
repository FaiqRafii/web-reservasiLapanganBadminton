<?php
include 'koneksi.php';

if (isset($_GET['id_lapangan'])) {
    $lapangan = $_GET['id_lapangan'];

    $q = $koneksi->query("SELECT id_paket, nama_paket, jam_paket FROM paket WHERE id_lapangan='" . $lapangan . "'");
    $paket = [];
    while ($row = $q->fetch_assoc()) {
        $paket[] = $row;
    }
    echo json_encode($paket);
};
