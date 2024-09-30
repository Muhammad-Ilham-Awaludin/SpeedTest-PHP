<?php 
    $jumlahUang = 140500;
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];

    echo "Uang : Rp." . number_format($jumlahUang, 0, ',', '.');
    echo "<br>";
    echo "Lembar rupiah :";
    echo "<br>";

    foreach ($pecahan as $nilai) {
        //untuk membulatkan nilai tersebut
        $lembar = floor($jumlahUang / $nilai);
        if ($lembar > 0) {
            echo "- Rp. " . number_format($nilai, 0, ',', '.') . " : $lembar";
            echo "<br>";
        }
        $jumlahUang %= $nilai;
    }
?>