
<?php 
    include("conexion.php");

    $imagenes = array();

    $sql = "SELECT imagen FROM libros";
    $resultado = $con->query($sql);
    while ($imagen = $resultado->fetch_assoc()) {       
        array_push($imagenes, $imagen['imagen']);
    }

    $imagenes = json_encode($imagenes);

    echo $imagenes;
?>
