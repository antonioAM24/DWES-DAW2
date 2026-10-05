<?php

// Ejercicio 4. array_filter
// Dado un catálogo de libros en arrays, obtén solo los disponibles mediante array_filter y una arrow
// function. Comprueba qué ocurre con las claves originales del array.

$paginas = [213, 43, 29];
$libros = array_filter($paginas, fn(int $n): bool => $n < 200,);

print_r($libros);

?>
