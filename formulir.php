<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<form action="formulir_proses.php" method="POST">
<table align="center">
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Masukan Nama" required></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="jal" placeholder="Jalan/Kampung" required></td>
        <td><input type="text" name="keca" placeholder="Kecamatan" required></td>
        <td><input type="text" name="kota" placeholder="Kode" required></td>
        <td><input type="text" name="pro" placeholder="Provinsi" required></td>
        <td><input type="number" name="pos" placeholder="Kode Pos" required></td>
    </tr>
    <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><input type="text" name="nambar" placeholder="Masukan Nama Barang" required></td>
    </tr>
    <tr>
        <td>Harga Barang</td>
        <td>:</td>
        <td><input type="number" name="har" placeholder="Masukan Harga Barang" required></td>
    </tr>
    <tr>
        <td>Jumlah Barang</td>
        <td>:</td>
        <td><input type="number" name="jumbar" placeholder="Masukan Jumlah Barang" required></td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td>:</td>
        <td><textarea name="des" cols="30" rows="5" required placeholder="Masukan Descripsi"></textarea></td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td><input type="date" name="tgl" placeholder="Masukan Tanggal" required></td>
    </tr>
    <tr>
        <td><input align="center" type="submit" name="daftar" value="Simpan"></td>
    </tr>
</table>

</form>
</body>
</html>