<?php


//Copia y pega del pasado... Digo digo, creamos una clase con nuevas propiedades

// Clase base Animal
class Animal {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function comer() {
        echo "$this->nombre está comiendo.\n";
    }

    public function dormir() {
        echo "$this->nombre está durmiendo.\n";
    }

    public function moverse() {
        echo "$this->nombre se está moviendo.\n";
    }
}

// Clase derivada Perro
class Perro extends Animal {
    public function ladrar() {
        echo "$this->nombre está ladrando.\n";
    }
}

// Clase derivada Gato
class Gato extends Animal {
    public function maullar() {
        echo "$this->nombre está maullando.\n";
    }
}

// Clase derivada Pez
class Pez extends Animal {
    public function nadar() {
        echo "$this->nombre está nadando.\n";
    }
}

// Crear instancias de cada clase derivada
$perro = new Perro("Rex", 5);
$gato = new Gato("Miau", 3);
$pez = new Pez("Nemo", 1);

// Interactuar con los animales
print_r("Interacciones de " . $perro->nombre . ": ");
print("<br>");
$perro->comer();
print("<br>");
$perro->dormir();
print("<br>");
$perro->moverse();
print("<br>");
$perro->ladrar();
print("<br>");
print("<br>");

print_r("Interacciones de " . $gato->nombre . ": ");
print("<br>");
$gato->comer();
print("<br>");
$gato->dormir();
print("<br>");
$gato->moverse();
print("<br>");
$gato->maullar();
print("<br>");
print("<br>");

print_r("Interacciones de " . $pez->nombre . ": ");
print("<br>");
$pez->comer();
print("<br>");
$pez->dormir();
print("<br>");
$pez->moverse();
print("<br>");
$pez->nadar();


?>
