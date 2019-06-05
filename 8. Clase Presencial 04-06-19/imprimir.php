<?php

// Ejercicio 1

// echo $_GET["nombre"] . " " . $_GET["email"] . "<br>";
// var_dump($_GET);

// Ejercicio 2 b

// $name = $_GET["nombre"] . "<br>";
// echo $name;
// var_dump($_GET);

// Ejercicio 2 c

//    foreach ($_GET as $key => $valor) {
//      echo "$key => $valor" . "<br>";
//    }
//    var_dump($_GET);

// Ejercicio 3 (cambiar method = "POST" en el html de formulario.php
//        foreach ($_POST as $key => $valor) {
//          echo "$key => $valor" . "<br>";
//        }
//        var_dump($_POST);

// Ejercicio 4

//  print_r (getAllHeaders());

// Ejercicio 5
  print_r($_SERVER);
  echo "<br>";
  echo "<br>";
  $_FILES = 1;
  print_r($_FILES) . "<br>";
  echo "<br>";
  echo "<br>";
  $_REQUEST = 2;
  print_r($_REQUEST) . "<br>";
  echo "<br>";
  echo "<br>";
  $_SESSION = 3;
  print_r($_SESSION) . "<br>";
  echo "<br>";
  echo "<br>";
  $_COOKIE = 4;
  print_r($_COOKIE) . "<br>";
  echo "<br>";
  echo "<br>";
?>
