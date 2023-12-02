
<?php
session_start();

$usuarios = array(
    array("usuario" => "Carlos", "clave" => "1234A"),
    array("usuario" => "Gisela", "clave" => "1234B"));

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$encontrado = false;
foreach ($usuarios as $u) {
    if ($u["usuario"] == $usuario && $u["clave"] == $clave) {
        $encontrado = true;
        break;
    }
}

if ($encontrado) {
    $_SESSION["usuario"] = $usuario;
    header("Location: index.php");
} else {
    header("Location: login.html");
}


?>


