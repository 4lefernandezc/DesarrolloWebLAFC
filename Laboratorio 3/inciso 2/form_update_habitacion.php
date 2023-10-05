<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar habitacion</title>
</head>
<body>

    <?php
    include('conexion.php');
    $id = $_GET['id'];
    $sql = "SELECT id,nro,id_tipo_habitacion,bano_privado,espacio,precio FROM habitacion WHERE id = $id";
    $sql1 = "SELECT id,descripcion from  tipo_habitacion";
    $resultado = $con->query($sql);
    $resultado1 = $con->query($sql1);
    $row = $resultado->fetch_assoc();
    ?>

    <form action="update.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="nro">Nro</label>
            <input type="number" name="nro" value="<?php echo $row['nro']?>">
        </div>
        <div>
            <label for="id_tipo_habitacion">Tipo de habitacion:</label>
            <select name="id_tipo_habitacion">
                <?php while ($row_tipo_habitacion = $resultado1->fetch_assoc()) { ?>
                    <option value="<?php echo $row_tipo_habitacion['id'] ?>" 
                    <?php echo $row_tipo_habitacion['id']==$row['id_tipo_habitacion']?"selected":"";  ?>>
                    <?php echo $row_tipo_habitacion['descripcion'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="bano_privado">Baño privado</label>
            <input type="number" name="bano_privado" value="<?php echo $row['bano_privado']?>">
        </div>
        <div>
            <label for="espacio">Espacio</label>
            <input type="number" name="espacio" value="<?php echo $row['espacio']?>">
        </div>
        <div>
            <label for="precio">Precio</label>
            <input type="number" name="precio" value="<?php echo $row['precio']?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar">
    </form>

    
</body>
</html>