<form action="hasil-tugas3.php" method="POST">
    <table>
        
    <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type= 'text' name='nama'></td>
        </tr>
        <tr>
            <td>jenis kelamin</td>
            <td>:</td>
            <td>
                <select name="jk">
                    <option value="">.......</option>
                    <option value="lakilaki">laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>tanggal lahir</td>
            <td>:</td>
            <td><input type= 'date' name='tgl'></td>
        </tr>
        <tr>
            <td>kategori olahraga</td>
            <td>:</td>
            <td>
            <input type= 'radio' name='olah' value="sepak bola" >sepak bola<br>
            <input type= 'radio' name='olah' value="bulu tangkis" >bulu tangkis<br>
            <input type= 'radio' name='olah' value="renang">renang<br>
            </td>
        </tr>
        <tr>
            <td>kelas</td>
            <td>:</td>
            <td>
            <input type= 'checkbox' name='kelas' value = "pemula" >pemula<br> 
            <input type= 'checkbox' name='kelas' value = "menengah" >menengah <br>
            <input type= 'checkbox' name='kelas' value = "lanjutan" >lanjutan<br>
            </td>
        </tr>
        <tr>
            <td>kemampuan fisik</td>
            <td>:</td>
            <td><textarea name="kf"></textarea></td>
        </tr>
        <tr>
            <td>Pembayaran</td>
            <td>:</td>
            <td>
                <select name="pembayaran">
                    <option value="">.....</option>
                    <option value="transfer bank"> Transfer Bank</option>
                    <option value="Kartu kredit"> Kartu kredit</option>
                </select>
            </td>
        </tr>
        <td></td>
        <td></td>
        <td><input type="submit" name ='simpan' value='kirim'></td>

        </tr>
    </table>
</form>