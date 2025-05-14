<?php
include 'koneksi.php';

$dataGambar = $koneksi->query("SELECT foto1, foto1_tipe FROM lapangan LIMIT 1")->fetch_array();
$filename = $dataGambar['file_name'];
$mime_type = $dataGambar['foto1_tipe']; 
$filedata = $dataGambar['foto1']; 
header("content-disposition: inline; filename=$filename");
header("content-type: $mime_type1");
header("content-length: " . strlen($filedata));
echo $filedata;
