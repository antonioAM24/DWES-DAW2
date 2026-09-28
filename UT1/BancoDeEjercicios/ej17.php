<?php

$catalogo = [
    ["Titulo" => "Nada1", 
    "autor" => "Negreira1"],

    ["Titulo" => "Nada2", 
    "autor" => "Negreira2"],

    ["Titulo" => "Nada3", 
    "autor" => "Negreira3"],

    ["Titulo" => "Nada4", 
    "autor" => "Negreira4"]
];

foreach ($catalogo as $libro){
    echo "{$libro} <br>";
}