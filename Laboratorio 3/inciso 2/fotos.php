<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotos de la habitacion</title>
</head>
<body>
    <?php
    include('conexion.php');
    $id=$_GET['id'];
    $sql="SELECT fotografia from fotos_habitacion where id_habitacion=$id";
    $resultado = $con->query($sql);
    ?>

    <?php while ($row = $resultado->fetch_assoc()) { ?>
        <img src="images/<?php echo $row['fotografia']?>" width="100px" />
    <?php } ?>

    <form action="create_foto.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="fotografia">Fotografia</label>
            <input type="file" name="fotografia" value="<?php echo $row['fotografia']?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar">
    </form>
    
</body>
</html>