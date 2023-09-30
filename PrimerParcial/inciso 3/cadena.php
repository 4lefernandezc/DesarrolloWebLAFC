<?php

    $cad1 = $_POST['cadena1'];
    $cad2 = $_POST['cadena2'];


    for ($i=0; $i < strlen($cad1); $i++) { 
        if ($cad1[$i] == $cad2[0]) {
            for ($j=0; $j < strlen($cad2); $j++) { 
                if ($cad1[$i+$j] != $cad2[$j]) {
                    echo "La cadena 1 no contiene a la cadena 2";
                    break 2;
                }
                if ($j == strlen($cad2)-1) {
                    echo $cad1." contiene a ".$cad2;
                    $cad1 = str_replace($cad2, "", $cad1);
                    echo "<br>";
                    echo "La cadena 1 sin la cadena 2 es: ".$cad1;
                    break 2;
                }
            }
        }
    }


?>
