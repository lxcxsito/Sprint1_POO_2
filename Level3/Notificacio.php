<?php
require_once 'Tipus_Notificacio.php';

abstract class Notificacio{
    //public Tipus_Notificacio $tipus;
    public string $missatge;
    
     public function __construct(string $missatge) {
        $this->missatge = $missatge;
    }

    abstract function enviar():void;
}

?>