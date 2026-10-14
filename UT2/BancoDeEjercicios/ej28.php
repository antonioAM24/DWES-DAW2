<?php
// Ejercicio 28. De array a objeto
// Transforma este array en una clase Libro. Declara las propiedades públicas con tipos string, int y
// bool, y escribe un constructor explícito que reciba y asigne los cuatro datos.
 $datos = [
  'titulo' => 'Dune',
  'autor' => 'Frank Herbert',
  'paginas' => 412,
  'disponible' => true,
 ];
// Crea un objeto con los valores del array. Muestra su título, autor, páginas y disponibilidad usando ->.
// Identifica la clase, el objeto y su estado.


class libro {
    public string $titulo;
    public string $autor;
    public int $paginas;
    public bool $disponible;

    public function __construct(string $titulo, string $autor, int $paginas, bool $disponible){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->disponible = $disponible;
    }

}
$libros = new libro('Dune', 'Frank Herbert', 412, true);

echo "Titulo: " . $libros -> titulo . "<br>";
echo "Autor: " . $libros -> autor . "<br>";
echo "Paginas: " . $libros -> paginas . "<br>";
echo "disponible: " . $libros -> disponible . "<br>";

?>