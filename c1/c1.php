<?php

$mensaje = "hola";

function mostrarMensaje() {
global $mensaje; // Indicamos a PHP la variable declarada fuera de la función
    echo "<h1>$mensaje</h1>"; 
}

$_numero = 123;
$_doble = 19.99;
$_cadena = "Cadena";
$_booleano = false;
$_array = array("algo","algo","algo","algo");
$_colores = ["rojo", "amarillo"];



// var_dump($_numero);
// var_dump($_doble);
// var_dump($_cadena);
// var_dump($_booleano);
// var_dump($_array);
// var_dump($_colores);

class Persona {
    public $nombre;
    public $apellido;
    public $edad;
}

$person1 = new Persona();
$person1->nombre = "Ana";
$person1->apellido = "Algo";
$person1->edad = 24;
var_dump($person1);

