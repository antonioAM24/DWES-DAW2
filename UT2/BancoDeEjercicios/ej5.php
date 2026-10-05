<?php

// Ejercicio 5. array_map
// Obtén un nuevo array con textos del tipo "Dune - 412 páginas" a partir de un catálogo. La
// transformación debe realizarse con array_map.

$catalogo = [412, 328, 1052];

$etiqueta = array_map(fn (int $n): string => "Dune {$n} paginas", $catalogo);

print_r($etiqueta);

?>