<?php

// --------------------------------
// -- Bucle For - Para
// --------------------------------

/*

Sintaxis del bucle for

for (expr1; expr2; expr3)
{
//código
}

La primera expresión se ejecuta una vez al principio del bucle.
La mayor parte de las veces se trata de un valor puesto a cero.
La segunda expresión es una declaración condicional(expresión lógica), que se evalúa al principio del bucle en cada iteración.
Si la expresión es verdadera, se ejecuta el código dentro de los paréntesis.
La tercera expresión se ejecuta al final de cada una de las iteraciones del bucle.

 */

//Ejemplo 1: Imprimir números del 1 al 5

for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
} // Salida: 1 2 3 4 5


//Ejemplo 2: Sumar los primeros 10 números naturales
$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
}

echo "La suma de los primeros 10 números naturales es: " . $suma;
echo PHP_EOL;
echo (1+2+3+4+5+6+7+8+9+10);
// Salida: La suma de los primeros 10 números naturales es: 55

// Ejemplo 3: Imprimir números pares del 0 al 20

for ($i = 0; $i <= 20; $i += 2) {
    echo $i . "   ";
}

// Salida: 0 2 4 6 8 10 12 14 16 18 20

//Ejemplo 4: Imprimir números del 10 al 1 en orden decreciente

for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}

// Salida: 10 9 8 7 6 5 4 3 2 1