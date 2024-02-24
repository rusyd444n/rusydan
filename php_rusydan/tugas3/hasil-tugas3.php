<?php
$nama = @$_REQUEST['nama'];
$jk = @$_REQUEST['jk'];
$tanggal = @$_REQUEST['tgl'];
$ko = @$_REQUEST['olah'];
$kelas = @$_REQUEST['kelas'];
$kf = @$_REQUEST['kf'];
$metode = @$_REQUEST['pembayaran'];
$diskon = 0;

if ($ko == "sepak bola") {
    $harga = 0;
        if ($kelas == "pemula") {
            $harga += 200000;
        } elseif ($kelas == "menengah") {
            $harga += 250000;
        } elseif ($kelas == "lanjutan") {
            $harga += 300000;
        }
} else if ($ko == "bulu tangkis") {
    $harga = 0;
        if ($kelas == "pemula") {
            $harga += 150000;
            if ($jk == "Perempuan") {
                $diskon += $harga * 0.1;
            }
        } elseif ($kelas == "menengah") {
            $harga += 200000;
            if ($jk == "Perempuan") {
                $diskon += $harga * 0.1;
            }
        } elseif ($kelas == "lanjutan") {
            $harga += 250000;
            if ($jk == "Perempuan") {
                $diskon += $harga * 0.1;
            }
        }
} else if ($ko == "renang") {
    $harga = 0;
        if ($kelas == "pemula") {
            $harga += 180000;
        } elseif ($kelas == "menengah") {
            $harga += 220000;
        } elseif ($kelas == "lanjutan") {
            $harga += 270000;
        }
}

$total = $harga - $diskon;

if ($total > 500000) {
    $hasil = "Selamat Anda Mendapatkan Merchandise Gratiss!!";
} else {
    $hasil = "Mohon maaf total pembelian anda kurang dari Rp 500.000, Anda tidak Mendapatkan Merchandise Gratis dari kami";
}
echo "<center>";
echo "<h1>Form Pendaftaran</h1>";
echo "Nama : $nama<br>";
echo "jk Kelamin : $jk<br>";
echo "tl Lahir : $tanggal<br>";
echo "ko : $ko<br>";
echo "Kelas : $kelas <br>";
echo "kf Fisik : $kf<br>";
echo "Metode Pembayaran : $metode<br>";
echo "Harga : Rp. $harga<br>";
echo "Diskon : Rp. $diskon<br>";
echo "Total Harga : Rp. $total<br>";
echo $hasil;
echo "</center>";

?>