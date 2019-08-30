<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1 align="center">Form Array</h1>
    <fieldset>
        <legend>Form Array</legend>
        <form action="" method="get">
            <label>Array</label>
            <input type="number" name="array" required>
            <input type="submit" value="Submit" name="input">
            <hr>
        
        </form>

        <?php
        if (isset($_GET['input'])) {
            $no = $_GET['array'];
            for ($i=1; $i <= $no; $i++) {
                ?>    
                <form action="formarraypro.php" method="post">
                <label for="nama">Nama : </label>
                <input type="text" required name="nama[]">
                <label for="nama">Kelas : </label>
                <input type="text" required name="kelas[]"><br>
                <br>
        <?php } ?>
            <input type="submit" value="Submit" name="save">
            <input type="reset" value="Reset">
            </form>
        <?php } ?>
    </fieldset>
</body>
</html>