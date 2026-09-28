<?php

declare(strict_types=1);

date_default_timezone_set('Europe/Madrid');

$timestamp = time();

echo "timestamp actual: $timestamp";

$fechaActual = date('d/m/Y H:1', $timestamp);

echo "fecha: $fechaActual";