<?php
if(isset($_POST['simpan'])){
    $no = $_POST['no'];
    echo "No Pendaftaran : $no<br><br>";
    $nisn = $_POST['nisn'];
    echo "NISN : $nisn<br><br>";
    $nama = $_POST['nama'];
    echo "Nama : $nama<br><br>";
    $alamat = $_POST['al'];
    echo "Alamat : $alamat<br><br>";
    $tl = $_POST['tl'];
    echo "Tempat Lahir : $tl<br><br>";
    $tgl = $_POST['tgl'];
    echo "Tanggal Lahir : $tgl<br><br>";
    $jenis = $_POST['jk'];
    echo "Jenis Kelamin : $jenis<br><br>";
    $jurusan = $_POST['jurusan'];
    echo "Jurusan : $jurusan<br><br>";
    $ayah = $_POST['ayah'];
    echo "Nama ayah : $ayah<br><br>";
    $paya = $_POST['paya'];
    echo "Pekerjaan ayah : $paya<br><br>";
    $ibu = $_POST['ibu'];
    echo "Nama ibu : $ibu<br><br>";
    $pibu = $_POST['pibu'];
    echo "Pekerjaan ibu : $pibu<br><br>";
    echo "Hobi : <br><ul>";
    if(isset($_POST['h1'])){
        echo "<li> ".$_POST['h1']."<br></li>";
    }
    if(isset($_POST['h2'])){
        echo "<li> ".$_POST['h2']."<br></li>";
    }
    if(isset($_POST['h3'])){
        echo "<li> ".$_POST['h3']."<br></li>";
    }
    if(isset($_POST['h4'])){
        echo "<li> ".$_POST['h4']."<br></li>";
    }
    if(isset($_POST['h5'])){
        echo "<li> ".$_POST['h5']."<br></li>";
    }
    echo "</ul><br>";
    $agama = $_POST['agama'];
    echo "Agama : $agama<br>";
}
?>