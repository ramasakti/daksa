<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daksa</title>
    <link href="Daksa_Home.css" rel="stylesheet">
    <script src="Daksa_Home.js"></script>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img class="img1" src="Logo_Hitam.png">
            </div>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#about_us">Contact</a></li>
                <!-- Cek apakah sudah login -->
                <!-- Jika sudah maka ubah Join menjadi Dashboard -->
                <?php
                    session_start();
                    if (isset($_SESSION['status'])) {
                ?>
                <li><a href="Dashboard.php">Dashboard</a></li>
                <?php
                    }else{
                ?>
                <li><a href="Daksa_Login.php">Join</a></li>
                <?php
                    }
                ?>
            </ul>
        </nav>
    </header>

    <section id="Home">
        <div class="text1">
            <h2>Find The Perfect Freelancer</h2>
            <p>Make your work so much easier.</p>
            <button type="button" class="button1"><a href="Jasa.php">GET STARTED</a></button>
        </div>
        <img class="img2" src="Gambar1.jpg" />
    </section>

    <br>
    <h1 class="text2" id="job">Explore The Freelancer</h1>

    <section id="explore1">
        <img class="img3" src="Multimedia.png" />
        <div class="text-multi">
            <h1>MULTIMEDIA</h1>
            <p>Multimedia adalah salah satu sarana media komunikasi dan informasi pada komputer yang mengkombinasikan
                antara grafik, teks, animasi, audio, dan video.</p>
            <button type="button" class="button2"><a href="Jasa.php?jenis=Multimedia">View More</a></button>
            <button type="button" class="button3"><a href="Daksa_Login.php">be a creator</a></button>
        </div>
    </section>

    <section id="explore2">
        <div class="text-write">
            <h1>WRITING</h1>
            <p>Writing adalah proses menggambarkan suatu bahasa sehingga pesan yang disampaikan penulis dapat di pahami
                pembaca.</p>
            <button type="button" class="button4"><a href="Jasa.php?jenis=Writing">View More</a></button>
            <button type="button" class="button5"><a href="Daksa_Login.php">be a creator</a></button>
        </div>
        <img class="img4" src="Writing.png" />
    </section>

    <section id="explore3">
        <img class="img5" src="Programming.png" />
        <div class="text-program">
            <h1>PROGRAMMING</h1>
            <p>Programming adalah suatu proses atau kegiatan menulis dan menguji (pemrograman) agar program dapat
                dibuat, dan hasilnya sesuai apa yang diinginkan.</p>
            <button type="button" class="button6"><a href="Jasa.php?jenis=Programming">View More</a></button>
            <button type="button" class="button7"><a href="Daksa_Login.php">be a creator</a></button>
        </div>
    </section>

    <section id="explore4">
        <div class="text-game">
            <h1>GAMING</h1>
            <p>Game adalah sebuah software aplikasi perangkat lunak yang bertujuan untuk menghibur. Biasanya game banyak
                disukai oleh anak anak hingga orang dewasa.</p>
            <button type="button" class="button8"><a href="Jasa.php?jenis=Gaming">View More</a></button>
            <button type="button" class="button9"><a href="Daksa_Login.php">be a creator</a></button>
        </div>
        <img class="img6" src="Gaming.png" />
    </section>

    <section id="explore5">
        <img class="img7" src="Marketing.png" />
        <div class="text-market">
            <h1>MARKETING</h1>
            <p>Marketing adalah upaya untuk memperkenalkan produk kepada pelanggan yang dilakukan dengan beberapa
                aktivitas mulai dari promosi, distribusi, penjualan hingga strategi pengembangan produk.</p>
            <button type="button" class="button10"><a href="Jasa.php?jenis=Marketing">View More</a></button>
            <button type="button" class="button11"><a href="Daksa_Login.php">be a creator</a></button>
        </div>
    </section>

    <h1 class="text3" id="about_us">About Us</h1>
    
    <footer>
        <div id="footer">
            <div class="wrapper">
                <div class="footer">
                    <div class="footer1">
                        <img class="img12" src="Logo_Hitam.png">
                        <p class="text_daksa">Daksa adalah sebuah aplikasi yang digunakan oleh para
                            <i><b>Freelancer</b></i> menawarkan jasanya kepada konsumen. Dan juga Daksa adalah aplikasi
                            yang digunakan untuk seseorang yang sedang membutuhkan bantuan dalam pekerjaannya</p>
                    </div>
                    <div class="footer2">
                        <h3>Our Team</h3>
                        <div class="team">
                            <p>Friska Ahyani Anindita</p>
                            <p>Irgie Muhammad Fahrezi</p>
                            <p>Hani Gusmiyarni</p>
                            <p>M. Alif Ridho Setiawan</p>
                            <p>Perdi Ananda Frasta</p>
                        </div>
                    </div>
                    <div class="footer3">
                        <h3>Social</h3>
                        <div class="social">
                            <p><a href="https://instagram.com/frsk_hyndt">@ frsk_hyndt</a></p>
                            <p><a href="https://instagram.com/irgiee.m">@ irgiee.m</a></p>
                            <p><a href="https://instagram.com/haniigsmyrn">@ haniigsmyrn</a></p>
                            <p><a href="https://instagram.com/ridho.setiawan_27">@ ridho.setiawan_27</a></p>
                            <p><a href="https://instagram.com/perdi.af">@ perdi.af</a></p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div id="copyright">
                <div class="wrapper">
                    &copy; 2022. <b>Daksa.</b> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    
    
</body>
</html>