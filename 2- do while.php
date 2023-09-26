<?php
// --------------------------------
// -- Bucle Do While
// --------------------------------

/*

La idea del bucle do while es ejecutar un bloque de código al menos una vez hasta que la expresión haya cambiado.


SIEMPRE EJECUTA EL CODIGO AL MENOS UNA VEZ
do{
//código
}while(expresión);

En otros lenguajes existe un bucle similar

repeat{
    //código
}until(!expresión);
*/
$condicion = !$A && $B || $C;

do {
    // Código a ejecutar al menos una vez
} while ($condicion);

//Ejemplo 1: Contar hasta un número determinado

echo " ---- do-while 1 ----" . PHP_EOL;

$contador = 1;

do {
    echo $contador . " ";
    $contador++;
} while ($contador <= 5);

// Salida: 1 2 3 4 5

//Ejemplo 2: Leer datos del usuario hasta que ingrese un valor específico

echo " ---- do-while 2 ----" . PHP_EOL;

$entrada = "";

do {
    echo "Ingresa 'salir' para finalizar: ";
    $entrada = readline();
    echo "Ingresaste: " . $entrada . "\n";
} while ($entrada !== "salir");

//Ejemplo 3:  Juego de los dados

echo " ---- do-while 3 ----" . PHP_EOL;

$lanzamientos = 0;
$dado1 = 0;
$dado2 = 0;

do {
    $dado1 = rand(1, 6); // Generar un número aleatorio entre 1 y 6 para simular el lanzamiento del dado
    $dado2 = rand(1, 6); // Generar un número aleatorio entre 1 y 6 para simular el lanzamiento del dado
    echo $dado1. PHP_EOL;
    echo $dado2. PHP_EOL;
    $lanzamientos++;
} while ($dado1+$dado2 < 10);

echo "¡Felicidades! Ganaste en $lanzamientos lanzamientos.";
