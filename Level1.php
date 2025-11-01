<?php 

//TASK 1 
class Animal{
    public string $nom;
    public Llenguatge $so ;

    public function __construct($nom, Llenguatge $so){
        $this->nom = $nom;
        $this->so = $so;
    }

       public function Parlar() {
        echo "El " . $this->nom . " fa " . $this->so->nom . "\n";
    }

}




class Llenguatge{
    public $nom;
    public function __construct($nom){
        $this->nom = $nom;
    }
}

$maullar = new Llenguatge("Maullar");
$ladrar = new Llenguatge("Ladrar");


$animal1 = new Animal("Gat", $maullar);
$animal2 = new Animal("Gos", $ladrar);

$animal1->Parlar();
$animal2->Parlar();



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