<?php

require_once 'rectangle.php';

echo (new Rectangle(3, 5))->area() . PHP_EOL;
echo (new Rectangle(3, 25))->area() . PHP_EOL;
echo (new Rectangle(3, 35))->area() . PHP_EOL;