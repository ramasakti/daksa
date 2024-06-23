<?php
include '../koneksi.php';

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$nope = $_POST['nope'];
$regex = preg_replace("/[^a-zA-Z]/", "", $username);

$cekUsername = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
$countUsername = mysqli_fetch_array($cekUsername);

if ($countUsername < 1) {
    //Insert Data
    mysqli_query($koneksi, "INSERT INTO user (username, password, fullname, status, nope) VALUES ('$regex', '$password', '$fullname', 'Creator', '$nope')");
    header('location: ../Daksa_Login.php?daftar=sukses daftar, silahkan login');
}else{
    header('location: ../Daksa_Register.php?gagal=Username sudah digunakan!');
}