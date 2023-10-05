<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar habitacion</title>
</head>
<body>

    <?php include("conexion.php");
    $id=$_GET['id'];
    $sql="SELECT descripcion,numero_camas from tipo_habitacion where id=$id";
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    ?>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" value="<?php echo $row['descripcion']?>">
        </div>
        <div>
            <label for="numero_camas">Numero de camas</label>
            <input type="text" name="numero_camas" value="<?php echo $row['numero_camas']?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar">
    
</body>
</html>