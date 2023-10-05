<?php

include('conexion.php');
$foto=$_FILES['fotografia']['name'];
$arreglo=explode(".",$foto);
$extension=$arreglo[1];
$fotografia=uniqid().'.'.$extension;
$id=$_POST['id'];

copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);

$sql="INSERT INTO fotos_habitacion (id_habitacion,fotografia) VALUES ('$id','$fotografia')";

if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />