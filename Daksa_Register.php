<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Daksa_LoginRegist.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Daksa Registation</title>
</head>
<body>
    <div class="kotak_login">
        <img class="imgregister" src="Logo_Hitam.png">
        <h1>SIGN UP</h1>
        <p>Create an Account</p>
        <?php
            if (isset($_GET['gagal'])) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['gagal'] ?>
            </div>
        <?php
            }
        ?>
        <form method="POST" action="fungsional/Regist.php">
            <label>Name</label>
            <input type="text" name="fullname" class="form_login" placeholder="Full Name">
            
            <label>Telp</label>
            <input type="text" name="nope" class="form_login" placeholder="Nomor HP">

            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username">

            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password">

            <input type="submit" class="tombol_login" value="REGISTER">

            <br />
            <br />

            <p class="link" >Back to
                <a href="index.php" style="color: #008080;">Home</a>
            </p>
            <p class="link">Already have an account?
                <a href="Daksa_Login.php" style="color: #008080;">Sign In here</a>
            </p>
        </form>
    </div>
</body>
</html>