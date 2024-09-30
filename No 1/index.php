<?php 
  $angka = "selamat ulang tahun yang ke-17";
  if (preg_match_all('/\d/', $angka, $hitung)) {
    echo "Teks : " . $angka;
    echo "<br>";
    echo "Teks mengandung angka: " . implode(", ", $hitung[0]);
  } else {
    echo "Teks : " . $angka;
    echo "<br>";
    echo "Teks tidak mengandung angka";
  }
?>