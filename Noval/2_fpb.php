<?php

function fpb($angka1, $angka2) {
  // you can only write your code here!
  $min = min($angka1,$angka2); //mengambil nilai terkecil dari 2 parameter
  $fpb = 0;
  $hasil1 = array();
  $hasil2 = array();
  for ($i=1; $i <= $min; $i++) { //mengulangi sampai sama dengan $min
    $hasil1[$i] = $angka1/$i; //membagi angka1 dengan perulangan $i
    $hasil2[$i] = $angka2/$i;
    if(is_int($hasil1[$i]) && is_int($hasil2[$i])) {
      //jika hasil1 tidak desimal dan hasil 2 tidak desimal maka fpbnya pembagi angka1 dan angka2 tsb
      $fpb = $i;
    }
  }
  echo $fpb."<br>";
}

// TEST CASES
echo fpb(12, 16); // 4
echo fpb(50, 40); // 10
echo fpb(22, 99); // 11
echo fpb(24, 36); // 12
echo fpb(17, 23); // 1
 ?>
