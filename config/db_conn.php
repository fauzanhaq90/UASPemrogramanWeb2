<?php
error_reporting(0);
ini_set('date.timezone', 'Asia/Jakarta');
ini_set('max_execution_time', 300); //300 seconds = 5 minutes	
$host = "localhost";
$user = "fngx7438_uas";
$password = "{B0BVtj^mc*I";
$database = "fngx7438_uas";

$koneksi = mysqli_connect($host, $user, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal");
}

function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

$salt = "ajschJjnuhw8";
