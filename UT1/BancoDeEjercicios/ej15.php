<?php

$generos = ["accion", "aventura", "dramatico", "terror", "epico"];

$generos[] = "Comedia";

$genero[2] = "Ficticio";

unset($genero[0]);


foreach($generos as $valor){
    echo "titulos {$valor}";
}