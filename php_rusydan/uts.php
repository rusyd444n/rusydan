<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>pts</title>
  </head>
  <body>
<!-- ATAS -->
<center><img src="logo.jpg" alt=""></center>
<center><h3>penggajihan</h3></center>
<center><h3>GURU/KARYAWAN YAYASAN ASSALAAM</h3></center>
<!-- /ATAS -->
<!-- CONTENT -->
<center>
<div class="card border-success md-2 mt-2 ml-2 mr-2  " style="max-width: 40rem;">
  <div class="card-header bg-success">Data penggajihan</div>
  <div class="card-body">
  </div>
  <form action="" method="post">
  <div class="form-group text-left">
    <label for="exampleInputEmail1">no</label>
    <input type="text" class="form-control" name = "no">
  </div>
  <div class="form-group text-left">
    <label for="exampleInputPassword1">nama</label>
    <input type="text" class="form-control" name = "nama">
  </div>
  
  <div class = "form-group text-left">
    <label for="tanggal">unit pendidikan</label>
    <select class="form-control" name = "unit_pendidikan">
              <option value="">pilih unit pendidikan</option>
              <option value="tk">tk</option>
              <option value="sd">sd</option>
              <option value="smp">smp</option>
              <option value="sma">sma</option>
              <option value="smk">smk</option>
            </select>
  </div>
    <div class = "form-group text-left">
    <label for="tanggal">tanggal gaji</label>
    <input type="date" class="form-control" name= "tanggal_gaji">
  </div>
  <!-- gaji -->
  <h3><i>Gaji</i></h3>
  <div class = "form-group text-left">
    <label for="tanggal">jabatan</label>
    <select class="form-control" name = "jabatan">
              <option value="">pilih jabatan</option>
              <option value="kepsek">kepala sekolah</option>
              <option value="wakasek">wakasek</option>
              <option value="guru">guru</option>
              <option value="karyawan">karyawan</option>
            </select>
  </div>
  <div class="form-group text-left">
    <label for="exampleInputPassword1">lama kerja</label>
    <input type="text" class="form-control" name = 'lama_kerja'>
  </div>
  <div class = "form-group text-left">
    <label for="tanggal">status kerja</label>
    <select class="form-control" name = "kerja">
              <option value="">pilih status kerja</option>
              <option value="kepsek">tetap</option>
              <option value="wakasek">kontrak</option>
            </select>
  </div>
  <!-- /gaji -->
  <!-- potongan -->
  <h3><i>potongan</i></h3>
  <div class="form-group text-left">
    <label for="exampleInputPassword1">BPJS</label>
    <input type="text" class="form-control" name = "bpjs">
  </div>
  <div class="form-group text-left">
    <label for="exampleInputPassword1">pinjaman</label>
    <input type="text" class="form-control" name = "pinjaman">
  </div>
  <div class="form-group text-left">
    <label for="exampleInputPassword1">Tabungan</label>
    <input type="text" class="form-control" name = "tabungan">
  </div>
  <div class="form-group text-left">
    <label for="exampleInputPassword1">lainnya</label>
    <input type="text" class="form-control" name = "lainnya">
  </div>
  <!-- /potongan -->
  <button type="submit" class="btn btn-primary" name ="kirim">kirim</button>
</form>
</div>
</center>
<!-- /CONTENT -->
</body>
</html>

<?php
if (isset($_POST['kirim'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit_pendidikan = $_POST['unit_pendidikan'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $kerja = $_POST['kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];
    $gaji = 0;

    
if ($jabatan == "kepsek"){
    $gaji += 5000000;
} elseif ($jabatan == "wakasek"){
    $gaji += 4000000;
}elseif ($jabatan == "guru"){
    $gaji += 3000000;
}elseif ($jabatan == "karyawan"){
    $gaji += 2000000;
}  if ($kerja  == "tetap"){ 
 $bonus =1000000;
} else {
  $bonus = 0;
}
    $gber = ($gaji + $bonus) - ( $bpjs - $pinjaman - $tabungan - $lainnya );

    class hasil {
      public function data($no2,$nama2,$unit_pendidikan2,$tanggal_gaji2,$jabatan2,$lama_kerja2,$kerja2,$bpjs2,$pinjaman2,$tabungan2,$lainnya2,$gaji2,$bonus2,$gber2){
        ?>
        <center>
          <div class="card border-primary mb-3 mt-5" style="max-width: 40rem;">
            <div class="card-header text-primary"> <h3>hasil gaji</h3> </div>
            <div class="card-body text-primary">
              <h5 class="card-title">struk ringan</h5>
              <table>
                <tr>
                  <td>no</td>
                  <td>:</td>
                  <td> <?php echo $no2 ?></td>
                </tr>
                <tr>
                  <td>nama</td>
                  <td>:</td>
                  <td> <?php echo $nama2 ?></td>
                </tr>
                <tr>
                  <td>unit pendidikan</td>
                  <td>:</td>
                  <td><?php echo $unit_pendidikan2 ?></td>
                </tr>
                <tr>
                  <td>tanggal gaji </td>
                  <td>:</td>
                  <td><?php echo $tanggal_gaji2 ?></td>
                </tr>
                <tr>
                  <td>jabatan</td>
                  <td>:</td>
                  <td><?php echo $jabatan2 ?></td>
                </tr>
                <tr>
                  <td>gaji</td>
                  <td>:</td>
                  <td><?php echo $gaji2 ?></td>
                </tr>
                <tr>
                  <td>lama kerja</td>
                  <td>:</td>
                  <td><?php echo $lama_kerja2 ?></td>
                </tr>
                <tr>
                  <td>status kerja </td>
                  <td>:</td>
                  <td><?php echo $kerja2 ?></td>
                </tr>
                <tr>
                  <td>bonus</td>
                  <td>:</td>
                  <td><?php echo $bonus2 ?></td>
                </tr>
                <tr>
                  <td>BPJS</td>
                  <td>:</td>
                  <td><?php echo $bpjs2 ?></td>
                </tr>
                <tr>
                  <td>pinjaman</td>
                  <td>:</td>
                  <td><?php echo $pinjaman2 ?></td>
                </tr>
                <tr>
                  <td>tabungan</td>
                  <td>:</td>
                  <td><?php echo $tabungan2 ?></td>
                </tr>
                <tr>
                  <td>lainnya</td>
                  <td>:</td>
                  <td><?php echo $lainnya2 ?></td>
                </tr>
                <tr>
                  <td>gaji bersih</td>
                  <td>:</td>
                  <td><?php echo $gber2 ?></td>
                </tr>
              </table>
            </div>
          </div>
          </center>
        <?php
        
      }
    }
    $cetak = new hasil();

    echo $cetak->data($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan,$gaji,$lama_kerja,$kerja,$bonus,$bpjs,$pinjaman,$tabungan,$lainnya,$gber);
}
?>
  