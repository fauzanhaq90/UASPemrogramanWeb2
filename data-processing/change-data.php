<?php
include '../config/db_conn.php';
include '../session.php';

@$parameter_id = base64_decode("$_GET[id]");
$id = str_replace("$salt", "", "$parameter_id");

if (isset($_POST['parameter'])) {
    $parameter = $_POST['parameter'];
} elseif (isset($_GET['parameter'])) {
    @$parameter = $_GET['parameter'];
} else {
    echo "<script>alert('No Parameter Detected');
   window.location = '../page/view-data';</script>";
}

if ($parameter == 1) {
    $sql = "delete from data where data.id = $id";
    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Data Has Deleted!');
   window.location = '../page/view-data';</script>";
    } else {
        echo "<script>alert('Failed to Delete Data!');
   window.location = '../page/view-data';</script>";
    }

    $koneksi->close();
} elseif ($parameter == 2) {
    $alokasi = $_POST['alokasi'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $dana = $_POST['dana'];
    $id_data = $_POST['id_data'];

    $sql = "update data a set
    alokasi = '$alokasi',
    dana = '$dana',
    nama = '$nama',
    hp = '$hp',
    email = '$email'
    where a.id = '$id_data'";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Success, Update Data !');
        window.location = '../page/view-data';</script>";
    } else {
        echo "<script>alert('Failed, Update Data !');
        window.location = '../page/view-data';</script>";
    }
}
