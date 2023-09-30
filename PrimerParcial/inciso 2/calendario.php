<?php

    $mes = $_POST['mes'];
    $anio = $_POST['anio'];

    switch ($mes) {
        case 'enero':
            $mes = "01";
            break;
        case 'febrero':
            $mes = "02";
            break;
        case 'marzo':
            $mes = "03";
            break;
        case 'abril':
            $mes = "04";
            break;
        case 'mayo':
            $mes = "05";
            break;
        case 'junio':
            $mes = "06";
            break;
        case 'julio':
            $mes = "07";
            break;
        case 'agosto':
            $mes = "08";
            break;
        case 'septiembre':
            $mes = "09";
            break;
        case 'octubre':
            $mes = "10";
            break;
        case 'noviembre':
            $mes = "11";
            break;
        case 'diciembre':
            $mes = "12";
            break;
    }

    $fecha = "$anio"."-"."$mes"."-"."01";
    
    $numeroDiaSemana = date("w", strtotime($fecha));

    echo "<table border=1 style='border-collapse: collapse; margin: 0 auto'>";
    echo "<tr>";
    echo "<td style='background-color: orange; color: white'>"."Lunes"."</td>";
    echo "<td style='background-color: orange; color: white'>"."Martes"."</td>";
    echo "<td style='background-color: orange; color: white'>"."Miercoles"."</td>";
    echo "<td style='background-color: orange; color: white'>"."Jueves"."</td>";
    echo "<td style='background-color: orange; color: white'>"."Viernes"."</td>";
    echo "<td style='background-color: orange; color: white'>"."Sabado"."</td>";
    echo "<td style='background-color: orange; color: white'>"."Domingo"."</td>";
    echo "</tr>";
    for ($i=0; $i < 6; $i++) { 
        echo "<tr>";
        for ($j=0; $j < 7; $j++) {
            if ($i % 2 == 0){
                if ($numeroDiaSemana == $j) {
                    echo "<td style='background-color: #FDE9D9'>".date("d", strtotime($fecha))."</td>";
                    $fecha = date("Y-m-d", strtotime($fecha."+ 1 day"));
                    $numeroDiaSemana = date("w", strtotime($fecha));
                    if (date("m", strtotime($fecha)) != $mes ){
                        for ($k=$j; $k<6; $k++){
                            echo "<td style='background-color: #FDE9D9'></td>";
                        }
                        break 2; 
                    }
                }else{
                    echo "<td style='background-color: #FDE9D9'></td>";
                }
            } else{
                if ($numeroDiaSemana == $j) {
                    echo "<td>".date("d", strtotime($fecha))."</td>";
                    $fecha = date("Y-m-d", strtotime($fecha."+ 1 day"));
                    $numeroDiaSemana = date("w", strtotime($fecha));
                    if (date("m", strtotime($fecha)) != $mes ){
                        for ($k=$j; $k<6; $k++){
                            echo "<td></td>";
                        }
                        break 2; 
                    }
                }else{
                    echo "<td></td>";
                }
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>