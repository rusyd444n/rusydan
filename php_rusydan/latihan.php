<?php

 function persegi(){
    $sisi = 5;
    $luas = $sisi * $sisi;
    echo "<h3> Menghitung Luas persegi <br>";
    echo "rumus = sisi x sisi <br>";
    echo "sisi = $sisi<br>";
    echo "luasnya = $luas <br>";
}
function persegiPanjang(){
    $panjang = 5;
    $lebar = 4;
    $luas = $panjang * $lebar;
    echo "<h3> Menghitung Luas persegi panjang <br>";
    echo "rumus = panjang x lebar <br>";
    echo "panjang = $panjang<br>";
    echo "lebar = $lebar <br>";
    echo "luasnya = $luas";
}
function segitiga(){
    $set = 0.5;
    $alas = 2;
    $tinggi = 5;
    $luas = $set * $alas * $tinggi;
    echo "<h3> Menghitung Luas persegi panjang <br>";
    echo "rumus =1/2 X alas x tinggi <br>";
    echo "alas = $alas <br>";
    echo "tinggi = $tinggi <br>";
    echo "luasnya = $luas";
}

function lingkaran(){
    $phi = 3.14;
    $jari = 4;
    $luas = $phi * $jari * $jari;
    echo "<h3> Menghitung Luas lingkara <br>";
    echo "rumus = phi x jari x jari <br>";
    echo "phi = $phi<br>";
    echo "jari-jari = $jari <br>";
    echo "luasnya = $luas";
}

persegi();
echo "<hr>";
persegiPanjang();
echo "<hr>";
segitiga();
echo "<hr>";
lingkaran();
