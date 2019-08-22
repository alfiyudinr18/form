<?php
if(isset($_POST['Pilih'])){
    echo "band favorit : <br>";
    if(isset($_POST['b1'])){
        echo "+ ".$_POST['b1']."<br>";
    }
    if(isset($_POST['b2'])){
        echo "+ ".$_POST['b2']."<br>";
    }
    if(isset($_POST['b3'])){
        echo "+ ".$_POST['b3']."<br>";
    }
    if(isset($_POST['b4'])){
        echo "+ ".$_POST['b4']."<br>";
    }
}
?>