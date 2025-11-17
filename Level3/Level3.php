<?php
require_once 'Email.php';
require_once 'SMS.php';
require_once 'Correu.php';

$missatge = "Hola , com va tot ????";

$email = new Email($missatge);
$sms = new SMS($missatge);
$correu = new Correu($missatge);

$email -> enviar();
$sms -> enviar();
$correu -> enviar();

?>