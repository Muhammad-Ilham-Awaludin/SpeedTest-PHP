<?php 
  $nama1 = "Fema Flamelina Putri";
  $nama2 = "Artasya Legina";

  //menghitung panjang karakter string
  $selisih1 = strlen($nama1);
  $selisih2 = strlen($nama2);
  
  if ($selisih1 > $selisih2) {
    $total = $selisih1 - $selisih2;
    echo "$nama1 memiliki jumlah karakter lebih banyak dari $nama2 : selisih $total karakter";
  } elseif ($selisih2 > $selisih1) {
    $total2 = $selisih2 - $selisih1;
    echo "$nama2 memiliki jumlah karakter lebih banyak dari $nama1 : selisih $total2 karakter";
  } else {
    echo "Kedua nama memiliki jumlah karakter yang sama";
  }