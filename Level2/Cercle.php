<?php
require_once 'CercleShape.php';

class Cercle extends CercleShape{

    public function calculateArea(){
        return (3.14 * ($this -> radius * $this -> radius));
    }

}

?>