<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <fieldset>
    <legend align="center"><h1>Hal Register</h1></legend>
        <form action="regtam.php" method="POST">
        Nama <br><input type="text" name="nama" required><br>
        Alamat <br><textarea name="al" cols="30" rows="10"></textarea><br>
        Jenis Kelamin <br> 
        <input type="radio" name="jk" value="Laki-laki" required>Laki-laki
        <input type="radio" name="jk" value="Permepuan" required>Perempuan<br>
        Agama <br> 
        <select name="agama" required>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
        </select><br>
        Email <br> <input type="text" name="ema" required><br>
        Password <br> <input type="password" name="password" required><br><br>
        <input type="submit" name="Register" value="Register">
        <input type="reset" name="reset" value="reset">
        </form>
    </fieldset>
</body>
</html>