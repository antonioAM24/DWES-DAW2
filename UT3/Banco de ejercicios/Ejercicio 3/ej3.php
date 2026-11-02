<?php 
// En recibir.php, inicializa titulo a cadena vacía y calcula $esPost a partir de REQUEST_METHOD. Lee
// titulo únicamente dentro de la rama POST.
// Comprueba is_string antes de usar trim. Si llega un array, conserva un error de tipo y utiliza una cadena
// vacía para mostrar el control.
// Prueba un GET inicial, un POST sin titulo, titulo=" Dune " y titulo[]=Dune. El GET no debe mostrar
// errores de validación.
?>