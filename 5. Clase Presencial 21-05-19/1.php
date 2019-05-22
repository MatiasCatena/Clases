<?php
    
    //Ejercicio 1

    //Punto 1
    $persona = [

        "Nombre" => "Jon",
 
        "Apellido" => "Snow",
 
        "Edad" => "27",
 
        "Hobbies" => ["Netflix","Fútbol","Programar"],
 
    ];

    //Punto 2
     $persona["Edad"] = 25;
    
    //Punto 3
     $persona["Direccion"] = "Winterfell";
 
    //Punto 4
     array_push($persona["Hobbies"], "Tennis");
     
    /* Otras Opciones
     1. $persona["Hobbies"][] = "Tennis";
     2. $hobbies = $persona["Hobbies"];
        $hobbies[] = "Tennis";
    */

     print_r($persona);

    echo "<hr>";

    //Condicionales
        //Punto 1
        $var1 = 10;
        $var2 = 100;

        if ($var1 > $var2) {
            echo "El numero mayor es " . var1;
        }
         
        else {
            echo "El numero mayor es " . $var2;
        }
        echo "<hr>";

        //Punto 2

        $num1 = 1;
        $num2 = 5;
        $resultado = rand($num1, $num2);
        if ($resultado == 3 || $resultado == 5) {
            echo $resultado;
        }
        echo "<hr>";

        //Punto 3
        if ($resultado !== 3) {
            echo "El numero NO es 3";
        }

        else {
            echo $resultado;
        }
        echo "<hr>";

        //Punto 4
        $uno = 1;
        $cien = 100;
        $numero_mayor_menor = rand($uno, $cien);

        if ($numero_mayor_menor > 50) {
            echo "El numero es mayor a 50";
        }
        else if ($numero_mayor_menor == 50) {
            echo "El numero es 50";
        }
        else if ($numero_mayor_menor < 50) {
            echo "El numero es menor a 50";
        }
        echo "<hr>";
        
        //Punto 5
        $nombreDeUsuario = "Admin";
        $ContraseniaDeUsuario = "1234";

        if ($nombreDeUsuario == "Admin" && $ContraseniaDeUsuario == "1234") {
            echo "Bienvenido!!";
        }
        else {
            echo "Error en el login";
        }
        echo "<br>";

        //Punto 5 a
        if ($nombreDeUsuario !== "Admin" && $nombreDeUsuario !== "") {

            echo "El nombre de usuario no es correcto";
     
        } else if ($nombreDeUsuario == "") {
     
            echo "El nombre de usuario está vacio";
     
        }
        echo "<br>";
        if ($ContraseniaDeUsuario !== "1234" && $ContraseniaDeUsuario !== "") {
     
            echo "La contrasenia no es correcta";
     
        } else if ($ContraseniaDeUsuario == "") {
     
            echo "La contrasenia está vacia";
     
        }
        echo "<hr>";

        //Punto 6
        $edad = 20;
        $casado = false;
        $sexo = Array("Masculino", "Femenino", "Otro");
        //$sexo = "Otro";
        
        if ($edad >= 18 && $casado == false) {
            echo "Bienvenido";
        }
        
        //Punto 6 a
        else if ($sexo == "Otro") {
            echo "Bienvenido Otro";
        }
        echo "<hr>";

        //Punto 7
        
?>