<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="alta.php" method="post">
        
    </form>
    

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
</body>
</html>