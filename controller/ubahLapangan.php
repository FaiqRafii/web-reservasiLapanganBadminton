<?php
include 'koneksi.php';

$cek=$koneksi->query("SELECT * FROM lapangan LIMIT 1");
$lama=$cek->fetch_assoc();

$nama = $_POST['namaLapangan'];
$alamat = $_POST['alamatLapangan'];
if ($_FILES["fotoLapangan1"]["error"] === 4 || $_FILES["fotoLapangan2"]["error"] === 4) {
    echo "<script>alert('Foto tidak ditemukan');</script>";
} else {
    $fileName1 = $_FILES["fotoLapangan1"]["name"];
    $fileName2 = $_FILES["fotoLapangan2"]["name"];
    $fileSize1 = $_FILES["fotoLapangan1"]["size"];
    $fileSize2 = $_FILES["fotoLapangan2"]["size"];
    $tmpName1 = $_FILES["fotoLapangan1"]["tmp_name"];
    $tmpName2 = $_FILES["fotoLapangan2"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension1 = explode('.', $fileName1);
    $imageExtension1 = strtolower(end($imageExtension1));
    $imageExtension2 = explode('.', $fileName2);
    $imageExtension2 = strtolower(end($imageExtension2));

    if (!in_array($imageExtension1, $validImageExtension) || !in_array($imageExtension2, $validImageExtension)) {
        header('Location: ../pages/admin-lapangan.php?update=gagal');
        exit;
    } else {
        if(file_exists("../images/lapangan/".$lama['foto1'])){
            unlink("../images/lapangan/".$lama['foto1']);
        }

        if(file_exists("../images/lapangan/".$lama['foto2'])){
            unlink("../images/lapangan/".$lama['foto2']);
        }

        $newImageName1 = uniqid();
        $newImageName1 .= '.' . $imageExtension1;
        $newImageName2 = uniqid();
        $newImageName2 .= '.' . $imageExtension2;

        move_uploaded_file($tmpName1, '../images/lapangan/' . $newImageName1);
        move_uploaded_file($tmpName2, '../images/lapangan/' . $newImageName2);
    }
}


// $foto1 = addslashes(file_get_contents($_FILES['fotoLapangan1']['tmp_name']));
// $foto1_tipe = getimageSize($_FILES['fotoLapangan1']['tmp_name']);
// $foto2 = addslashes(file_get_contents($_FILES['fotoLapangan2']['tmp_name']));
// $foto2_tipe = getimageSize($_FILES['fotoLapangan2']['tmp_name']);

// $fileName1 = $_FILES['fotoLapangan1']['name'];
// $mimeType1 = $_FILES['fotoLapangan1']['type'];
// $tmpFile1 = fopen($_FILES['fotoLapangan1']['tmp_name'], 'rb'); 
// $fileData1 = fread($tmpFile1, filesize($_FILES['fotoLapangan1']['tmp_name']));
// $fileData1 = addslashes($fileData1);

// $fileName2 = $_FILES['fotoLapangan2']['name'];
// $mimeType2 = $_FILES['fotoLapangan2']['type'];
// $tmpFile2 = fopen($_FILES['fotoLapangan2']['tmp_name'], 'rb'); 
// $fileData2 = fread($tmpFile2, filesize($_FILES['fotoLapangan2']['tmp_name']));
// $fileData2 = addslashes($fileData2);

$cek = $koneksi->query("SELECT * FROM lapangan");

if ($cek->num_rows > 0) {
    $update = $koneksi->query("UPDATE lapangan SET nama_lapangan='" . $nama . "', alamat='" . $alamat . "', foto1='" . $newImageName1 . "', foto2='" . $newImageName2 . "'");
} else {
    $update = $koneksi->query("INSERT INTO lapangan(nama_lapangan, alamat, foto1, foto2) VALUES ('$nama', '$alamat', '$newImageName1', '$newImageName2')");
}


if ($update) {
    header("Location: ../pages/admin-lapangan.php?update=sukses");
} else {
    header("Location: ../pages/admin-lapangan.php?update=gagal");
}
