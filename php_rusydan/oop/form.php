<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="form.php">pendaftaran <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form2.php">data ortu <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- /NAVBAR -->

<!-- content -->

<div class="card mt-5 ml-5 mr-5 mb-5 bg-primary ">
  <div class="card-header">
    <center>submit email</center>
  </div>
  <div class=" card-body">
  <form method ="post">
  <div class="form-group">
    <label for="exampleInputEmail1">nama depan</label>
    <input type="text" class="form-control" name = "nama_depan">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">nama belakang</label>
    <input type="text" class="form-control" name = "nama_belakang"  >
  </div>
  <div class = "form-group">
    <label for="tanggal">tanggal lahir</label>
    <input type="date" class="form-control" name= "tanggal_lahir">
  </div>
  <div class = "form-group" >
    <label for="tanggal">tempat lahir</label>
    <input type="text" class="form-control" name = "tempat_lahir">
  </div>
  <div class = "form-group" >
    <label for="tanggal">jenis kelamin</label>
    <br>
    <input type="radio" name = "jenis_kelamin" value = 'L'>laki-laki
    <input type="radio" name = "jenis_kelamin" value = 'P'>perempuan
    </div>
    <div class = "form-group">
    <label for="tanggal">agama</label>
    <select class="form-control" name = "agama">
              <option value=""></option>
              <option value="ISLAM">islam</option>
              <option value="HINDU">hindu</option>
              <option value="BUDHA">budha</option>
              <option value="KONGHUCU">konghucu</option>
              <option value="KRISTEN">kristen</option>
            </select>
    </div>
    <div class="form-group">
     <label for="alamat">alamat</label>
     <textarea class="form-control" rows="2" name = "alamat"></textarea>
    </div>
    <div class="form-group">
     <label for="asal">asal sekolah</label>
     <input type="text" class="form-control" name = "asal_sekolah">
    </div>

  <div class="form-group form-check"></div>
    <div class = "form-group">
    <label for="tanggal">jurusan</label>
    <select class="form-control" name = "jurusan">
              <option value=""></option>
              <option value="RPL">RPL</option>
              <option value="TBSM">TBSM</option>
              <option value="TKRO">TKRO</option>
              <option value="DKV">DKV</option>
              <option value="TBKR">TBKR</option>
            </select>
    </div>
    <div class = "form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">SIMPAN </label>
  </div>
  <button type="submit" class="btn btn-success" name="kirim">Submit</button>
</form>
  </div>
</div>

<!-- content -->
<!-- card -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if (isset($_POST{'kirim'})){
    
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $jurusan = $_POST['jurusan'];
 
    
    class hasil{
        public function pendaftaran($nama_depan2,$nama_belakang2,$tanggal_lahir2,$tempat_lahir2,$jenis_kelamin2,$agama2,$alamat2,$asal_sekolah2,$jurusan2){
?>
          <center>
          <div class="card border-success mb-3" style="max-width: 40rem;">
            <div class="card-header text-success"> <h3>hasil pendaftaran</h3> </div>
            <div class="card-body text-success">
              <h5 class="card-title">pendaftaran sukses !</h5>
              <table>
                <tr>
                  <td>Nama depan</td>
                  <td>:</td>
                  <td> <?php echo $nama_depan2 ?></td>
                </tr>
                <tr>
                  <td>Nama belakang</td>
                  <td>:</td>
                  <td> <?php echo $nama_belakang2 ?></td>
                </tr>
                <tr>
                  <td>tanggal lahir</td>
                  <td>:</td>
                  <td><?php echo $tanggal_lahir2 ?></td>
                </tr>
                <tr>
                  <td>tempat lahir</td>
                  <td>:</td>
                  <td><?php echo $tempat_lahir2 ?></td>
                </tr>
                <tr>
                  <td>jenis kelamin</td>
                  <td>:</td>
                  <td><?php echo $jenis_kelamin2 ?></td>
                </tr>
                <tr>
                  <td>Agama</td>
                  <td>:</td>
                  <td><?php echo $agama2 ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td><?php echo $alamat2 ?></td>
                </tr>
                <tr>
                  <td>asal sekolah</td>
                  <td>:</td>
                  <td><?php echo $asal_sekolah2 ?></td>
                </tr>
                <tr>
                  <td>jurusan</td>
                  <td>:</td>
                  <td><?php echo $jurusan2 ?></td>
                </tr>
              </table>
            </div>
          </div>
          </center>
          <!-- /card -->
<?php
        }
    }

    $cetak = new hasil();

    echo $cetak->pendaftaran($nama_depan,$nama_belakang,$tanggal_lahir,$tempat_lahir,$jenis_kelamin,$agama,$alamat,$asal_sekolah,$jurusan);
}
?>
