<?php 

    session_start();

    $arr = $_SESSION['arr'];
    $num = $_POST['n'];

    function eliminarMayor($ar, $n){
        $arr2 = array();
        for ($i=0; $i < count($ar); $i++) { 
            if ($ar[$i] <= $n) {
                array_push($arr2, $ar[$i]);
            }
        }
        return $arr2;
    }

    $arr = eliminarMayor($arr, $num);

    print_r($arr);
?>