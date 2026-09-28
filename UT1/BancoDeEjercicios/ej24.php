<?php

// Esto no funciona
//$contador = 0;
//function incrementar() {
//    $contador++;
//}
//incrementar();
//echo $contador;

//Porque no se definio la variable $contador en la funcion incrementar y poner un numero en el incrementar.
$contador = 0;
function incrementar(int $contador) {
    $contador++;
}
incrementar(1);
echo $contador;