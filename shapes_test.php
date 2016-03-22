<?php

require_once 'rectangle.php';
require_once 'square.php';
// echo (new Rectangle(3, 5))->area() . PHP_EOL;
// echo (new Rectangle(3, 25))->area() . PHP_EOL;
// echo (new Rectangle(3, 35))->area() . PHP_EOL;

echo (new Square(2,4))->area() . PHP_EOL;
echo (new Rectangle(5,7))->perimeter() . PHP_EOL;