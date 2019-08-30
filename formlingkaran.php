<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <fieldset>
        <legend>Keliling & Luas Lingkaran</legend>
        <form action="" method="get">
            <label for="">Jari-jari</label>
            <input type="number" name="j" required><br>
            <input type="submit" name="simpan"><hr>
        </form>
        <?php
        if(isset($_GET['simpan'])){
            $jari = $_GET['j'];

            function keliling_lingkaran($j){
                $kel = 2*3.14*$j;
                return $kel;
            }
            function luas_lingkaran($j){
                $luas = 3.14*$j*$j;
                return $luas;
            }
            $kel = keliling_lingkaran($jari);
            echo "keliling lingkaran : $kel<br>";
            $luas = luas_lingkaran($jari);
            echo "Luas lingkaran : $luas";
        }
        ?>
    </fieldset>
</body>
</html>