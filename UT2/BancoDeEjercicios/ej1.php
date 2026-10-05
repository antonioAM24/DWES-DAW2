<?php

// Ejercicio 1. Callable y callback
// Crea una función aplicar(int $n, callable $callback): int. Úsala primero con una función doble(int
// $n): int y después con otra función cuadrado(int $n): int. Indica qué valor devuelve cada llamada.

function doble(int $n): int {
    return $n * 2;
}

function cuadrado(int $n): int {
    return $n * $n;
}

function aplicar(int $n, callable $callback): int{
    return $callback($n);
}

$resultado1 = aplicar(5, 'doble');
$resultado2 = aplicar(5, 'cuadrado');

echo $resultado1 ."<br>";
echo $resultado2;

?>
