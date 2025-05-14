<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ironfield';

$koneksi = mysqli_connect($host, $username, $password, $database);

if ($koneksi) {
} else {
    echo 'Server not connected';
}
