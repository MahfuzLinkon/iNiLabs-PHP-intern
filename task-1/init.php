<?php

require_once __DIR__ . '/app/classes/Shape.php';
require_once __DIR__ . '/app/classes/Rectangle.php';
require_once __DIR__ . '/app/classes/Circle.php';

use App\classes\Shape;
use App\classes\Circle;
use App\classes\Rectangle;

$rectangle = new Rectangle(4, 6);
echo 'Rectangle Area: ' . $rectangle->calculateArea();

echo '<br>';

$circle = new Circle(3);
echo 'Circle Area: ' . $circle->calculateArea();
