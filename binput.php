<?php
if(isset($_POST['bintang'])){
    $a = $_POST['ang'];
    for ($i=1; $i <= $a ; $i++) {
        for ($j=$a; $j >= $i; $j--) {
        echo "&nbsp;";
        }
        for ($k=1; $k <= $i; $k++) {
        echo "*";
        }
    echo "<br>";
}

    echo "jumlah bintang : $a";
}
?>