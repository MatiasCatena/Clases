<?php

// Ejercicio 1 a y  1 c
echo "Ejercicio 1 a y c: <br><br>";
$value1 = rand(0,10);

$value2 = rand(0,10);

$value3 = rand(0,10);

function mayor($value1, $value2, $value3=100) {

   echo "El numero mayor es " . max($value1, $value2, $value3);

}
mayor($value1, $value2, $value3);

echo "<hr>";

// Ejercicio 1 b y  1 d
echo "Ejercicio 1 b y d: <br><br>";
$base = 0;

$limite = 10;

function tabla($base, $limite=100) {

   $bigValue = max($base, $limite);

   $array = [];

   for($i = $base; $i <= $bigValue; $i++){

       array_push($array, $i);

   }

   var_dump($array);

}
tabla($base, $limite);
echo "<hr>";

?>
