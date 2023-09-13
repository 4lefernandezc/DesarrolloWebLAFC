
<?php 

    $filas = $_POST['filas'];
    $columnas = $_POST['columnas'];
    $color1 = $_POST['color1'];
    $color2 = $_POST['color2'];

    echo "<table border='1' style='
        border-collapse: collapse;
        width: 400px;
        height: 400px;
    '>";
    for($i = 0; $i < $filas; $i++){
        echo "<tr>";
        for($j = 0; $j < $columnas; $j++){
            if($i % 2 == 0){
                if($j % 2 == 0){
                    echo "<td bgcolor='$color1'></td>";
                }else{
                    echo "<td bgcolor='$color2'></td>";
                }
            }else{
                if($j % 2 == 0){
                    echo "<td bgcolor='$color2'></td>";
                }else{
                    echo "<td bgcolor='$color1'></td>";
                }
            }
        }
        echo "</tr>";
    }

?>