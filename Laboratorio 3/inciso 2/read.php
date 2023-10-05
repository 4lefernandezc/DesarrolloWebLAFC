<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones</title>
</head>
<body>

<?php

include('conexion.php');

$sql = "SELECT id,nro,id_tipo_habitacion,bano_privado,espacio,precio FROM habitacion";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT id,nro,id_tipo_habitacion,bano_privado,espacio,precio FROM habitacion WHERE id = $id";
}

$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <table border=1>
        <tr>
            <th>Id</th>
            <th>Nro</th>
            <th>id Tipo de habitacion</th>
            <th>Baño privado</th>
            <th>Espacio</th>
            <th>Precio</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nro']; ?></td>
            <td><?php echo $row['id_tipo_habitacion']; ?></td>
            <td><?php echo $row['bano_privado'] == 1 ? 'SI' : 'NO' ?></td>
            <td><?php echo $row['espacio']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td>
                <a href="form_update_habitacion.php?id=<?php echo $row['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                <a href="fotos.php?id=<?php echo $row['id']; ?>">Ver fotos</a>
            </td>

        </tr>

        <?php } ?>

    </table>
<?php } else {
    echo "No hay resultados";
} 
?>
<a href="form_insert_habitacion.php">Insertar</a>
    
</body>
</html>