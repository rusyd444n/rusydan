<?php
if(isset($_POST['simpan'])) {
    $a =  $_POST['nama'];
    $b =  $_POST['email'];
    $c = $_POST['usia'];
    $d = $_POST['tanggal_lahir'];
    $e = $_POST['alamat'];
    $f = $_POST['jenis_kelamin'];
    $g = $_POST['status'];
    $h = $_POST['hobi'];

    echo "nama = $a<br>";
    echo "Email = $b<br>";
    echo "usia = $c<br>";
    echo "tanggal lahir = $d <br>";
    echo "alamat = $e <br>";
    echo "jenis kelamin = $f<br>";
    echo "status = $g <br>";
    echo "hobi = $h<br>";
}