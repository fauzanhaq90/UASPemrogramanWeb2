<?php
include '../config/db_conn.php';
$username = $_POST['username'];
$pass = md5($_POST['password']);

if (is_null($username) && is_null($password)) {
    echo "<script>alert('Sorry Your Username/Password is Empty');
        window.location = '../login';</script>";
} else {
    $sql = mysqli_query($koneksi, "SELECT * FROM `user` where username = '$username' and password = '$pass'");
    while ($dt = mysqli_fetch_array($sql)) {
        $id_user =  $dt['username'];
        $id =  $dt['id'];
        $fullname =  $dt['fullname'];
        $password =  $dt['password'];
    }
    if ($id_user == $username && $pass == $password) {
        session_start();
        $_SESSION['username'] = $id_user;
        $_SESSION['id'] = $id;
        $_SESSION['fullname'] = $fullname;
        echo "<script>window.location = '../page/dashboard';</script>";
    } else {
        echo "<script>alert('Sorry Your Username/Password is Invalid');
        window.location = '../login';</script>";
    }
}
