<?php
use function App\Soporte\e;
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Catálogo del inventario</title></head>
<body>
<h1>Catálogo del inventario</h1>
<p><a href="alta.php">Dar de alta un material</a></p>
<!-- Bloque de errores proporcionado. Cada entrada identifica el campo y su mensaje. -->
<?php if ($errores !== []): ?>
    <ul role="alert">
        <?php foreach ($errores as $campo => $mensaje): ?>
            <li><?= e($campo) ?>: <?= e($mensaje) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<!-- COMPLETAR 1. Formulario GET con controles HTML estáticos. -->
<form method="GET" action="index.php">
    <fieldset>
        <legend>Filtrar inventario</legend>
        <div>
            <label for="busqueda">Buscar por nombre:</label>
            <input type="text" id="busqueda" name="busqueda" value="<?= e($_GET['busqueda'] ?? '') ?>">
        </div>
        <div>
            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria">
                <option value="">-- Todas las categorías --</option>
                <option value="deportes" <?= (($_GET['categoria'] ?? '') === 'deportes') ? 'selected' : '' ?>>Deportes</option>
                <option value="material" <?= (($_GET['categoria'] ?? '') === 'material') ? 'selected' : '' ?>>Material General</option>
            </select>
        </div>
        <button type="submit">Filtrar</button>
    </fieldset>
</form>
<?php if ($errores === []): ?>
    <!-- COMPLETAR 3. Tabla de materiales o mensaje si no hay coincidencias. -->
    
<?php endif; ?>
<p><a href="index.php">Limpiar filtros</a></p>
</body>
</html>
