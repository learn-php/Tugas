<?php
function groupAnimals($animals = array()) {
  $hasil = array();
  sort($animals);
  $abjad = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
  foreach ($animals as $val) {
    foreach ($abjad as $abj) {
      if(substr($val, 0, 1) === $abj) {
        $hasil[$abj][] = $val;
      }
    }
  }
  echo "<pre>";
  print_r($hasil);
  echo "<br>";
}

echo groupAnimals(['cacing', 'ayam', 'kuda', 'anoa', 'kancil']);
echo groupAnimals(['cacing', 'ayam', 'kuda', 'anoa', 'kancil', 'unta', 'cicak' ]);
 ?>
