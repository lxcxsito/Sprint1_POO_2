<?php
require_once 'Notificacio.php';


class Email extends Notificacio{
    
    public function enviar(): void{
        echo"Email enviat: " . $this -> missatge . "\n";
    }
}

?>