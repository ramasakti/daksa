<?php
    //Panggil Koneksi
    include '../koneksi.php';
    //Filter inputan yang dimasukkan oleh user untuk menghindari SQL Injection
    $username = htmlspecialchars($_POST['username']);                                                                                                                         
    $password = htmlspecialchars($_POST['password']);

    //Ambil data dari tabel user sesuai dengan inputan pada form login
    $dataLogin = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $hasilLogin = mysqli_fetch_array($dataLogin);
    
    //Cek jika hasilnya pada database kosong maka lempar ke halaman login dengan membawa parameter log
    if ($hasilLogin === NULL) {
        header('location: ../Daksa_Login.php?log=Login Gagal, periksa kembali username dan password.');
    }
    
    //Cek jika hasilnya ada pada database maka lempar ke halaman dashboard
    if (count($hasilLogin) > 0) {
        session_start();
        $_SESSION['status'] = $hasilLogin['status'];
        $_SESSION['username'] = $hasilLogin['username'];
        header('location: ../Dashboard.php');
    }
?>