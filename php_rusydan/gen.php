<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses-gen.php" method="POST">
        <table>
            <h2>masuka tanggal lahir anda</h2>
            <tr>
                <td>Nama</td>
                <td> : </td>
                <td><input type="text" name="nama" placeholder="masukan nama"></td>
            </tr>
            <tr>
                <td>Tahun Lahir</td>
                <td> : </td>
                <td><input type="Date" name="tahunLahir" placeholder="tahun lahir anda"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="simpan" value="submit" >
                    <input type="submit" value="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>