<?php 

$array = [];

for ($i = 0; $i < 20; $i++) {
    $array[$i] = $i+1;
}


$pares = [];
$impares = [];

foreach ($array as $value) {
    if ($value % 2 == 0) {
        array_push($pares, $value);
    }
    else {
        array_push($impares, $value);
    }
}

echo "array original: <br/>";
print_r($array);
echo "<br/>";
echo "array impares: <br/>";
print_r($impares);
echo "<br/>";
echo "array pares: <br/>";
print_r($pares);

?>