<?php 
  $data = [80,90,75,100,85,100,66];
  $cari = 100;
  
  $count = 0;
  foreach ($data as $tampilan) {
    if ($tampilan == $cari) {
      $count++;
    }
  }
  echo "jumlah angka $cari = $count";
?>