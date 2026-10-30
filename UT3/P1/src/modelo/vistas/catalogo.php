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

</body>
</html>