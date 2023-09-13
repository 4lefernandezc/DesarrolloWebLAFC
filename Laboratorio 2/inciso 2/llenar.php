<?php 
    session_start();

    $size = $_POST['n'];
    function llenar($n){
        $arr = array();
        for ($i=0; $i < $n; $i++) { 
            $arr[$i] = rand(1,100);
        }
        return $arr;
    }


    $_SESSION['arr'] = llenar($size);

    print_r($_SESSION['arr']);

    echo "
    <form action='eliminar.php' method='post'>
        <label for='n'>Ingrese el numero base para eliminar los mayores</label>
        <input type='number' name='n' id='n'>    
        <input type='submit' value='Eliminar'>
    ";
?>