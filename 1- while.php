<?php
// --------------------------------
// -- Bucle While 
// --------------------------------

/*

La idea del bucle while es ejecutar un bloque de código hasta que la expresión haya cambiado.

while (expresión lógica)
{
//código
}
*/
$condicion = !$A && $B || $C;

while ($condicion) {
    // Código a ejecutar mientras la condición sea verdadera
}

while (1==0) { // bucle que nunca se ejecuta
    echo "hola mundo";
}

while (1>0 ) { // bucle infinito
    echo "hola mundo";
}

//Ejemplo 1: Contar hasta un número determinado

echo " ---- while ----" . PHP_EOL;

$contador = 1;

while ($contador <= 10) {
    echo $contador . " ";
    $contador++;
} // Salida: 1 2 3 4 5 6 7 8 9 10

//Ejemplo 2: Sumar números hasta alcanzar un límite

echo " ---- while ----" . PHP_EOL;

$suma = 0;
$limite = 100;

while ($suma < $limite) {
    $nuevoNumero = rand(1, 20); // Generar un número aleatorio entre 1 y 20
    $suma += $nuevoNumero;
}

echo "La suma final es: " . $suma;