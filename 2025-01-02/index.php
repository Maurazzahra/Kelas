<form action="" method="post">
    <label for="nilai1">Nilai 1:</label>
    <input type="number" id="nilai1" name="nilai1"><br><br>
    <label for="operasi">Operasi:</label>
        <select id="operasi" name="operasi">
            <option value="+">Tambah</option>
            <option value="-">Kurang</option>
            <option value="*">Kali</option>
            <option value="/">Bagi</option>
        </select><br><br>
    <label for="nilai2">Nilai 2:</label>
    <input type="number" id="nilai2" name="nilai2"><br><br>
    <input type="submit" name="hitung" value="Hitung">
</form>

<?php 

    // Membuat fungsi untuk melakukan operasi matematika
    if (isset($_POST['hitung'])) {
    $nilai1 = $_POST['nilai1'];
    $operasi = $_POST['operasi'];
    $nilai2 = $_POST['nilai2'];

    switch ($operasi) {
    case "+":
    $hasil = $nilai1 + $nilai2;
    break;
    case "-":
    $hasil = $nilai1 - $nilai2;
    break;
    case "*":
    $hasil = $nilai1 * $nilai2;
    break;
    case "/":
    if ($nilai2 != 0) {
    $hasil = $nilai1 / $nilai2;
    } else {
        $hasil = "Error: Pembagian dengan nol!";
    }
        break;
        default:
        $hasil = "Error: Operasi tidak valid!";
    }

        echo "Hasil: $nilai1 $operasi $nilai2 = $hasil";
    }

    echo "<br>";

    function halo($nama, $kelas) {
        echo "Halo, Selamat Datang! $nama, $kelas";
        echo "<br>";
    }

    halo("Maura", "11 RPL");
    halo("Zelina", "11 AK");
    halo("Alodia", "11 DKV");
    halo("Yoel", "11 MP");
    halo("Yangyang", "11 BD");

    // function tambah($a, $b) {
    //     return $a + $b;
    // }

    // $hasil = tambah(2, 2);
    // echo $hasil;

    function sapa($nama = "Maura") {
        return "Halo , $nama";
        echo "<br>";
    }
    
    echo sapa();
    echo sapa("Jane");

    function faktorial($n) {
        if ($n = 0 || $n = 1) {
            return 1;
        } else {
            return $n * faktorial($n - 1);
        }
    }

    // echo faktorial(5);

      echo "<br>";
    
      function tambah($a, $b) {
        return $a + $b;
       }
       
       function kurang($a, $b) {
        return $a - $b;
       }
       
       function kali($a, $b) {
        return $a * $b;
       }
       
       function bagi($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Error: Pembagian dengan nol!";
        }

       }
       
       // Fungsi utama kalkulator
       function kalkulator($operasi, $a, $b) {
        switch ($operasi) {
            case "tambah":
                return tambah($a, $b);
            case "kurang":
                return kurang($a, $b);
            case "kali":
                return kali($a, $b);
            case "bagi":
                return bagi($a, $b);
            default:
                return "Error: Operasi tidak valid!";
        }

       }
       
       // Contoh penggunaan
       echo kalkulator("tambah", 5, 3) . "\n"; // Keluaran: 8
         echo "<br>";
       echo kalkulator("kurang", 10, 4) . "\n"; // Keluaran: 6
        echo "<br>";
       echo kalkulator("kali", 7, 2) . "\n"; // Keluaran: 14
        echo "<br>";
       echo kalkulator("bagi", 9, 3) . "\n"; // Keluaran: 3
        echo "<br>";

?>