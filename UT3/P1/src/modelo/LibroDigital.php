<?php

declare(strict_types=1);

namespace Antonio\Biblioteca\modelo;

use Override;

class LibroPapel1 extends Libro {

    #[Override]
    public function getTipo(): string
    {
        return 'digital';
    }

    #[Override]

    public function costeRepositoriosCentimos(): int
    {
        return $this->unidades() * 400;
    }
}