<?php
// Ejercicio 8. array_find
// Busca con array_find el primer libro cuyo id sea 3. Muestra su título si existe y contempla
// correctamente el caso en que la función devuelva null. Explica la diferencia principal respecto a
// array_filter.

$libros  = [
     [
        'id' => 1,
        'titulo' => 'Dune',
        'autor' => 'Frank Herbert',
        'genero' => 'ciencia ficcion',
        'paginas' => 412,
        'disponible' => true,
        'fechaAlta' => '2026-09-01',
    ],
    [
        'id' => 2,
        'titulo' => 'El nombre del viento',
        'autor' => 'Patrick Rothfuss',
        'genero' => 'fantasia',
        'paginas' => 872,
        'disponible' => false,
        'fechaAlta' => '2026-08-18',
    ],
    [
        'id' => 3,
        'titulo' => 'Un mago de Terramar',
        'autor' => 'Ursula K. Le Guin',
        'genero' => 'fantasia',
        'paginas' => 256,
        'disponible' => true,
        'fechaAlta' => '2026-07-03',
    ],
    [
        'id' => 4,
        'titulo' => '1984',
        'autor' => 'George Orwell',
        'genero' => 'distopia',
        'paginas' => 352,
        'disponible' => true,
        'fechaAlta' => '2026-06-20',
    ],
]; 

$buscar = array_find(
    $libros,
    fn(array $libro):bool => $libro['id'] === 3,
);
print_r($buscar) // Devuelve el primer elemento que cumple la condición o null si no hay coincidencia.
?>