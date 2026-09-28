<?php

declare(strict_types=1);

date_default_timezone_set('Europe/Madrid');

$fechaActual = new DateTimeImmutable('2026-09-24');

$fechaDevolucion = $fechaActual ->modify('+15 days');

echo "Fecha actual: " .$fechaActual->format('d/m/Y H:i') . "<br> fecha de devolucion: ".$fechaDevolucion->format('d/m/Y H:i');