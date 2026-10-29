<?php

declare(strict_types=1);

namespace Antonio\Biblioteca\modelo;

use Antonio\Biblioteca\modelo\Libro;

class BibliotecaService
{
    public function __construct(private array $libros){}


    public function todos(): array
    {
        return $this->libros;
    }
    public function agregar(Libro $libro): void
    {
        $libros[] = $libro;
    }
    private static function normalizar(string $texto): string {
        return mb_strtolower(trim($texto));
    }

    public function filtrar(
        string $q,
        string $genero,
        string $tipo,
        bool $soloDestacados
    ): array {
        $texto = self::normalizar($q);

        return array_filter(
            $this->todos(),
            fn(Libro $l) => (str_contains(self::normalizar($l->titulo()), $texto) ||
            str_contains(self::normalizar($l->autor()), $texto)) &&
            ($genero === '' || $l ->genero() === $genero) &&
            ($tipo === '' || $l ->getTipo() === $tipo) &&
            (!$soloDestacados || $l ->destacado())
        );
    }
    public function filas(array $libros): array
    {
       return array_map(
        fn(Libro $l) => [
            "titulo" => $l->titulo(),
            "autor" => $l->autor(),
            "paginas" => $l->páginas(),
            "genero" => $l->genero(),
            "tipo" => $l->getTipo(),
            "unidades" => $l->unidades(),
            "fechaAlta" => $l->fechaAlta()?->format('Y-m-D') ?? "Sin fecha",
            "destacado" => $l->destacado(),
            "observaciones" => $l->observaciones(),
            "costeCentimos" => $l->costeRepositoriosCentimos(),
        ],
        $libros
       );
    }
    public function resumen(array $libros): array {
        $libros = array_reduce(
            $this->todos(),
            fn (array $carry, Libro $l) => [
                "titulos" => ++$carry{"titulos"},
                "unidades" => ++$carry{"unidades"} + $l->unidades(),
                "paginas" => ++$carry{"paginas"} + $l->páginas(),
                "costeCentimos" => ++$carry{"costeCentimos"} + $l->costeRepositoriosCentimos()
            ]
        );
    }
}
