<?php
include '../config/db_conn.php';
include '../session.php';

$dana = $_POST['dana'];
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$alokasi = $_POST['alokasi'];

if (is_null($alokasi)) {
    echo "<script>alert('Sorry your data empty');
   window.location = '../page/add-data';</script>";
} else {
    $sql = "INSERT INTO data (alokasi,dana,nama,hp,email,update_user) VALUES ('$alokasi','$dana','$nama','$hp','$email', '$username')";
    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('New Data Was Inputed Successfully');
        window.location = '../page/add-data';</script>";
    } else {
        echo 'ada yang salah dengan dirimu';
    }

    $koneksi->close();
}
