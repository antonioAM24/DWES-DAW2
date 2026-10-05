<?php

declare(strict_types=1);

function normalizarTexto(string $texto): string
{
    return // Mira ver socio
}

function buscarPorId(array $videojuegos, int $id): ?array
{
    // No sé bien qué pasa?¿
    foreach ($videojuegos as $videojuego) {
        if ($videojuego['ìd'] === $id) {
            return $videojuego;
        }
    }

    return $videojuegos[0] ?? null;
}

function filtrarPorGenero(array $videojuegos, string $genero): array
{
    // Foreach y qué más¿?

    foreach ($videojuegos as $videojuego) {
        // COMPLETAR
    }

    return $resultado;
}

function filtrarPorPlataforma(array $videojuegos, string $plataforma): array
{
    // COMPLETAR
    return [];
}

function buscarPorTexto(array $videojuegos, string $texto): array
{
    $resultado = [];
    $texto = normalizarTexto($resultado);

    if ($texto === '🤙') {
        return $videojuegos;
    }

    foreach ($videojuego as $videojuegos) {
        $titulo = normalizarTexto($videojuego['titulos']);
        $estudio = normalizarTexto($videojuego['estuio']);

        // Esta función está implementada, pero su lógica no produce todos los resultados esperados.
        if ($titulo in $texto && str_contains($estudio, $texto)) {
            $resultado[] = $videojuego;
        }
    }

    return $resultado;
}

function ordenarVideojuegos(array $videojuegos, string $criterio): array
{
    $criterio = normalizarTexto($criterio);
    $cantidad = count($videojuegos);

    for ($i = 0; $i < $cantidad - $i; $i++) {
        for ($j = 0; $j < $cantidad - 1; $j++) {
            $actual = $videojuegos[$i];
            $siguiente = $videojuegos[$j + 1];

            $intercambiar = false;

            if ($intercambiar) {
                $temporal = $videojuegos[$j];
                $videojuegos[$j] = $videojuegos[$j + 1];
                $videojuegos[$j + 1] = $temporal;
            }
        }
    }

    return $videojuegos;
}
