<?php
include 'koneksi.php';

if (isset($_GET['tanggal'])) {
    $tanggal = $_GET['tanggal'];
    $q = $koneksi->query("SELECT id_paket FROM pemesanan WHERE tanggal_pemesanan='" . $tanggal . "'");
    $data = [];

    while ($row = $q->fetch_assoc()) {
        $data[] = $row;
    }

    foreach ($data as $x) {
        file_put_contents("debug_cek_slot.log", "data: " . print_r($x, true) . "\n", FILE_APPEND);
    }



    echo json_encode($data);
}
