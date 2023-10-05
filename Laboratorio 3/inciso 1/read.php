<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de habitaciones</title>
</head>
<body>


<?php

include('conexion.php');

$sql = "SELECT id,descripcion,numero_camas FROM tipo_habitacion";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT id,descripcion,numero_camas FROM tipo_habitacion WHERE id = $id";
}
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <table border=1>
        <tr>
            <th>Id</th>
            <th>Descripcion</th>
            <th>Numero de camas</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['numero_camas']; ?></td>
            <td>
                <a href="form_update_tipo_habitacion.php?id=<?php echo $row['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </td>

        </tr>

        <?php } ?>

    </table>
<?php } else {
    echo "No hay resultados";
} 
?>
<a href="form_insert_tipo_habitacion.php">Insertar</a>
    
</body>
</html>
