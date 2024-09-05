<?php
    require_once("content.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $sekolah?></title>
</head>
<body>
    <h1><?= $judul?></h1>
    <p><?php echo $isi?></p>
    <hr>
    <h1><?= $jadwal?></h1>
    <table border="1px">
        <thead>
                <tr>
                    <th><?= $hari[0]; ?></th>
                    <th><?= $hari[1]; ?></th>
                    <th><?= $hari[2]; ?></th>
                    <th><?= $hari[3]; ?></th>
                    <th><?= $hari[4]; ?></th>
        </thead>
        <tbody>
            <tr>
                <td><?= $pelajaran[0]; ?></td>
                <td><?= $pelajaran[1]; ?></td>
                <td><?= $pelajaran[6]; ?></td>
                <td><?= $pelajaran[9]; ?></td>
                <td><?= $pelajaran[4]; ?></td>
            </tr>
            <tr>
                <td><?= $pelajaran[1]; ?></td>
                <td><?= $pelajaran[1]; ?></td>
                <td><?= $pelajaran[4]; ?></td>
                <td><?= $pelajaran[7]; ?></td>
                <td><?= $pelajaran[8]; ?></td>
            </tr>
            <tr>
                <td><?= $pelajaran[2]; ?></td>
                <td><?= $pelajaran[1]; ?></td>
                <td><?= $pelajaran[12]; ?></td>
                <td><?= $pelajaran[5]; ?></td>
                <td><?= $pelajaran[9]; ?></td>
            </tr>
            <tr>
                <td><?= $pelajaran[3]; ?></td>
                <td><?= $pelajaran[10]; ?></td>
                <td><?= $pelajaran[2]; ?></td>
                <td><?= $pelajaran[5]; ?></td>
                <td><?= $pelajaran[3]; ?></td>
            </tr>
            <tr>
                <td><?= $pelajaran[4]; ?></td>
                <td><?= $pelajaran[11]; ?></td>
                <td><?= $pelajaran[8]; ?></td>
                <td><?= $pelajaran[6]; ?></td>
                <td><?= $pelajaran[12]; ?></td>
            </tr>
        </tbody>
    </table>
    <hr>
    <img src="images/<?= $gambar[0]; ?>" alt="">
    <img src="images/<?= $gambar[1]; ?>" alt="">
    <img src="images/<?= $gambar[2]; ?>" alt="">
</body>
</html>