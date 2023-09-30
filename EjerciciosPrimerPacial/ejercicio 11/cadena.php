<?php 
class cadena{

    public $palabra1 = '';
    public $palabra2 = '';

    public function __construct(){
        $this->palabra1 = $_GET['cadena1'];
        $this->palabra2 = $_GET['cadena2'];
    }

    function cruzar ($cad1, $cad2) {
        $cad1 = str_split($cad1);
        $cad2 = str_split($cad2);
        $indexX = 0;
        $indexY = 0;
        
        
        for ($i=0; $i < count($cad1); $i++) { 
            for ($j=0; $j < count($cad2); $j++) { 
                if ($cad1[$i] == $cad2[$j]) {
                    $indexX = $i;
                    $indexY = $j;
                }
            }
        }

        echo "<table border='1' style='border-collapse: collapse;'>";
        for ($i=0; $i < count($cad1); $i++){
            echo "<tr>";
            for ($j=0; $j < count($cad2); $j++){
                if ($i == $indexY && $j == $indexX) {
                    echo "<td style='background-color: green;'>" . $cad2[$j] . "</td>";
                }else if ($i == $indexY) {
                    echo "<td style='background-color: red;'>" . $cad2[$j] . "</td>";
                }else if ($j == $indexX) {
                    echo "<td style='background-color: red;'>" . $cad1[$i] . "</td>";
                }else{
                    echo "<td>" . " " . "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

$cadena = new cadena();

$cadena->cruzar($cadena->palabra1, $cadena->palabra2);

?>