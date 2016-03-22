<?php

require_once 'rectangle.php';
require_once 'square.php';
// echo (new Rectangle(3, 5))->area() . PHP_EOL;
// echo (new Rectangle(3, 25))->area() . PHP_EOL;
// echo (new Rectangle(3, 35))->area() . PHP_EOL;

echo (new Square(2, 2))->perimeter() . PHP_EOL;
echo (new Square(2, 6))->perimeter() . PHP_EOL;
echo (new Square(4, 4))->perimeter() . PHP_EOL;
echo (new Square(4, 4))->area() . PHP_EOL;