<?php
declare(strict_types=1);

final class Libro
{
    public function __construct(
        public int $id,
        public string $título,
        public int $páginas,
        public Autor $autor,
        public Categoria $Categoria,
        public bool $disponible = true)
    {
        
    }


    // Fase 2: constructor con promoción de propiedades públicas tipadas.
    // Fase 3: título sin espacios en los extremos y valores por defecto si no es válido o las páginas no son positivas.
    // Fase 5: prestar(), devolver() y ficha().
    
}
?>