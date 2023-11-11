<?php
include("../inciso2/conexion.php");
$libros = array();
$sql = "SELECT titulo,imagen FROM libros";
$resultado = $con->query($sql);
while ($libro = $resultado->fetch_assoc()) {
    array_push($libros, $libro);
}
$libros = json_encode($libros);
echo $libros;
?>