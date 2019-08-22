<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran</title>
</head>
<body>
    <fieldset>
    <legend align="center"><h1>Formulir Pendaftaran</h1></legend>
        <form action="inputsiswa.php" method="POST" align="center" valign="top">
            No Pendaftaran <input type="number" name="no" required><br>
            NISN <input type="number" name="nisn" required><br>
            Nama <input type="text" name="nama" required><br>
            Alamat <textarea name="al" cols="30" rows="10"></textarea><br>
            Tempat Lahir <input type="text" name="tl" required><br>
            Tanggal Lahir <input type="date" name="tgl"><br>
            Asal Sekolah <input type="text" name="as" required><br>
            Jenis Kelamin  
            <input type="radio" name="jk" value="Laki-laki" required>Laki-laki
            <input type="radio" name="jk" value="Permepuan" required>Perempuan<br>
            Jurusan  
            <select name="jurusan" required>
                <option value="RPL">RPL</option>
                <option value="TKR">TKR</option>
                <option value="TSM">Budha</option>
            </select><br>
            Nama Ayah <input type="text" name="ayah" required><br>
            Pekerjaan Ayah <input type="text" name="paya" required><br>
            Nama Ibu <input type="text" name="ibu" required><br>
            Pekerjaan Ibu <input type="text" name="pibu" required><br>
            Pilih Hobi anda :<br>
            <input type="checkbox" name="h1" value="Sepak Bola" checked>Sepak Bola<br>
            <input type="checkbox" name="h2" value="Main Voli">Main Voli<br>
            <input type="checkbox" name="h3" value="Mancing">Mancing<br>
            <input type="checkbox" name="h4" value="Game">Game<br>
            <input type="checkbox" name="h4" value="Main Basket">Main Basket<br>
            Agama
            <select name="agama" required>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
            </select><br>
            <input type="submit" name="simpan" value="Simpan">
            <input type="reset" name="reset" value="reset">
        </form>
    </fieldset>
</body>
</html>