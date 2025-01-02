<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Mata Uang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Konversi Mata Uang</h1>

    <form action="" method="post">
            <label for="nilai">Nilai:</label>
            <input type="number" id="nilai" name="nilai" required>
            <label for="dari">Dari:</label>
        <select id="dari" name="dari">
            <option value="USD">USD (Dolar Amerika)</option>
            <option value="IDR">IDR (Rupiah Indonesia)</option>
            <option value="EUR">EUR (Euro)</option>
            <option value="GBP">GBP (Pound Sterling)</option>
        </select>

    <label for="ke">Ke:</label>
        <select id="ke" name="ke">
            <option value="USD">USD (Dolar Amerika)</option>
            <option value="IDR">IDR (Rupiah Indonesia)</option>
            <option value="EUR">EUR (Euro)</option>
            <option value="GBP">GBP (Pound Sterling)</option>
        </select>
    <input type="submit" name="konversi" value="Konversi">

    </form>
    </div>
</body>
</html>

<?php 

    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];

        $kurs = array(
            "USD" => array("IDR" => 15000, "EUR" => 0.85, "GBP" => 0.75),
            "IDR" => array("USD" => 0.000067, "EUR" => 0.0000056, "GBP" => 0.0000042),
            "EUR" => array("USD" => 1.17, "IDR" => 17500, "GBP" => 0.88),
            "GBP" => array("USD" => 1.33, "IDR" => 23500, "EUR" => 1.14)
        );

        $hasil = $nilai * $kurs[$dari][$ke];
        echo "$nilai $dari = $hasil $ke";
    }

?>