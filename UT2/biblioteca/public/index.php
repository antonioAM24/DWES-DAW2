<?php

use App\Model\Libro;

use App\Importacion\Libro as LibroImportado;

require_once __DIR__ . '/../vendor/autoload.php';

$libro = new Libro('Dune');

$importado = new LibroImportado('El Hobbit');

echo $libro->titulo() . PHP_EOL;

echo $importado->titulo() . PHP_EOL;
