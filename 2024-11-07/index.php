<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 2 Sedati</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.php"> <img src="images/judydoll.jpg" alt=""> </a>
            </div>
            <div class="sekolah">
                <h2> SMP Negeri 2 Sedati </h2>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="?menu=home">Home</a></li>
                    <li><a href="?menu=sejarah">Sejarah</a></li>
                    <li><a href="?menu=kegiatan">Kegiatan</a></li>
                    <li><a href="?menu=jadwal">Jadwal</a></li>
                    <li><a href="?menu=galeri">Galeri</a></li>
                    <li><a href="?menu=kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
        <div class="content">

            <?php 
                if (isset($_GET["menu"])) {
                    $menu = $_GET["menu"];
                    echo $menu;

                    if ($menu == "home") {
                        require_once("pages/home.php");
                    }

                    if ($menu == "sejarah") {
                        require_once("pages/sejarah.php");
                    }

                    if ($menu == "kegiatan") {
                        require_once("pages/kegiatan.php");
                    }

                    if ($menu == "jadwal") {
                        require_once("pages/jadwal.php");
                    }

                    if ($menu == "galeri") {
                        require_once("pages/galeri.php");
                    }

                    if ($menu == "kontak") {
                        require_once("pages/kontak.php");
                    }

                } else {
                    require_once("pages/home.php");
                }
                ?>

        </div>
        <div class="footer">
            <p> Web dibuat oleh "Maura" </p>
        </div>
    </div>
</body>
</html>