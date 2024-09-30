<?php 
//multidinemsi
  $student = [
    [
      'nama' => 'Andi',
      'nilai' => [80,78,82,78,88],
    ],
    [
      'nama' => 'Beni',
      'nilai' => [86,70,80,85,81],
    ],
    [
      'nama' => 'Dani',
      'nilai' => [83,91,70,73,81],
    ],
    [
      'nama' => 'Eko',
      'nilai' => [89,85,84,86,88],
    ],
  ];

  foreach ($student as $siswa) {
    $nama = $siswa['nama'];
    $nilai = $siswa['nilai'];
    //aray_sum untuk menjumlahkan semua array
    //count untuk menghitung ada berapa array nya
    $rata_rata = array_sum($nilai) / count($nilai);
    echo "$nama = $rata_rata" . "<br>";
  }

?>