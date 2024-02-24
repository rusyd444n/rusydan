<?php
//buat class 
class manusia{

        //buat property/atribut
        public $nama = "bintang";
        public $nama2 ="rusydan";


        //buat method / function
        public function makan(){
               echo "$this->nama suka makan Ayam";
        }
        public function minum(){
               echo "$this->nama2 suka minum powerF";
        }
}

//buat object
$cetak = new manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
?>