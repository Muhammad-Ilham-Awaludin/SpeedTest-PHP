<?php
//nested loop
  for ($i = 1; $i <= 2; $i++) {
    for ($z = 10; $z >= 1; $z--) {
      $h = $i * $z;
      echo "$i x $z = $h <br>";
    }
    echo "<br>";
  }
?>