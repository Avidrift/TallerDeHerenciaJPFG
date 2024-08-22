<?php

// Clase base Empleado
abstract class Empleado {
    public $nombre;
    public $cargo;

    public function __construct($nombre, $cargo) {
        $this->nombre = $nombre;
        $this->cargo = $cargo;
    }

    abstract public function calcularSalario();
    abstract public function calcularBonificacion();
}

// Clase derivada Gerente
class Gerente extends Empleado {
    public $salarioBase;

    public function __construct($nombre, $salarioBase) {
        parent::__construct($nombre, "Gerente");
        $this->salarioBase = $salarioBase;
    }

    public function calcularSalario() {
        return $this->salarioBase;
    }

    public function calcularBonificacion() {
        return $this->salarioBase * 0.2; // 20% de bonificación
    }
}

// Clase derivada Analista
class Analista extends Empleado {
    public $salarioBase;

    public function __construct($nombre, $salarioBase) {
        parent::__construct($nombre, "Analista");
        $this->salarioBase = $salarioBase;
    }

    public function calcularSalario() {
        return $this->salarioBase;
    }

    public function calcularBonificacion() {
        return $this->salarioBase * 0.1; // 10% de bonificación
    }
}

// Clase derivada Asistente
class Asistente extends Empleado {
    public $salarioBase;

    public function __construct($nombre, $salarioBase) {
        parent::__construct($nombre, "Asistente");
        $this->salarioBase = $salarioBase;
    }

    public function calcularSalario() {
        return $this->salarioBase;
    }

    public function calcularBonificacion() {
        return $this->salarioBase * 0.05; // 5% de bonificación
    }
}

// Crear instancias de cada tipo de empleado
$gerente = new Gerente("Carlos", 5000);
$analista = new Analista("Ana", 3000);
$asistente = new Asistente("Luis", 2000);

// Mostrar resultados
echo "Gerente " . $gerente->nombre . ":<br>";
echo "Salario: " . $gerente->calcularSalario() . "<br>";
echo "Bonificación: " . $gerente->calcularBonificacion() . "<br><br>";

echo "Analista " . $analista->nombre . ":<br>";
echo "Salario: " . $analista->calcularSalario() . "<br>";
echo "Bonificación: " . $analista->calcularBonificacion() . "<br><br>";

echo "Asistente " . $asistente->nombre . ":<br>";
echo "Salario: " . $asistente->calcularSalario() . "<br>";
echo "Bonificación: " . $asistente->calcularBonificacion() . "<br>";

?>
