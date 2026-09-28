<?php

$Titulos = [
    'La Liga',
    'Champions League',
    'Mundial 2026',
    "Copa del rey"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 32</title>
</head>
<body>
    <h2>Lista de titulos</h2>
    <ul>
        <?php foreach($Titulos as $titulo): ?>
            <li>
                <?= $titulo ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

