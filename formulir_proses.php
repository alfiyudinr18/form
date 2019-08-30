<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>


<?php
if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $jal = $_POST['jal'];
    $keca = $_POST['keca'];
    $kota = $_POST['kota'];
    $pro = $_POST['pro'];
    $pos = $_POST['pos'];
    $nambar = $_POST['nambar'];
    $jumbar = $_POST['jumbar'];
    $har = $_POST['har'];
    $a = $har*$jumbar;
    if($jumbar<0){
        $o = "Pesanan Tidak Dapat di Proses!";
        $jumbar = $o;
        $d = 0;
    }
    elseif ($jumbar>10) {
        $l = $a*2/10;
        $o = $a-$l;
        $d = 20;
    }
    elseif ($jumbar>5) {
        $l = $a/10;
        $o = $a-$l;
        $d = 10;
    }
    else{
        $o = $a;
        $d = 0;
    }
    $des = $_POST['des'];
    $tgl = $_POST['tgl'];


    echo "Tanggal : $tgl<br>";
    echo "Nama : $nama<br>";
    echo "Jalan/Kampung : $jal<br>";
    echo "Kecamatan : $keca<br>";
    echo "Kota : $kota<br>";
    echo "Provinsi : $pro<br>";
    echo "Kode POS : $pos<br>";
    echo "Nama Barang : $nambar<br>";
    echo "Harga Barang : $har<br>";
    echo "Jumlah Barang : $jumbar<br>";
    echo "Diskon : $d%<br>";
    echo "Deskripsi : $des<br>";
    echo "Total Bayar : $o<br>";
}
?>

</body>
</html>