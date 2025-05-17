<?php
include 'koneksi.php';


$cek = $koneksi->query("SELECT * FROM lapangan LIMIT 1");
$lama = $cek->fetch_assoc();

$nama = $_POST['namaLapangan'];
$alamat = $_POST['alamatLapangan'];

$newImageName1 = $lama['foto1'];
$newImageName2 = $lama['foto2'];

// Cek dan proses upload foto1
if ($_FILES["fotoLapangan1"]["error"] !== 4) {
    $fileName1 = $_FILES["fotoLapangan1"]["name"];
    $tmpName1 = $_FILES["fotoLapangan1"]["tmp_name"];
    $imageExtension1 = strtolower(pathinfo($fileName1, PATHINFO_EXTENSION));
    $validImageExtension = ['jpg', 'jpeg', 'png'];

    if (in_array($imageExtension1, $validImageExtension)) {
        if (file_exists("../images/lapangan/" . $lama['foto1'])) {
            unlink("../images/lapangan/" . $lama['foto1']);
        }

        $newImageName1 = uniqid() . '.' . $imageExtension1;
        move_uploaded_file($tmpName1, '../images/lapangan/' . $newImageName1);
    }
}

// Cek dan proses upload foto2
if ($_FILES["fotoLapangan2"]["error"] !== 4) {
    $fileName2 = $_FILES["fotoLapangan2"]["name"];
    $tmpName2 = $_FILES["fotoLapangan2"]["tmp_name"];
    $imageExtension2 = strtolower(pathinfo($fileName2, PATHINFO_EXTENSION));
    $validImageExtension = ['jpg', 'jpeg', 'png'];

    if (in_array($imageExtension2, $validImageExtension)) {
        if (file_exists("../images/lapangan/" . $lama['foto2'])) {
            unlink("../images/lapangan/" . $lama['foto2']);
        }

        $newImageName2 = uniqid() . '.' . $imageExtension2;
        move_uploaded_file($tmpName2, '../images/lapangan/' . $newImageName2);
    }
}

// Update data
$cek = $koneksi->query("SELECT * FROM lapangan");

if ($cek->num_rows > 0) {
    $update = $koneksi->query("UPDATE lapangan SET nama_lapangan='$nama', alamat='$alamat', foto1='$newImageName1', foto2='$newImageName2'");
} else {
    $update = $koneksi->query("INSERT INTO lapangan(nama_lapangan, alamat, foto1, foto2) VALUES ('$nama', '$alamat', '$newImageName1', '$newImageName2')");
}

if ($update) {
    header("Location: ../pages/admin-lapangan.php?update=sukses");
} else {
    header("Location: ../pages/admin-lapangan.php?update=gagal");
}
