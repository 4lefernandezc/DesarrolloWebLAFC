<?php 

function invertir(){
    $txt = $_GET['palabra'];
    $txt = strrev($txt);
    echo $txt;
}

invertir();
?>