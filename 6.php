<?php

// Clase base DispositivoElectronico
abstract class DispositivoElectronico {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    abstract public function encender();
    abstract public function apagar();
    abstract public function cargar();
}

// Clase derivada Smartphone
class Smartphone extends DispositivoElectronico {
    public $sistemaOperativo;

    public function __construct($marca, $modelo, $sistemaOperativo) {
        parent::__construct($marca, $modelo);
        $this->sistemaOperativo = $sistemaOperativo;
    }

    public function encender() {
        echo "Encendiendo el smartphone $this->marca $this->modelo con $this->sistemaOperativo.<br>";
    }

    public function apagar() {
        echo "Apagando el smartphone $this->marca $this->modelo.<br>";
    }

    public function cargar() {
        echo "Cargando el smartphone $this->marca $this->modelo.<br>";
    }
}

// Clase derivada Laptop
class Laptop extends DispositivoElectronico {
    public $procesador;

    public function __construct($marca, $modelo, $procesador) {
        parent::__construct($marca, $modelo);
        $this->procesador = $procesador;
    }

    public function encender() {
        echo "Encendiendo la laptop $this->marca $this->modelo con procesador $this->procesador.<br>";
    }

    public function apagar() {
        echo "Apagando la laptop $this->marca $this->modelo.<br>";
    }

    public function cargar() {
        echo "Cargando la laptop $this->marca $this->modelo.<br>";
    }
}

// Clase derivada Televisor
class Televisor extends DispositivoElectronico {
    public $tamañoPantalla;

    public function __construct($marca, $modelo, $tamañoPantalla) {
        parent::__construct($marca, $modelo);
        $this->tamañoPantalla = $tamañoPantalla;
    }

    public function encender() {
        echo "Encendiendo el televisor $this->marca $this->modelo de $this->tamañoPantalla pulgadas.<br>";
    }

    public function apagar() {
        echo "Apagando el televisor $this->marca $this->modelo.<br>";
    }

    public function cargar() {
        echo "Cargando el televisor $this->marca $this->modelo.<br>";
    }
}

// Crear instancias de cada dispositivo electrónico
$smartphone = new Smartphone("Samsung", "Galaxy S21", "Android");
$laptop = new Laptop("MSI", "GS66 Stealth", "Intel i7, 12va generacion");
$televisor = new Televisor("LG", "OLED55", 55);

// Mostrar resultados
echo "Smartphone:<br>";
$smartphone->encender();
$smartphone->apagar();
$smartphone->cargar();
echo "<br>";

echo "Laptop:<br>";
$laptop->encender();
$laptop->apagar();
$laptop->cargar();
echo "<br>";

echo "Televisor:<br>";
$televisor->encender();
$televisor->apagar();
$televisor->cargar();
echo "<br>";

?>
