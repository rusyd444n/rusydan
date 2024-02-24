<?php
$gaji = 1000000;
$pajak = 0.025;

$thp = $gaji -($gaji * $pajak);
echo "Gaji sebelum dipotong pajak : <b> rp. $gaji </b><br>";
echo "gaji bersih : <b>Rp. $thp</b><br>";