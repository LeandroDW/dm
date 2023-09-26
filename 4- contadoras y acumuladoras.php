<?php

// --------------------------------
// -- Variables contadoras y acumuladoras
// --------------------------------

// Ejemplo: Usando una variable contadora para contar hasta 5.

$contador = 0;

for ($i = 1; $i <= 5; $i++) {
    $contador++;
}

echo "El bucle se repitió " . $contador . " veces.";
// Salida: El bucle se repitió 5 veces.

//-------------------------------------------

//Ejemplo: Usando una variable acumuladora para sumar los primeros 10 números naturales.
$suma = 0;

for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
}

echo "La suma de los primeros 10 números naturales es: " . $suma;
// Salida: La suma de los primeros 10 números naturales es: 55

//---------------------------------------------

$contador = 0;
$suma = 0;

echo "Ingresa una lista de números dando enter (ingresa 'fin' para terminar):\n";

while (true) {
    $numero = readline();
    if ($numero === 'fin') {
        break;
    }
    $contador++;
    $suma += $numero;
}

if ($contador > 0) {
    $promedio = $suma / $contador;
    echo "La cantidad de números ingresados es: " . $contador . "\n";
    echo "La suma de los números ingresados es: " . $suma . "\n";
    echo "El promedio de los números ingresados es: " . $promedio . "\n";
} else {
    echo "No se ingresaron números.\n";
}