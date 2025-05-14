<?php
include 'koneksi.php';

if (isset($_GET['lapangan']) && isset($_GET['tanggal'])) {
    $lapangan = $_GET['lapangan'];
    $tanggal = $_GET['tanggal'];

    $q1 = $koneksi->query("SELECT COUNT(*) as total_paket FROM paket WHERE id_lapangan='" . $lapangan . "'");
    $totalPaket = $q1->fetch_assoc()['total_paket'] ?? 0;

    $q2 = $koneksi->query("SELECT COUNT(*) as total_dipesan FROM pemesanan WHERE tanggal_pemesanan='" . $tanggal . "'");
    $totalDipesan = $q2->fetch_assoc()['total_dipesan'] ?? 0;
    $penuh = ($totalDipesan >= $totalPaket && $totalPaket > 0);
    
    file_put_contents("debug.log", "Tanggal: $tanggal, Lapangan: $lapangan\nTotal Paket: $totalPaket Total Dipesan: $totalDipesan", FILE_APPEND);


    echo json_encode(['penuh'=>$penuh]);
}
