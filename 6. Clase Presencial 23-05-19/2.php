<?php

    //Ejercicio 1
    echo "Ejercicio 1: <br><br>";

    for ($i=0; $i <= 10; $i++) {
      $resultado = 2*$i;
      echo "2x$i = " . $resultado."<br>";
    };

    echo "<hr>";

    //Ejercicio 2
    echo "Ejercicio 2: <br><br>";

    $i = 100;
    while ($i >= 85) {
      echo "$i <br>";
      $i--;
    }
    echo "<hr>";

    //Ejercicio 3
    echo "Ejercicio 3: <br><br>";

    $contador = [];

    for ($i = 1; $i <= 5; $i++) {
      $contador[] = $i;
    }

    $i = 0;
    while ($i <= 4) {
      echo $contador[$i] * 2 . "<br>";
      $i++;
    }
    echo "<hr>";

    //Ejercicio 4
    echo "Ejercicio 4: <br><br>";

    $numero_de_caras = 0;
    $cantidad = 0;

    while ($numero_de_caras <= 5){

        $moneda = rand(0,1);

       if ($moneda == 1){
           $numero_de_caras++;
       }
       $cantidad++;

       echo $cantidad . "<br>";
    }
    echo "<hr>";

    //Ejercicio 5
    echo "Ejercicio 5: <br><br>";

    $nombres = ["Pablo", "Maira", "Luis", "Matias", "Lucio"];

    //Punto a
    echo "Punto a: <br><br>";

    for ($i = 0; $i <= 4; $i++) {
      echo $nombres[$i] . "<br>";
    }
    echo "<br>";

    //Punto b
    echo "Punto b: <br><br>";

    $i = 0;
    while ($i <= 4) {
      echo $nombres[$i] . "<br>";
      $i++;
    }
    echo "<br>";

    //Punto c
    echo "Punto c: <br><br>";
    //$nombres = ["Pablo", "Maira", "Luis", "Matias", "Lucio"];
    $i = 0;
    do {
      echo $nombres[$i] . "<br>";
      $i++;
    }
    while ($i <= 4);
