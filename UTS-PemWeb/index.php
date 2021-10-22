<?php
include "koneksi.php";

$strSQL = "SELECT * FROM home";
$data = [];
$execStrSQL = mysqli_query($conn, $strSQL);
if (mysqli_num_rows($execStrSQL) > 0) {
  while ($row = mysqli_fetch_assoc($execStrSQL)) {
    $data[] = $row;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Aim di Moli B4nana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''><?= $data[0]['judul']; ?></a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#mentors">Mentors</a></li>
                    <li><a href="#partners">Partners</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="" class="tbl-biru">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home --> 
        <section id="home">
            <img src="images/28-288599_counter-strike-png-transparent-png.png"/>
            <div class="kolom">
                <p class="deskripsi"><?= $data[0]['deskripsi']; ?></p>
                <h2><?= $data[1]['deskripsi']; ?></h2>
                <p>Apa sih Moli B4nana itu?</p>
                <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>
        <?php
include "koneksi.php";

$strSQL = "SELECT * FROM course";
$data = [];
$execStrSQL = mysqli_query($conn, $strSQL);
if (mysqli_num_rows($execStrSQL) > 0) {
  while ($row = mysqli_fetch_assoc($execStrSQL)) {
    $data[] = $row;
  }
}

?>
        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">Kamu Akan Sangat Membutuhkan Ini Dengan</p>
                <h2><?= $data[0]['judul']; ?></h2>
                <p><?= $data[0]['deskripsi1']; ?></p>
                <p><?= $data[0]['deskripsi2']; ?></p>
                <p><a href="" class="tbl-biru">Daftar Sekarang!</a></p>
            </div>
            <img src="images/PhotoGrid_Plus_1634908310799.png"/>
        </section>
        <?php
include "koneksi.php";

$strSQL = "SELECT * FROM mentors";
$data = [];
$execStrSQL = mysqli_query($conn, $strSQL);
if (mysqli_num_rows($execStrSQL) > 0) {
  while ($row = mysqli_fetch_assoc($execStrSQL)) {
    $data[] = $row;
  }
}

?>
        <!-- untuk tutors -->
        <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi"></p>
                    <h2>Mentors!</h2>
                    <p>Meet our mentors!</p>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <img src="<?= $data[0]['foto']; ?>"/>
                        <p><?= $data[0]['nama']; ?></p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="<?= $data[1]['foto']; ?>"/>
                        <p><?= $data[1]['nama']; ?></p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="<?= $data[2]['foto']; ?>"/>
                        <p><?= $data[2]['nama']; ?></p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="<?= $data[3]['foto']; ?>"/>
                        <p><?= $data[3]['nama']; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php
include "koneksi.php";

$strSQL = "SELECT * FROM partner";
$data = [];
$execStrSQL = mysqli_query($conn, $strSQL);
if (mysqli_num_rows($execStrSQL) > 0) {
  while ($row = mysqli_fetch_assoc($execStrSQL)) {
    $data[] = $row;
  }
}

?>
        <!-- untuk partners -->
        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Partners</p>
                    <h2>Partners</h2>
                    <p>Tempat Kursus Online ini didukung oleh :</p>
                </div>

                <div class="partner-list">
                    <div class="kartu-partner">
                        <img src=""/>
                    </div>
                    <div class="kartu-partner">
                        <img src="<?= $data[0]['gambar']; ?>"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="<?= $data[1]['gambar']; ?>"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="<?= $data[2]['gambar']; ?>"/>
                    </div>
                    <div class="kartu-partner">
                        <img src=""/>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php
include "koneksi.php";

$strSQL = "SELECT * FROM kontak";
$data = [];
$execStrSQL = mysqli_query($conn, $strSQL);
if (mysqli_num_rows($execStrSQL) > 0) {
  while ($row = mysqli_fetch_assoc($execStrSQL)) {
    $data[] = $row;
  }
}

?>
    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3><?= $data[0]['judul']; ?></h3>
                    <p>Belajar meningkatkan skill kamu dalam memainkan Counter Strike Global Offensive secara online dengan mentor-mentor kami yang sangat asyik!</p>
                </div>
                <div class="footer-section">
                    <h3><?= $data[1]['judul']; ?></h3>
                    <p>Moli B4nana berdiri sejak tahun 2021 di Tangerang Selatan.</p>
                </div>
                <div class="footer-section">
                    <h3><?= $data[2]['judul']; ?></h3>
                    <p>Jalan Cendrawasih Raya Blok B7/P, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten</p>
                    <p>Kode Pos: 15413</p>
                </div>
                <div class="footer-section">
                    <h3><?= $data[3]['judul']; ?></h3>
                    <p><b>YouTube: </b>Belajar Aim di Moli B4nana</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2021. <b>Moli B4nana</b> All Rights Reserved.
        </div>
    </div>
    
</body>
</html>