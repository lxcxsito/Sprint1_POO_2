<?php

require_once 'Notificacio.php';

class SMS extends Notificacio{

    public function enviar() : void{
        echo"SMS enviat: " . $this -> missatge . "\n";
    }
}



?>