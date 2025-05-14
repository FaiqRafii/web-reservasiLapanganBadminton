<?php
include 'koneksi.php';

$dataGambar = $koneksi->query("SELECT foto2, foto2_tipe FROM lapangan LIMIT 1")->fetch_array();
$filename = $dataGambar['file_name'];
$mime_type = $dataGambar['foto2_tipe']; 
$filedata = $dataGambar['foto2']; 
header("content-disposition: inline; filename=$filename");
header("content-type: $mime_type1");
header("content-length: " . strlen($filedata));
echo $filedata;
