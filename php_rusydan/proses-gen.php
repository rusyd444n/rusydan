<?php
$nama = @$_REQUEST['nama'];
$tahun_lahir = @$_REQUEST['tahunLahir'];

if ($tahun_lahir >= 1944 && $tahun_lahir <= 1964) {
    $generasi = "Baby Boomer";
} elseif ($tahun_lahir >= 1965 && $tahun_lahir <= 1979) {
    $generasi = "Generasi X";
} elseif ($tahun_lahir >= 1980 && $tahun_lahir <= 1994) {
    $generasi = "Generasi Y (Millennials)";
} elseif ($tahun_lahir >= 1995 && $tahun_lahir <= 2015) {
    $generasi = "Generasi Z";
} else {
    $generasi = "Generasi tidak terdefinisi";
}


echo "$nama, berdasarkan tahun lahir anda tergolong $generasi<br>";
?>
