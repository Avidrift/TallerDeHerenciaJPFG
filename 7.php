<?php

// Clase base Documento
abstract class Documento {
    public $titulo;
    public $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    abstract public function imprimir();
    abstract public function guardar();
}

// Clase derivada Libro
class Libro extends Documento {
    public $numeroPaginas;

    public function __construct($titulo, $autor, $numeroPaginas) {
        parent::__construct($titulo, $autor);
        $this->numeroPaginas = $numeroPaginas;
    }

    public function imprimir() {
        echo "Imprimiendo el libro '$this->titulo' de $this->autor con $this->numeroPaginas páginas.<br>";
    }

    public function guardar() {
        echo "Guardando el libro '$this->titulo'.<br>";
    }
}

// Clase derivada Articulo
class Articulo extends Documento {
    public $revista;

    public function __construct($titulo, $autor, $revista) {
        parent::__construct($titulo, $autor);
        $this->revista = $revista;
    }

    public function imprimir() {
        echo "Imprimiendo el artículo '$this->titulo' de $this->autor en la revista '$this->revista'.<br>";
    }

    public function guardar() {
        echo "Guardando el artículo '$this->titulo'.<br>";
    }
}

// Clase derivada Reporte
class Reporte extends Documento {
    public $fecha;

    public function __construct($titulo, $autor, $fecha) {
        parent::__construct($titulo, $autor);
        $this->fecha = $fecha;
    }

    public function imprimir() {
        echo "Imprimiendo el reporte '$this->titulo' de $this->autor con fecha $this->fecha.<br>";
    }

    public function guardar() {
        echo "Guardando el reporte '$this->titulo'.<br>";
    }
}

// Crear instancias de cada tipo de documento
$libro = new Libro("El Quijote", "Miguel de Cervantes", 863);
$articulo = new Articulo("La teoría de la relatividad", "Albert Einstein", "Scientific American");
$reporte = new Reporte("Informe Anual", "Departamento de Finanzas", "2024-08-22");

// Mostrar resultados
echo "Libro:<br>";
$libro->imprimir();
$libro->guardar();
echo "<br>";

echo "Artículo:<br>";
$articulo->imprimir();
$articulo->guardar();
echo "<br>";

echo "Reporte:<br>";
$reporte->imprimir();
$reporte->guardar();
echo "<br>";

?>
