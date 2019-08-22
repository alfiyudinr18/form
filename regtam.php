<?php
if(isset($_POST['Register'])){
    $nama = $_POST['nama'];
    echo "Nama : $nama<br>";
    $alamat = $_POST['al'];
    echo "Alamat : $alamat<br>";
    $jenis = $_POST['jk'];
    echo "Jenis Kelamin : $jenis<br>";
    $agama = $_POST['agama'];
    echo "Agama : $agama<br>";
    $email = $_POST['ema'];
    echo "Email : $email<br>";
    $pass = $_POST['password'];


    if($email == "ayr@gmail.com" && $pass == "181"){
        echo "<h2>Akun Aktif!</h2>";
    }
    else{
        echo "<h2>Tidak Aktif!</h2>";
    }
}
?>