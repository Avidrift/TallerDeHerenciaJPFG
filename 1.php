<?php

// Sistema de clasificacion de vehiculos y sus funciones.

// Clase base Vehiculo
class Vehiculo {
    public $marca;
    public $modelo;
    public $año;

    public function __construct($marca, $modelo, $año) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
    }

    public function arrancar() {
        echo "El vehículo está arrancando\n";
    }

    public function ApagarMotor() {
        echo "El vehículo está con el motor apagado\n";
    }

    public function frenar() {
        echo "El vehículo está frenando\n";
    }

    public function acelerar() {
        echo "El vehículo está acelerando\n";
    }
}

// Clase derivada Automovil
class Automovil extends Vehiculo {
    public $numeroPuertas;

    public function __construct($marca, $modelo, $año, $numeroPuertas) {
        parent::__construct($marca, $modelo, $año);
        $this->numeroPuertas = $numeroPuertas;
    }

    public function abrirPuertas() {
        echo "Las puertas del automóvil se están abriendo\n";
    }
}

// Clase derivada Motocicleta
class Motocicleta extends Vehiculo {
    public $Cilindrada;

    public function __construct($marca, $modelo, $año, $Cilindrada) {
        parent::__construct($marca, $modelo, $año);
        $this->Cilindrada = $Cilindrada;
    }

    public function hacerCaballito() {
        echo "La motocicleta está haciendo un caballito\n";
    }
}

// Clase derivada Camion
class Camion extends Vehiculo {
    public $capacidadCarga;

    public function __construct($marca, $modelo, $año, $capacidadCarga) {
        parent::__construct($marca, $modelo, $año);
        $this->capacidadCarga = $capacidadCarga;
    }

    public function cargar() {
        echo "El camión está cargando\n";
    }
}


$automovil = new Automovil("BMW", "M8", 2020, 2);
$automovil->arrancar();
print ("<br>");
$automovil->abrirPuertas();
print ("<br>");
print_r($automovil);
print ("<br>");
print ("<br>");

$motocicleta = new Motocicleta("Ducati", "Panigale V4s", 2021, "1000cc");
$motocicleta->arrancar();
print ("<br>");
$motocicleta->hacerCaballito();
print ("<br>");
print_r($motocicleta);
print ("<br>");
print ("<br>");

$camion = new Camion("Volvo", "FH16", 2019, 20000);
$camion->ApagarMotor();
print ("<br>");
$camion->cargar();
print ("<br>");
print_r($camion);
print ("<br>");
?>
