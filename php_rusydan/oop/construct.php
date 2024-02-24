<?php

class contoh{

      public function __construct(){
               echo "Assalamualaikum ukhti <br>";
      }

      public function perkenalan(){
        echo "nama saya fakhri <br>";
      }

      public function __destruct(){
         echo "hallo tan";
      } 
}
$cetak = new contoh();

echo $cetak->perkenalan();