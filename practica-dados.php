<?php

$lanzamientos = 0;
$dado1 = 0;
$dado2 = 0;

do {
    $dado1 = rand(1, 6);
    $dado2 = rand(1, 6);
    $lanzamientos++;
} while ($dado1+$dado2 < 10);
echo $dado1. PHP_EOL;
echo $dado2. PHP_EOL;
echo "¡Felicidades! Ganaste en $lanzamientos lanzamientos.";


?>