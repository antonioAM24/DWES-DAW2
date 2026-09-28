<?php

declare(strict_types=1);

date_default_timezone_set('Europe/Madrid');

$fechaFija1 = new DateTimeImmutable('2026-09-01');

$fechaFija2 = new DateTimeImmutable('2026-09-18');

$diferenciaDias = $fechaFija1->diff($fechaFija2);

echo "Fecha numero 1: " .$fechaFija1->format('d/m/Y H:i') . 
"<br> fecha numero 2: ".$fechaFija2->format('d/m/Y H:i'). 
"<br> con una diferencia de dias en: ".$diferenciaDias->days;

