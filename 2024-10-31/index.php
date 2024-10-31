<?php 

    $identitas = ["nama" => "Maura Az Zahra", 
                "alamat" => "Cemandi, Sedati",
                "telepon" => "08953257780",
                "email" => "azzaharamaura@gmail.com",
                "instagram" => "maurazarh"];

    $sekolah = ["TK" => "Dharma Wanita",
                "SD" => "SD Negeri Cemandi 406",
                "SMP" => "SMP Negeri 2 Sedati",
                "SMK" => "SMK Negeri 2 Buduran"];

    $hobi = ["Menulis", "Melukis", "Mendengarkan musik", "Menonton film", "Berlari"];

    $skill = ["C++" => "Expert",
            "HTML" => "Newbie",
            "CSS" => "Intermediate",
            "PHP" => "Newbie"];

    $deskripsi = "Saya adalah seorang progamer pemula, giat bekerja dan rajin belajar agar saya kaya raya dan masuk surga. <br>
    Saya adalah Carat, bias saya 13 orang yang tampan, ceria, make sure para penggemarnya aman dan bahagia. <br>
    Saya rajin belajar, belajar sungguh-sungguh agar kesuksesan berhasil di genggaman tangan saya. <br>
    Saya berhasil mewujudkan impian saya, membahagiakan orang tua dan keluarga, serta kedua orang tua saya panjang umur, sehat selalu. <br>
    Ibunda saya panjang umur, sehat dan lancar rezeki.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Riwayat Hidup</title>
    <style>
        h1, h2, table, p {
            text-align: center;
        }

        table {
            width: 800px;
        }

        .container {
            width: 800px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>DAFTAR RIWAYAT HIDUP</h1>
        <h2>Data Diri</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($identitas as $key => $value) {
                        ?>
                            <tr>
                                <td><?= $key ?></td>
                                <td><?= $value ?></td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Riwayat Pendidikan</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>Pendidikan</th>
                    <th>Nama Sekolah</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($sekolah as $key => $value) {
                        ?>
                            <tr>
                                <td><?= $key ?></td>
                                <td><?= $value ?></td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Skill Coding</h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>Skill</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($skill as $key => $value) {
                        ?>
                            <tr>
                                <td><?= $key ?></td>
                                <td><?= $value ?></td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Hobi</h2>
        <ul>
            <?php 
                foreach ($hobi as $key) {
                    ?>
                        <li><?= $key ?></li>
                    <?php
                }
            ?>
        </ul>
        <hr>
        <h2>Tentang Aku</h2>
        <p><?= $deskripsi ?></p>
    </div>
</body>
</html>