<?php
class bangunDatar {


    public $count = "menghitung luas";


    public function persegi(){
        $sisi = 5;
        $luas = $sisi * $sisi;
        echo "<h3> $this->count persegi <br>";
        echo "rumus = sisi x sisi <br>";
        echo "sisi = $sisi<br>";
        echo "luasnya = $luas <br>";
    }
    public function persegiPanjang(){
        $panjang = 5;
        $lebar = 4;
        $luas = $panjang * $lebar;
        echo "<h3> $this->count persegi Panjang <br>";
        echo "rumus = panjang x lebar <br>";
        echo "panjang = $panjang<br>";
        echo "lebar = $lebar <br>";
        echo "luasnya = $luas";
    }
    public function segitiga(){
        $set = 0.5;
        $alas = 2;
        $tinggi = 5;
        $luas = $set * $alas * $tinggi;
        echo "<h3>$this->count segitiga <br>";
        echo "rumus =1/2 X alas x tinggi <br>";
        echo "alas = $alas <br>";
        echo "tinggi = $tinggi <br>";
        echo "luasnya = $luas";
    }
    public function lingkaran(){
        $phi = 3.14;
        $jari = 4;
        $luas = $phi * $jari * $jari;
        echo "<h3>$this->count lingkaran<br>";
        echo "rumus = phi x jari x jari <br>";
        echo "phi = $phi<br>";
        echo "jari-jari = $jari <br>";
        echo "luasnya = $luas";
    }
    

}

$bentuk = new bangunDatar();

echo $bentuk->persegi();
echo "<br>";
echo $bentuk->persegiPanjang();
echo "<br>";
echo $bentuk->segitiga(); 
echo "<br>";
echo $bentuk->lingkaran();