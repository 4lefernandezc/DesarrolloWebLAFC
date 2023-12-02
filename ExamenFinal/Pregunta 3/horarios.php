
<?php

    if (isset($_GET["mat"])) {
        $materia = $_GET["mat"];
        include "conexion.php";
        $sql = "SELECT dia, hora FROM horarios WHERE materia = '$materia'";
        $result = $con->query($sql);
        
        $horarios = array();
        while ($fila = $result->fetch_assoc()) {
            $horarios[] = $fila;
        }
    
        $horarios = json_encode($horarios);
    
        echo $horarios;
    }

?>