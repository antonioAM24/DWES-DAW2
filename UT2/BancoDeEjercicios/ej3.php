<?php

// Ejercicio 3. Arrow functions
// Reescribe una closure sencilla como arrow function. Usa un $factor externo, aplica la función a un
// número y explica qué variable se captura automáticamente por valor

$factor = 3;

$doble = fn(int $n): int => $n * $factor; // la variable factor se captura por valor.

echo $doble(6);

?>