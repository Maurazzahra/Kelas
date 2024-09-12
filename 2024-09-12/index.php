<form action="" method="post">
    <input type="number" name="bulan" placeholder="Masukkan Bulan">
    <input type="number" name="tanggal" placeholder="Masukkan Tanggal">
    <input type="submit" value="Kirim" name="tombol">
</form>

<?php 
if (isset($_POST["tombol"])) {
    $bulan = $_POST["bulan"];
    $tanggal = $_POST["tanggal"];

    // echo $bulan;
    // echo $tanggal;

    $keterangan = "Salah";
    if ($bulan > 0 && $bulan < 13 && $tanggal > 0 && $tanggal < 32) {
        // $keterangan = "Benar";

        if ($bulan == 1) {
            if ($tanggal <= 19) {
                $keterangan = "Aquarius";
            }
            if ($tanggal >= 20) {
                $keterangan = "Capricorn";
            }
        }
        if ($bulan == 2) {
            if ($tanggal <= 20) {
                $keterangan = "Pisces";
            }
            if ($tanggal <= 32) {
                $keterangan = "Taurus";
            }
        }
    }
    echo $keterangan;
}
?>