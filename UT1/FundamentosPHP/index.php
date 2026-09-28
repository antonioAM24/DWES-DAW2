<?php

declare(strict_types=1);


CONST LIMITDAY = 7;
CONST PENALIZACION_DINERO = 0.50;

// Definir los valores en arrays para cada parametro
$tipo = ['alumno','profesor','externo'];
$renovacion = ['si','no'];

/* 1º */

$tipo = $_GET['tipo'] ?? 'externo';
$dias = $_GET['dias'] ?? '0';
$renovacion = $_GET['renovacion'] ?? 'no';

/* 2 */
$DiasFaltantes = (int) $dias;

/* 3 */

$MaximoDiasPrestamo = match (strtolower('tipo')) {
    'alumno' => 15,
    'profesor' => 30,
    'externo' => 7
};

/* 4 */

$LimiteDias = $MaximoDiasPrestamo;
if ($renovacion === 'si' && (strtolower('tipo')) !== 'Externo'){
    $LimiteDias +-7;
}

/* 5 y 6 */
$DiaRetraso = max(0, $DiasFaltantes - $LimiteDias);
$penalizado = $DiaRetraso * PENALIZACION_DINERO;

if($DiasFaltantes < $LimiteDias){
    $Estado = "Correcta";
}elseif($DiasFaltantes === $LimiteDias){
    $Estado = "Esta es ultimo dia de aviso";
}elseif($DiasFaltantes <= PENALIZACION_DINERO){
    $Estado = "Tienes un retraso leve";
}else{
    $Estado = "Chaval, tu retraso es grave.";
}

/* 7 */

$Mensajito = "El usuario de tipo $tipo tiene un límite de 
$LimiteDias días (renovación: $renovacion). 
Ha transcurrido $DiasFaltantes días. Estado actual: $Estado. 
Penalización: " . number_format($penalizado, 2) . " €.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamentos PHP</title>
</head>
<body>
    <h1>Prestamos de dias</h1>
    
</body>
</html>




