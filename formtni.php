<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TNI</title>
</head>
<body>
    <fieldset>
        <legend>Pendaftaran TNI</legend>
        <form action="" method="get">
            <label for="">Nama</label>
            <input type="text" name="nama" required><br>
            <label for="">Berat Badan</label>
            <input type="number" min="1" name="bb" required><br>
            <label for="">Tinggi Badan</label>
            <input type="number" min="1" name="tb" required><hr>
            <input type="submit" name="simpan" value="Simpan">
        </form>
        <?php
        if(isset($_GET['simpan'])){
            $nama = $_GET['nama'];
            $a = $_GET['bb'];
            $b = $_GET['tb'];

            echo "Nama : $nama<br>";
            // function tinggi($tb){
            //     if ($tb>165) {
            //         return $tb;
            //     }
            //     elseif($tb<=165){
            //         $tb = "Maaf Tinggi badan anda tidak sesuai";
            //         return $tb;
            //     }
            // }
            // function berat($bb){
            //     if ($bb>60) {
            //         return $bb;
            //     }
            //     elseif($bb<=60){
            //         $bb = "Maaf berat badan anda tidak sesuai";
            //         return $bb;
            //     }
            // }
            // $tb = tinggi($tb);
            // echo "Tinggi badan : $tb<br>";
            // $bb = berat($bb);
            // echo "Berat badan : $bb<br>";
            // if($tb<=165||$bb<=60){
            //     echo "<b>Tidak Diterima!</b>";
            // }
            // else{
            //     echo "<b>Diterima!</b>";
            // }
            function tni($bb, $tb){
                if($tb > 165 && $bb <= 60 && $bb >= 50){
                    return "diterima";
                }
                else{
                    return "tidak diterima";
                }
            }
            echo "Berat badan : $a<br>";
            echo "Tinggi badan : $b<br>";
            echo "Keterangan : " . tni($a, $b);
        } 
        ?>
    </fieldset>
</body>
</html>