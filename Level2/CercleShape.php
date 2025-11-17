<?php

abstract class CercleShape{

    public float $radius;
    public function __construct(float $radius) {
        $this->radius = $radius;
    }
    abstract function calculateArea();
}


?>