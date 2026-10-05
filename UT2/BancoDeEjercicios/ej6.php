<?php

// Ejercicio 6. array_reduce
// Calcula el total de páginas de todos los libros mediante array_reduce. Usa 0 como valor inicial e
// indica cómo cambia el acumulador en cada paso.

$paginas = [412, 872, 256, 352, 288, 304, 480, 310, 320, 176, 272, 1200];

$totalPaginas = array_reduce($paginas, fn (int $n, int $p): int => $n + $p, 0 );

print_r($totalPaginas);

?>