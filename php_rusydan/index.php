<?php
$nama = "rusydan abdul";//string
$umur = 23;//integer
$nilai = 99.9;//
$status = true;

echo "nama : $nama<br>";
echo 'umur :' . $umur . '<br>';
printf("nilai : %.3f <br>", $nilai);
if($status) {
    echo "status siswa aktif";
} else {
    echo"status siswa tidak aktif";
}
?>