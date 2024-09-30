<?php 
  $lamaKerja = 14;
  $lembur1 = 50000;
  $lembur2 = 25000;

  if ($lamaKerja >= 8) {
    $total = $lamaKerja - 8;
    $total2 = ($total - 1) * $lembur2;
    $total3 = $total2 + $lembur1;
    echo "Lama Kerja : $lamaKerja jam";
    echo "<br>";
    echo "Jam Lebih : $total jam";
    echo "<br>";
    //untuk merapihkan angka ribuan
    echo "Jumlah Kompensasi : Rp." . number_format($total3);
  }
?>