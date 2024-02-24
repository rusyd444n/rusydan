<?php

class manusia{

    public  $nama = "balmon cakep";

    private function tampilkan_nama(){
        echo "nama saya malasngoding<br/>";
    }

    public function keluarkan(){
        $this->tampilkan_nama();
    }
}

$cetak = new manusia();
//manggil method
echo $cetak->keluarkan();
//manggil property
echo $cetak->nama;

?>