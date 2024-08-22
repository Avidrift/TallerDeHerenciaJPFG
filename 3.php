<?php


// Clase base FormaGeometrica
abstract class FormaGeometrica {
    public $color;

    public function __construct($color) {
        $this->color = $color;
    }

    abstract public function calcularArea();
    abstract public function calcularPerimetro();
}

// Clase derivada Circulo
class Circulo extends FormaGeometrica {
    public $radio;

    public function __construct($color, $radio) {
        parent::__construct($color);
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->radio;
    }
}

// Clase derivada Rectangulo
class Rectangulo extends FormaGeometrica {
    public $ancho;
    public $alto;

    public function __construct($color, $ancho, $alto) {
        parent::__construct($color);
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function calcularArea() {
        return $this->ancho * $this->alto;
    }

    public function calcularPerimetro() {
        return 2 * ($this->ancho + $this->alto);
    }
}

// Clase derivada Triangulo
class Triangulo extends FormaGeometrica {
    public $base;
    public $altura;

    public function __construct($color, $base, $altura) {
        parent::__construct($color);
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }

    public function calcularPerimetro() {
        // Suponiendo que es un triángulo equilátero para simplificar
        return 3 * $this->base;
    }
}

// Crear instancias de cada forma geométrica
$circulo = new Circulo("rojo", 5);
$rectangulo = new Rectangulo("azul", 4, 6);
$triangulo = new Triangulo("verde", 3, 4);

// Mostrar resultados
echo "Círculo de color " . $circulo->color . ": <br>";
echo "Área: " . $circulo->calcularArea() . "<br>";
echo "Perímetro: " . $circulo->calcularPerimetro() . "<br><br>";

echo "Rectángulo de color " . $rectangulo->color . ": <br>";
echo "Área: " . $rectangulo->calcularArea() . "<br>";
echo "Perímetro: " . $rectangulo->calcularPerimetro() . "<br><br>";

echo "Triángulo de color " . $triangulo->color . ": <br>";
echo "Área: " . $triangulo->calcularArea() . "<br>";
echo "Perímetro: " . $triangulo->calcularPerimetro() . "<br>";

?>
