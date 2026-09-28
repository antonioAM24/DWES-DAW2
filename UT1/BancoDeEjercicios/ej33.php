<?php

$Busqueda = $_GET['q'] ?? '';

$busquedaEscapada = htmlspecialchars($Busqueda, ENT_QUOTES, 'UTF-8');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 33</title>
</head>
<body>
    <h2>Búsqueda de Catálogo</h2>
    
    <?php if ($busquedaEscapada !== ''): ?>
        <p>Buscando: <strong><?= $busquedaEscapada ?></strong></p>
    <?php else: ?>
        <p>Buscando: <i>Sin término de búsqueda</i></p>
    <?php endif; ?>
</body>
</html>