<?php
include '../koneksi.php';

$id = $_GET['id'];
$dataJasa = mysqli_query($koneksi, "SELECT * FROM jasa WHERE id_jasa = '$id'");
$showJasa = mysqli_fetch_array($dataJasa);
mysqli_query($koneksi, "DELETE FROM jasa WHERE id_jasa = '$id'");
unlink('../assets/'.$showJasa['gambar']);

header('location: ../Dashboard.php');