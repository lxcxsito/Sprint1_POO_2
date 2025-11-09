<?php 

//TASK 1 

abstract class Animal {
    $nom;

    public function __construct ($nom){
        $this -> nom  = $nom;
    }

    abstract public function parla();

    public function getNom(){
        return $this->nom;
    }
} 

class Gos extends Animal {
    public function parla() {
        return "El gos {$this->nom} diu: Bup bup!";
    }
}

class Gos extends Animal {
    public function parla() {
        return "El gos {$this->nom} diu: Bup bup!";
    }
}

$gos = new Gos("Boby");
$gat = new Gat("lUC");

echo $gos->parla() . "<br>";
echo $gat->parla();

//TASK 2

abstract class Shape 
{

    //Atributos
    public $height;
    public $width;

    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

     abstract function calculateArea();



}

class Triangle extends Shape
{

    public function calculateArea()
    {
        return ($this->height * $this->width) / 2;
    }

}

class Rectangle extends Shape
{

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

}

//PRUEBAS LEVEL 1 - TASK 2
$triangle = new Triangle(10, 15);
echo "El área del triángulo es: " . $triangle->calculateArea() . "\n";
$rectangle = new Rectangle(10, 15);
echo "El área del rectángulo es: " . $rectangle->calculateArea() . "\n";

?>