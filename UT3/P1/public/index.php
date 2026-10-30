<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/vendor/libros.php';

use Antonio\Biblioteca\Servicio\BibliotecaService;

$bibliotecaServi = new BibliotecaService($libros);

$q = $_GET["q"] ?? "";
$genero = $_GET["genero"] ?? "";
$tipo = $_GET["tipo"] ?? "";
$soloDestacados = isset($_GET["destacados"]);

$librosFiltrados = $bibliotecaServi->filtrar(
    $q,
    $genero,
    $tipo,
    $soloDestacados
);

$filas = $bibliotecaServi->filas($librosFiltrados);
$resumen = $bibliotecaServi->resumen($librosFiltrados);

require dirname(__DIR__) . '/vistas/catalogo.php';
