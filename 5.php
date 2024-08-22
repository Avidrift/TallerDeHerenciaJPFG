<?php

// Clase base InstrumentoMusical
abstract class InstrumentoMusical {
    public $tipo;
    public $material;

    public function __construct($tipo, $material) {
        $this->tipo = $tipo;
        $this->material = $material;
    }

    abstract public function tocar();
    abstract public function afinar();
}

// Clase derivada Guitarra
class Guitarra extends InstrumentoMusical {
    public $numeroCuerdas;

    public function __construct($material, $numeroCuerdas) {
        parent::__construct("Cuerda", $material);
        $this->numeroCuerdas = $numeroCuerdas;
    }

    public function tocar() {
        echo "Tocando la guitarra de $this->material con $this->numeroCuerdas cuerdas.<br>";
    }

    public function afinar() {
        echo "Afinando la guitarra.<br>";
    }
}

// Clase derivada Piano
class Piano extends InstrumentoMusical {
    public $numeroTeclas;

    public function __construct($material, $numeroTeclas) {
        parent::__construct("Tecla", $material);
        $this->numeroTeclas = $numeroTeclas;
    }

    public function tocar() {
        echo "Tocando el piano de $this->material con $this->numeroTeclas teclas.<br>";
    }

    public function afinar() {
        echo "Afinando el piano.<br>";
    }
}

// Clase derivada Violin
class Violin extends InstrumentoMusical {
    public $tamaño;

    public function __construct($material, $tamaño) {
        parent::__construct("Cuerda", $material);
        $this->tamaño = $tamaño;
    }

    public function tocar() {
        echo "Tocando el violín de $this->material de tamaño $this->tamaño.<br>";
    }

    public function afinar() {
        echo "Afinando el violín.<br>";
    }
}

// Crear instancias de cada instrumento musical
$guitarra = new Guitarra("madera", 6);
$piano = new Piano("madera", 88);
$violin = new Violin("madera", "4/4");

// Mostrar resultados
echo "Guitarra:<br>";
$guitarra->tocar();
$guitarra->afinar();
echo "<br>";

echo "Piano:<br>";
$piano->tocar();
$piano->afinar();
echo "<br>";

echo "Violín:<br>";
$violin->tocar();
$violin->afinar();
echo "<br>";

?>
