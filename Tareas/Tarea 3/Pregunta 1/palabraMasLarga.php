<?php 

function palabraMasLarga(){
    $txt = $_GET['palabras'];
    $array = explode(" ", $txt);
    $largo = array_map('strlen', $array);
    $palabraML = max($largo);
    $index = array_search($palabraML, $largo);
    echo $array[$index];
}

palabraMasLarga();
?>