<?php
//Archivo superficie.php
// Ejercicio 2 a
echo "Ejercicio 2 a: <br><br>";
$base = 10;

$altura = 20;

function triangulo($base, $altura) {

   echo "La superficie del triangulo es " . $base * $altura / 2;

}
triangulo($base, $altura);
echo "<hr>";

// Ejercicio 2 b
echo "Ejercicio 2 b: <br><br>";
$lado1 = 10;

$lado2 = 20;

function rectangulo($lado1, $lado2) {

   echo "La superficie del rectangulo es " . $lado1 * $lado2;

}
rectangulo($base, $altura);
echo "<hr>";

// Ejercicio 2 c
echo "Ejercicio 2 c: <br><br>";
$lado1 = 5;

function cuadrado($lado1) {

   echo "La superficie del cuadrado es " . $lado1 * $lado1;

}
cuadrado($lado1);
echo "<hr>";

// Ejercicio 2 d
echo "Ejercicio 2 d: <br><br>";

$radio = 10;

function circulo($radio) {

   echo "La superficie del circulo es ". pi() * $radio * $radio;

}
circulo($radio);
echo "<hr>";
?>
