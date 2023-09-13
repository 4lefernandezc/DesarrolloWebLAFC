<?php

include("conexion.php");
$carrera=$_POST['nombre'];

$arreglo=explode(".",$archivo_original);
$extension=$arreglo[1];


$sql="INSERT INTO carrera(nombre) values
 ('$carrera') ";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />