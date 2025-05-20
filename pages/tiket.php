<?php
$idPemesanan = $_GET['id'];
include '../controller/koneksi.php';

$qPemesanan = $koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan='$idPemesanan'");
if ($qPemesanan->num_rows == 0) {
    echo "Data tidak ditemukan.";
    exit;
}

$pemesanan = $qPemesanan->fetch_assoc();
$idAkun = $pemesanan['id_akun'];
$idLapangan = $pemesanan['id_lapangan'];
$idPaket = $pemesanan['id_paket'];

$namaAkun = $koneksi->query("SELECT nama FROM akun WHERE id_akun='$idAkun'")->fetch_assoc()['nama'];
$nohpRaw = $koneksi->query("SELECT no_hp FROM akun WHERE id_akun='$idAkun'")->fetch_assoc()['no_hp'];
$nohp = '0' . substr($nohpRaw, 2);

$namaLapangan = $koneksi->query("SELECT nama_lapangan FROM lapangan WHERE id_lapangan='$idLapangan'")->fetch_assoc()['nama_lapangan'];
$paket = $koneksi->query("SELECT nama_paket, jam_paket FROM paket WHERE id_paket='$idPaket'")->fetch_assoc();

$penerima = '<li>Lapangan ' . $namaLapangan . '</li><li>Tanggal: ' . $pemesanan['tanggal_pemesanan'] . '</li><li>Paket: ' . $paket['nama_paket'] . ' | ' . $paket['jam_paket'] . '</li>';

$qrData = [
    "id_pemesanan" => $idPemesanan,
    "nama_pemesan" => $namaAkun,
    "nama_paket" => $paket['nama_paket'],
    "lapangan" => $namaLapangan,
    "tanggal_pemesanan" => $pemesanan['tanggal_pemesanan'],
    "jam_paket" => $paket['jam_paket'],
    "status_pemesanan" => $pemesanan['status_pemesanan']
];

$qrImage = 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=' . urlencode(json_encode($qrData, JSON_UNESCAPED_UNICODE));
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tiket Pemesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .ticket {
            width: 700px;
            border: 1px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
        }

        .left {
            padding: 20px;
            width: 60%;
        }

        .right {
            padding: 20px;
            width: 40%;
            border-left: 1px dashed #ccc;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .qr img {
            width: 150px;
            margin-top: 20px;
        }

        .info {
            margin-bottom: 10px;
        }

        .small {
            font-size: 10px;
            color: #555;
            margin-top: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .logo img {
            height: 20px;
            margin-right: 8px;
        }

        ul {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="ticket">
        <div class="left">
            <div class="logo">
                <img src="../assets/img/logos/logo.png" alt="Logo"> IronField
            </div>
            <div class="info"><strong>Nama:</strong> <?= $namaAkun ?></div>
            <div class="info"><strong>No HP:</strong> <?= $nohp ?></div>
            <div class="info"><strong>Pemesanan:</strong>
                <ul><?= $penerima ?></ul>
            </div>
            <div class="small">*harap menunjukkan qr-code saat check in lapangan</div>
        </div>
        <div class="right">
            <div><strong>QR-CODE TIKET</strong></div>
            <div class="qr">
                <img src="<?= $qrImage ?>" alt="QR Code">
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            window.print();
        }
    </script>

</body>

</html>