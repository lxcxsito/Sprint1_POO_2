<?php

require_once 'Notificacio.php';


class Correu extends Notificacio{
    
    public function enviar(): void{
        echo"Correu enviat: " . $this -> missatge . "\n";
    }
}

?>