<?php

namespace App\classes;

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return $this->radius * $this->radius * pi();
    }
}
