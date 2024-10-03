Selesaikan perhitungan ini (7 % 5) + (8 * 4) - (9 / 3) menggunakan function
<?php

    echo "<br>";

    $x = modulus(a: 7, b: 5);
    $x = tambah(a: $x, b: kali(a: 8, b: 4));
    $y = bagi(a: 9, b: 3);
    $x = kurang(a: $x, b: $y);

        echo $x;

    echo "<br>";

    $hasil = tambah(a: 5, b: kali(3,7));
    $hasil = bagi(a: $hasil, b: 4);
    $hasil = kurang(a: $hasil, b: 9);
    $hasil = modulus(a: $hasil, b: 8);
        echo $hasil;

    function kali($a, $b){ 
        $c = $a * $b;
        return $c;
    }

    echo "<br>";
    echo kali(a: 5, b: 7)+ 5; /* cara memanggil function. yang ini lebih ringkas */
    echo "<br>";

    function tambah($a, $b){
        $c = $a + $b;
        return $c;
    }

    echo "<br>";
    tambah(a: 5, b: 3);
    echo "<br>";

    function kurang($a, $b){
        $c = $a - $b;
        return $c;
    }

    kurang(a: 34, b: 12);
    echo "<br>";

    function  bagi($a, $b){
        $c = $a / $b;
        return $c;
    }

    bagi(a: 25, b: 5);
    echo "<br>";

    function modulus($a, $b){
        $c = $a % $b;
        return $c;
    }

    modulus(a: 7, b: 3);
?>