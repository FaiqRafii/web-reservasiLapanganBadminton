<?php
include 'koneksi.php';

$nama=$_POST['nama'];
$email=$_POST['email'];
$password=password_hash($_POST['password'], PASSWORD_DEFAULT) ;
$role=$_POST['role'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$no_hpRaw=$_POST['no_hp'];
$kodeId='62';
$no_hp = $kodeId.substr($no_hpRaw,1);


$hasil=$koneksi->query("INSERT INTO akun (nama,email,password,role,jenis_kelamin,no_hp) VALUES ('".$nama."','".$email."','".$password."','".$role."','".$jenis_kelamin."','".$no_hp."')");

if($hasil){
    header("Location: ../pages/admin-akun.php?tambah=sukses");
}else{
    header("Location: ../pages/admin-akun.php?tambah=gagal");
}
