<?php
    session_start();
    // Cek apakah sudah login, jika belum lempar ke halaman login
    error_reporting(0);
    if (!isset($_SESSION['status'])) {
        header('location: Daksa_Login.php');
    }
    $username = $_SESSION['username'];
    $jenis = $_GET['jenis'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Daksa_Home.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img class="img1" src="Logo_Hitam.png">
            </div>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="Logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div id="hero">
        <section id="Home">
            <div class="text1">
                <h2>Find The Perfect Freelancer</h2>
                <p>Make your work so much easier.</p>
            </div>
            <img class="img2" src="Gambar1.jpg">
        </section>
    </div>

    <section>
        <div class="container">
            <h4>Selamat Datang! <?= $_SESSION['username'] ?></h4>
            <!-- Untuk penyortiran berdasarkan jenis jasa -->
            <?php
                if ($_SESSION['status'] === 'Admin') {
            ?>
            <form id="formSetter" action="" method="get">
                <select id="selektor" name="jenis" class="form-select mb-3" aria-label="Default select example" onchange="this.form.submit()">
                    <option <?php if (!isset($jenis)) { echo 'selected'; } ?> value="">Semua Jasa</option>
                    <option <?php if ($jenis === 'Multimedia') { echo 'selected'; } ?> value="Multimedia">Multimedia</option>
                    <option <?php if ($jenis === 'Programming') { echo 'selected'; } ?> value="Programming">Programming</option>
                    <option <?php if ($jenis === 'Writing') { echo 'selected'; } ?> value="Writing">Writing</option>
                    <option <?php if ($jenis === 'Gaming') { echo 'selected'; } ?> value="Gaming">Gaming</option>
                    <option <?php if ($jenis === 'Marketing') { echo 'selected'; } ?> value="Marketing">Marketing</option>
                </select>
            </form>
            <?php
                }
            ?>

            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
                Tambah Jasa
            </button>
            <?php include 'TambahData.php' ?>

            <div class="row">
                <?php
                    include 'koneksi.php';
                    if ($_SESSION['status'] === 'Admin') {
                        if (!isset($jenis)) {
                            $dataJasa = mysqli_query($koneksi, "SELECT * FROM jasa");
                        }else{
                            if ($jenis !== '') {
                                $dataJasa = mysqli_query($koneksi, "SELECT * FROM jasa WHERE jenis = '$jenis'");
                            }else{
                                $dataJasa = mysqli_query($koneksi, "SELECT * FROM jasa");
                            }
                        }
                    }else{
                        $dataJasa = mysqli_query($koneksi, "SELECT * FROM jasa WHERE creator = '$username'");
                    }
                    while($showJasa = mysqli_fetch_array($dataJasa)) {
                ?>
                <!-- Looping Here -->
                <div class="col">
                    <center>
                    <div class="card" style="width: 18rem;">
                        <img src="assets/<?= $showJasa['gambar'] ?>" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title"><?= $showJasa['nama_jasa'] ?></h5>
                            <a data-bs-toggle="modal" data-bs-target="#editModal-<?php echo $showJasa['id_jasa'] ?>" class="btn btn-warning">Edit</a>
                            <?php include 'EditData.php' ?>
                            <a data-bs-toggle="modal" data-bs-target="#deleteModal-<?php echo $showJasa['id_jasa'] ?>" class="btn btn-danger">Delete</a>
                            <?php include 'DeleteData.php' ?>
                            <a data-bs-toggle="modal" data-bs-target="#detailModal-<?php echo $showJasa['id_jasa'] ?>" class="btn btn-primary">Detail</a>
                            <?php include 'Detail.php' ?>
                        </div>
                    </div>
                    </center>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
</div>
<script src="Daksa_Home.js"></script>
</body>
</html>