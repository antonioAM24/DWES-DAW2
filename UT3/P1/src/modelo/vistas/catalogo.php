<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Catálogo de la biblioteca</title>
</head>
<body>
 <h1>Catálogo de la biblioteca</h1>
 <form action="index.php" method="get">
 <!-- Añade aquí los controles y el botón Buscar. -->
  <p>
    <label for="q">Título o autor</label>
    <input type="text" id="q" name="q">
 </p>

 <p>
    <label for="genero">Genero</label>

    <select id="genero" name="genero">
        <option value="">todos</option>
        <option value="ciencia">ciencia</option>
        <option value="fantasia">fantasia</option>
        <option value="terror">terror</option>
    </select>
 </p>

 <p>
    <label for="tipo">tipo de libro</label>

    <select id="tipo" name="tipo">
        <option value="">todos</option>
        <option value="papel">papel</option>
        <option value="digital">digital</option>
    </select>
 </p>

 <p>
    <label for="destacados">solo destacados</label>
    <input type="checkbox", value="1" id="destacados" name="destacados">
 </p>
 <button type="submit">Buscar</button>
 </form>

 <table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Género</th>
            <th>Tipo</th>
            <th>Páginas</th>
            <th>unidades</th>
            <th>Coste de reposición</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($filas as $fila){
                echo "<tr>";
                echo "<td>" . htmlspecialchars($fila['titulo'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')  . "</td>";
                echo "<td>" . htmlspecialchars($fila['autor'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')  . "</td>";
                echo "<td>" . htmlspecialchars($fila['genero'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')  . "</td>";
                echo "<td>" . htmlspecialchars($fila['tipo'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')  . "</td>";
                echo "<td>" . $fila['paginas'] . "</td>";
                echo "<td>" . $fila['unidades'] . "</td>";
                echo "<td>" . $fila['costeCentimos'] . "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
 </table>
 <?php endif; ?>
 <h2>resumen</h2>
 <h3>numero de titulos</h3>
 <p><?= $resumen['titulos']?></p>
 <h3>unidades</h3>
 <p><?= $resumen['unidades']?></p>
 <h3>paginas</h3>
 <p><?= $resumen['paginas']?></p>
 <h3>Coste total</h3>
 <p><?= $resumen['costeCentimos']?></p>
</body>
</html>