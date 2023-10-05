<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear habitacion</title>
</head>
<body>

    <?php
    include('conexion.php');
    $sql = "SELECT id,descripcion from  tipo_habitacion";
    $resultado = $con->query($sql);
    ?>

    <form action="create.php" method="post" enctype="multipart/form-data"
        <div>
            <label for="nro">Numero</label>
            <input type="text" name="nro">
        </div>
        <div>
            <label for="id_tipo_habitacion">Tipo de habitacion:</label>
            <select name="id_tipo_habitacion">
                <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['descripcion'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="bano_privado">Baño privado</label>
            <input type="number" name="bano_privado">
        </div>
        <div>
            <label for="espacio">Espacio</label>
            <input type="number" name="espacio">
        </div>
        <div>
            <label for="precio">Precio</label>
            <input type="number" name="precio">
        </div>
        <input type="submit" value="Crear">
    </form>
    
</body>
</html>