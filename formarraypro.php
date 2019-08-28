<?php
if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    foreach($nama as $data=>$key){
        echo "Nama Saya : " . $nama[$data];
        echo " - Kelas : " . $kelas[$data] . "<hr>";
    }
}
?>