<?php
include 'koneksi.php';

$id=$_POST['id_akun'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$no_hp=$_POST['no_hp'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$role=$_POST['role'];

if(!empty($_POST['password'])){
    $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $update=$koneksi->query("UPDATE akun SET nama='".$nama."', email='".$email."', password='".$password."', no_hp='".$no_hp."', jenis_kelamin='".$jenis_kelamin."', role='".$role."' WHERE id_akun='".$id."'");
    if($update){
        header("Location:../pages/admin-akun.php?update=sukses");
    }else{
        header("Location:../pages/admin-akun.php?update=gagal");
    }
}else{
    $update=$koneksi->query("UPDATE akun SET nama='".$nama."', email='".$email."', no_hp='".$no_hp."', jenis_kelamin='".$jenis_kelamin."', role='".$role."' WHERE id_akun='".$id."'");
    if($update){
        header("Location:../pages/admin-akun.php?update=sukses");
    }else{
        header("Location:../pages/admin-akun.php?update=gagal");
    }
}