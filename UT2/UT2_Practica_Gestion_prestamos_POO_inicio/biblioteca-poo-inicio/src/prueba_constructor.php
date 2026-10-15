<?php
declare(strict_types=1);

require_once __DIR__ . '/Autor.php';
require_once __DIR__ . '/Categoria.php ';
require_once __DIR__ . '/Libro.php'; /*Fase 2.2*/

// Fase 2.1: crea aquí un Autor y una Categoria y muestra sus nombres. ✅
// $autor = new autor(" Frank Herbert ");
// $categoria = new categoria(" ciencia ficción ");

// echo $autor -> nombre;
// echo $categoria -> nombre;

// Fase 2.2: cuando completes Libro.php, añade su require_once arriba. ✅
// Después crea los dos libros y muestra su disponibilidad. 

// $libroº1 = new libro(10, "Dune", 412, $autor, $categoria);

// echo ($libroº1->disponible? ' true ' : ' false ');

// $libroº2 = new libro(10, "Dune", 412, $autor, $categoria, false);

// echo ($libroº2->disponible? ' true ' : ' false ');

// Fase 3.2: sustituye las pruebas anteriores por un Libro construido
// con las variables $titulo y $paginas. Muestra ambas propiedades.

$autor = new autor(" Who? ");
$categoria = new categoria(" nothing ");

$libro1 = new libro(1,'Dune', 412, $autor, $categoria);
// $libro2 = new libro();
// $libro3 = new libro();
// $libro4 = new libro();
// $libro5 = new libro();
// $libro6 = new libro();
// $libro7 = new libro();

?>