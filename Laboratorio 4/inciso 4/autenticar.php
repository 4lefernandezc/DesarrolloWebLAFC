<?php

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$Usuario = "admin";
$Clave = "123";


if ($usuario == "admin" && $clave == "123") {
    echo "true";
} else {
    echo "false";
}


?>