<?php
// Ejercicio 29. Propiedades tipadas y final
// Lee el fragmento e indica qué propiedades están inicializadas. Explica qué ocurriría si se leyera titulo
// inmediatamente después de crear el objeto.
 final class Libro
{
  public string $titulo; /* No esta inicializando porque no tiene un valor por defecto */
  public int $paginas = 0; /* Si está inicializando porque esta asignado con un valor de 0 */ 
  public bool $disponible = true;  /* Si está inicializando porque el valor esta por defecto en true */
}
/* Si intentamos leer el titulo al crear el objeto, nos va a saltar un error de que $titulo no esta inicializando 
por lo cual se necesita inicializarlo antes de crear el objeto */
$libro = new Libro();
//echo $libro -> titulo;

// Asigna 'Solaris' a titulo y 216 a paginas antes de leerlas. Comprueba que final permite crear el objeto
// y modificar sus propiedades públicas. Explica por qué una clase hija que use extends Libro sería
// rechazada, sin incorporarla al archivo que ejecutas.
$titulo = "Solaris";
$paginas = 216;

echo "Titulo: " . $libro -> $titulo . "<br>";
echo "Paginas: " . $libro -> $paginas . "<br>";

?>