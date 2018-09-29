<?php

function palindrome($kata) {
  $hasil = "";
  $total_huruf = strlen($kata); //fungsi untuk menghitung jumlah huruf
  for ($i=$total_huruf; $i >= 0; $i--) {
    $hasil .= substr($kata, $i, 1); //memotong kata menjadi 1 huruf, mulai dari belakang
  }
  if($kata===$hasil) { //mengecek apakah hasil dan param itu sama?
    return "true <br>";
  } else {
    return "false <br>";
  }
}
//test cases
echo palindrome('katak'); //true
echo palindrome('blanket'); //false
echo palindrome('civic'); //true
echo palindrome('kasur rusak'); //true
echo palindrome('mister'); //false
?>
