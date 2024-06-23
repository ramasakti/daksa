<?php
include '../koneksi.php';

//Nama pembuka jasa
$creator = $_POST['creator'];
//Nama jasa
$namaJasa = $_POST['nama_jasa'];
//Jenis jasa
$jenis = $_POST['jenis'];
//Pemrosesan gambar
$namaGambar = $_FILES['gambar']['name'];
$namaTmp = $_FILES['gambar']['tmp_name'];
//Mengupload file gambar
$uploaded = move_uploaded_file($namaTmp, '../assets/'.$namaGambar);
//Deskripsi jasa
$deskripsi = $_POST['deskripsi'];

if ($uploaded) {
    mysqli_query($koneksi, "INSERT INTO jasa 
                                (creator, nama_jasa, jenis, gambar, deskripsi) 
                            VALUES 
                                ('$creator', '$namaJasa', '$jenis', '$namaGambar', '$deskripsi')
                            "
                );
}

header('location: ../Dashboard.php');