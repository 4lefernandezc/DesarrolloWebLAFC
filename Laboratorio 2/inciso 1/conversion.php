<?php 
        $entrada = $_GET['entrada'];
        $uniEntrada = $_GET['uniEntrada'];
        $uniSalida = $_GET['uniSalida'];
        $unidad = '';

        switch ($uniEntrada) {
            case 1:
                $entrada = $entrada;
                break;
            case 2:
                $entrada = $entrada * 10;
                break;
            case 3:
                $entrada = $entrada * 100;
                break;
            case 4:
                $entrada = $entrada * 1000;
                break;
            case 5:
                $entrada = $entrada * 1000000;
                break;
        }

        switch ($uniSalida) {
            case 1:
                $entrada = $entrada;
                $unidad = 'mm';
                break;
            case 2:
                $entrada = $entrada / 10;
                $unidad = 'cm';
                break;
            case 3:
                $entrada = $entrada / 100;
                $unidad = 'dm';
                break;
            case 4:
                $entrada = $entrada / 1000;
                $unidad = 'm';
                break;
            case 5:
                $entrada = $entrada / 1000000;
                $unidad = 'km';
                break;
        }

        echo "<h1 style='
        margin: 0 auto;
        width: 500px;
        font-family: Arial, Helvetica, sans-serif;
        border: 2px solid yellow;
        text-align: center;
        border-radius: 10px;
        background-color: grey;
        color: white;
        '>Resultado: $entrada $unidad</h1>
        ";
?>

    