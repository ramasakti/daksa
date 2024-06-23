<?php
include '../koneksi.php';

//ID
$id = $_POST['id'];
//Nama jasa
$namaJasa = $_POST['nama_jasa'];
//Jenis jasa
$jenis = $_POST['jenis'];
//Deskripsi jasa
$deskripsi = $_POST['deskripsi'];
//Cek apakah ada perubahan gambar
if (!isset($_FILES['gambar'])) {
    mysqli_query($koneksi, "UPDATE jasa 
                                SET
                            nama_jasa='$namaJasa', jenis='$jenis', deskripsi='$deskripsi'
                            "
                );
}else{
    //Data field yang diedit
    $data = mysqli_query($koneksi, "SELECT * FROM jasa WHERE id_jasa = '$id'");
    $show = mysqli_fetch_array($data);
    //Hapus data image lama
    unlink('../assets/'.$show['gambar']);
    echo $show['gambar'];
    //Pemrosesan gambar
    $namaGambar = $_FILES['gambar']['name'];
    $namaTmp = $_FILES['gambar']['tmp_name'];
    //Mengupload file gambar
    $uploaded = move_uploaded_file($namaTmp, '../assets/'.$namaGambar);
    mysqli_query($koneksi, "UPDATE jasa 
                                SET
                            nama_jasa='$namaJasa', jenis='$jenis', gambar='$namaGambar', deskripsi='$deskripsi'
                                WHERE id_jasa='$id'
                            "
                );
}

header('location: ../Dashboard.php');