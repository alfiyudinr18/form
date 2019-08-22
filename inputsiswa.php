<?php
if(isset($_POST['simpan'])){
    $no = $_POST['no'];
    echo "No Pendaftaran : $no<br>";
    $nisn = $_POST['nisn'];
    echo "NISN : $nisn<br>";
    $nama = $_POST['nama'];
    echo "Nama : $nama<br>";
    $alamat = $_POST['al'];
    echo "Alamat : $alamat<br>";
    $tl = $_POST['tl'];
    echo "Tempat Lahir : $tl<br>";
    $tgl = $_POST['tgl'];
    echo "Tanggal Lahir : $tgl<br>";
    $jenis = $_POST['jk'];
    echo "Jenis Kelamin : $jenis<br>";
    $jurusan = $_POST['jurusan'];
    echo "Jurusan : $jurusan<br>";
    $ayah = $_POST['ayah'];
    echo "Nama ayah : $ayah<br>";
    $paya = $_POST['paya'];
    echo "Pekerjaan ayah : $paya<br>";
    $ibu = $_POST['ibu'];
    echo "Nama ibu : $ibu<br>";
    $pibu = $_POST['pibu'];
    echo "Pekerjaan ibu : $pibu<br>";
    echo "Hobi : <br>";
    if(isset($_POST['h1'])){
        echo "+ ".$_POST['h1']."<br>";
    }
    if(isset($_POST['h2'])){
        echo "+ ".$_POST['h2']."<br>";
    }
    if(isset($_POST['h3'])){
        echo "+ ".$_POST['h3']."<br>";
    }
    if(isset($_POST['h4'])){
        echo "+ ".$_POST['h4']."<br>";
    }
    if(isset($_POST['h5'])){
        echo "+ ".$_POST['h5']."<br>";
    }
    $agama = $_POST['agama'];
    echo "Agama : $agama<br>";
}
?>