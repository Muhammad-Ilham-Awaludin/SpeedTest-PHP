<?php 
  $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
  $bil2 = [77, 99, 55, 81, 45, 90, 98];

  //untuk membandigkan di kedua array apakah ada angka yang sama
  $sama = array_intersect($bil1,$bil2);

  //untuk mencaari apa aja array yang ada di bilangan 1 tapi tidak ada di bilangan 2
  $beda1 = array_diff($bil1,$bil2);
  $beda2 = array_diff($bil2,$bil1);

  //untuk nenyatukan array
  $beda = array_merge($beda1,$beda2);

  //implode untuk memberi jarak / pemisah
  echo "Bilangan yang ada di kedua variabel" . "<br>" . implode('.', $sama);
  echo "<br>";
  echo "Bilangan yang tidak ada di kedua variabel" . "<br>". implode(',', $beda);
?>