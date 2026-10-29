<?php

declare(strict_types=1);

namespace Antonio\Biblioteca\modelo;

use DateTimeImmutable;
use InvalidArgumentException;

abstract class Libro
{
    public function __construct(
        private string $titulo,
        private string $autor,
        private int $paginas,
        private string $genero,
        private int $unidades,
        private ?DateTimeImmutable $fechaAlta,
        private bool $destacado,
        private string $observaciones
    ) {
        $this->titulo = self::normalizar($this->titulo);
        $this->autor = self::normalizar($this->autor);
        $this->genero = self::normalizar($this->genero);
        $this->observaciones = self::normalizar($this->observaciones);

        if ($this->titulo === '' || $this->autor === '' || $this->genero === '') {
            throw new InvalidArgumentException('Argumentos vacios');
        }
        if (mb_strlen($this->titulo, 'UTF-8') > 120 || mb_strlen($this->autor, 'UTF-8') > 100) {
            throw new InvalidArgumentException('Tamaños incorrectos');
        }
    }

    private static function normalizar(string $texto): string
    {
        return mb_strtolower(trim($texto));
    }



    public function titulo(): string
    {
        return $this->titulo;
    }

    public function autor(): string
    {
        return $this->autor;
    }

    public function páginas(): int
    {
        return $this->paginas;
    }

    public function genero(): string
    {
        return $this->genero;
    }

    public function unidades(): int
    {
        return $this->unidades;
    }

    public function fechaAlta(): ?DateTimeImmutable
    {
        return $this->fechaAlta;
    }

    public function destacado(): bool
    {
        return $this->destacado;
    }

    public function observaciones(): string
    {
        return $this->observaciones;
    }

    public abstract function getTipo(): string;
    public abstract function costeRepositoriosCentimos(): int;
}
