<?php

use App\Model\Libro;

require_once __DIR__ . '/../src/Model/Libro.php';

$libro = new Libro('Dune');

echo $libro->titulo() . PHP_EOL;

?>