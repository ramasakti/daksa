<?php
$koneksi = new mysqli("localhost","root","root","daksa","3306");

// Check connection
if ($koneksi->connect_errno) {
  echo "Failed to connect to MySQL: " . $koneksi->connect_error;
  exit();
}
?>