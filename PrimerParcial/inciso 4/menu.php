<?php
    session_start();
    if (!isset($_GET['operacion'])) {
        $_SESSION['operacion'] = NULL;
    }
    else{
        $_SESSION['operacion'] = $_GET['operacion'];
    }

    class calculadora{

        public $a;
        public $b;

        public function __construct(){
            $this->a = $_GET['n1'];
            $this->b = $_GET['n2'];
        }

        public function sumar($a, $b){
            return $a + $b;
        }

        public function restar($a, $b){
            return $a - $b;
        }

        public function multiplicar($a, $b){
            return $a * $b;
        }

        public function dividir($a, $b){
            return $a / $b;
        }
    }

    $calculadora = new calculadora();
    $operacion = $_SESSION['operacion'];
    if ($operacion == 'sumar') {
        echo "El resultado de la suma es: " . $calculadora->sumar($calculadora->a, $calculadora->b);
    } elseif ($operacion == 'restar') {
        echo "El resultado de la resta es: " . $calculadora->restar($calculadora->a, $calculadora->b);
    } elseif ($operacion == 'multiplicar') {
        echo "El resultado de la multiplicacion es: " . $calculadora->multiplicar($calculadora->a, $calculadora->b);
    } elseif ($operacion == 'dividir') {
        echo "El resultado de la division es: " . $calculadora->dividir($calculadora->a, $calculadora->b);
    }
    

    $a = $calculadora->a;
    $b = $calculadora->b;


    echo "<form action='menu.php' method='GET'>";
    echo "<select name='operacion'>";
    echo "<option value='sumar'>Sumar</option>";
    echo "<option value='restar'>Restar</option>";
    echo "<option value='multiplicar'>Multiplicar</option>";
    echo "<option value='dividir'>Dividir</option>";
    echo "</select>";
    echo "<input type='hidden' name='n1' value='$a'>";
    echo "<input type='hidden' name='n2' value='$b'>";
    echo "<input type='submit' value='Calcular'>";
    echo "</form>";

?>