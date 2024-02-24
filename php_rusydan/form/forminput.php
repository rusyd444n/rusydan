<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h2>FORM BIODATA DIRI</h2>
        <!-- form -->
        <form  method = "POST" action="">
        <table>
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type= 'text' name='nama'></td>
        </tr>
        <tr>
            <td>tanggal lahir</td>
            <td>:</td>
            <td><input type= 'date' name='tanggal_lahir'></td>
        </tr>
        <tr>
            <td>jenis kelamin</td>
            <td>:</td>
            <td><input type= 'radio' name='jenis_kelamin' value= "laki-laki">laki-laki</td>
            <td><input type= 'radio' name='jenis_kelamin' value= "perempuan">perempuan</td>
        </tr>
        <tr>
            <td>alamat</td>
            <td>:</td>
            <td><textarea name='alamat'></textarea></td>
        </tr>
        <tr>
            <td>agama</td>
            <td>:</td>
            <td>
             <select name="agama" >
              <option value="">pilih</option>
              <option value="islam">islam</option>
              <option value="kristen">kristen</option>
              <option value="hindu">hindu</option>
              <option value="budha">budha</option>
              <option value="kong hhu chu">kong hu chu</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>pendidikan terakhir</td>
            <td>:</td>
            <td>
             <select name="pt" >
              <option value="">pilih</option>
              <option value="sd">sd</option>
              <option value="smp">smp</option>
              <option value="sma">sma</option>
              <option value="smk">smk</option>
              <option value="kuliah">kuliah</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>status</td>
            <td>:</td>
            <td><input type= 'text' name='status'></td>
        </tr>
        <tr>
            <td>hobi</td>
            <td>:</td>
            <td><input type= 'text' name='hobi'></td>
        </tr>
        <tr>
            <td>cita-cita</td>
            <td>:</td>
            <td><input type= 'text' name='cita_cita'></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><input type= "submit" name= "simpan" value= 'kirim'></td>
        </tr>
        </table>
        </form>
    </center>
</body>
</html>

<?php
if(isset($_POST['simpan'])) {
    $a = $_POST['nama'];
    $b = $_POST['tanggal_lahir'];
    $c = $_POST['jenis_kelamin'];
    $d = $_POST['alamat'];
    $e = $_POST['agama'];
    $f = $_POST['pt'];
    $g = $_POST['status'];
    $h = $_POST['hobi'];
    $i = $_POST['cita_cita'];



    echo "======Biodata Diri======<br>";
    echo "========================<br>";
    echo "nama = $a<br>";
    echo "tanggal lahir = $b<br>";
    echo "jenis kelamin = $c<br>";
    echo "alamat = $d<br>";
    echo "agama = $e<br>";
    echo "pendidikan terakhir = $f<br>";
    echo "status= $g<br>";
    echo "hobi = $h<br>";
    echo "cita-cita = $i<br>";



}


