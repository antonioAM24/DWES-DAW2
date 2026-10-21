<?php
// Con un array de páginas, comprueba con array_any si existe algún libro con más de 1000 páginas y
// con array_all si todos tienen un número de páginas mayor que 0.
$paginas = [960,1620,58921378,25309];

$masDelMil = array_any(
    $paginas,
    fn(int $n): bool => $n > 1000,
);

$mayorQueCero = array_all(
    $paginas,
    fn(int $n): bool => $n > 0,
);

echo $masDelMil. "<br>";
echo $mayorQueCero;

?>