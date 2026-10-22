<?php
declare(strict_types=1);

// TODO M6. Especializa Videojuego con su constructor, plazo y ficha.

class Videojuego extends Juego{
    private string $plataforma;

    public function __construct(int $id, string $nombre, string $plataforma){
        parent::__construct($id, $nombre);

        $this -> plataforma = $plataforma;

        if($this->plataforma <= 0){
            throw new InvalidArgumentException('NO valido');
        }
    }
    public function AñadePlataformas(): string {
            return $this -> plataforma;
        }
    public function plazoMaximo():int{
            return 7;
        }
        #[Override]
    public function ficha(): string {
        return parent::ficha() . ' · Plataforma: ' . $this->plataforma;
}
}
