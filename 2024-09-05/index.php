<?php
    for ($i=1; $i <= 10; $i++) { 
        echo $i;
    }
    echo "<br>";

    for ($i=10; $i >= 0; $i--) { 
        echo $i;
    }
    echo "<br>";

    $ganjil = 7%2; //modulus (ditampilkan sisa pembagian)
    echo $ganjil;

    echo "<br>";

    for ($i=1; $i < 100; $i++) { 
        $ganjil = $i % 2;
        //echo $ganjil;
        if ($ganjil == 0) { //if gunanya untuk menyaring
            echo $i;
        }
    }
    echo "<br>";
    $kkm = 80;
    $nilai = 65;
    if ($nilai > $kkm) {
        echo "Lulus";
    }
    else {
        echo "Tidak Lulus";
    }
    echo "<br>";
    $status = "Tidak Lulus";

    if ($nilai > $kkm) {
        $status = "Lulus";
    }
    echo $status;

    echo "<br>";

    $raport = 0;
    $tugas = 1;

    if ($tugas == 1) {
        $raport = 80;
        echo $raport;
    }
    echo "<br>";

    $bulan = 6;
    $tanggal = 30;
    $keterangan = "Salah";

    if ($bulan > 0 && $bulan < 13) {
        //$keterangan = "Benar";
        if ($tanggal > 0 && $tanggal < 32) {
            //$keterangan = "Benar";
            if ($bulan == 1 && $tanggal > 0 && $tanggal <20) {
                $keterangan = "Aquarius";
            }
            if ($bulan == 1 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Capricorn";
            }
            if ($bulan == 2 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Aries";
            }
            if ($bulan == 2 && $tanggal > 20 && $tanggal < 31) {
                $keterangan = "Taurus";
            }
            if ($bulan == 3 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Gemini";
            }
            if ($bulan == 3 && $tanggal > 18 && $tanggal < 30) {
                $keterangan = "Cancer";
            }
            if ($bulan == 4 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Leo";
            }
            if ($bulan == 4 && $tanggal > 20 && $tanggal < 32) {
                $keterangan = "Virgo";
            }
            if ($bulan == 5 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Libra";
            }
            if ($bulan == 5 && $tanggal > 19 && $tanggal < 31) {
                $keterangan = "Scorpio";
            }
            if ($bulan == 6 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Sagitarius";
            }
            if ($bulan == 6 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Pisces";
            }
        }
    }
    echo $keterangan;
?>