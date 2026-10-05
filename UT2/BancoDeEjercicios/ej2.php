<?php

// Ejercicio 2. Closure con use
// Crea una función anónima que calcule el precio final de un libro capturando una variable externa
// $iva mediante use. Prueba la closure con un precio de 100.0 y muestra el resultado

$iva = 0.02;

$f = function(float $p) use ($iva): float {
    return $p * (1 + $iva);
};

$total = $f(100.0);
echo $total;

?>