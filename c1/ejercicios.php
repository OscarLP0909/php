<?php

/* 1. Concatenación de cadenas
Crear dos variables con nombre y apellido, y mostrar en pantalla el nombre completo usando concatenación */

$_nombre = "Oscar";

$_apellido1 = "Luque";

$_apellido2 = "Porca";

$_nombreCompleto = $_nombre. " ". $_apellido1. " ".  $_apellido2;

echo $_nombreCompleto;

// Para concatenar variables, necesitamos emplear el . 
// En otros lenguajes se utiliza el +


// 2. Números del 1 al 10 con un bucle
// Usa un bucle for o while para imprimir los números del 1 al 10 en pantalla

//Bucle For

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

//Bucle while

$j = 1;

while ($j <= 10) {
    echo $j++;
}


// 3.Comprobar si un número es positivo, negativo o cero

//Declarar una variable con un número y usar estructura if-else para determinar si es positivo, negativo o cero

$_numero = 10;

if ($_numero == 0) {
    echo "El número es 0";
} elseif ($_numero > 0) {
    echo "El número es positivo";
} else {
    echo "El número es negativo";
}


// 4. Día de la semana con switch

$_numero = 1;

switch ($_numero) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Elija un número del 1 al 7";
        break;
}

// Factorial
// Crear una función que calcule el factorial de un número dado.

function factorial(int $n): int {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}


echo factorial(5);