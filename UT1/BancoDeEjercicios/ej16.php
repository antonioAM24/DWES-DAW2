<?php
$libro = [
 'id' => 10,
 'titulo' => 'La caida',
 'autor' => 'Florentino Pérez',
 'paginas' => 32,
 'disponible' => true,
];

$libro['disponible'] = false;

foreach ($libro as $clave => $valor) {
    if (is_bool($valor)) {
        $valor = $valor ? 'Sí' : 'No';
    }
    echo "{$clave} : {$valor} <br>";
}