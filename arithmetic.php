<?php

$a = 20;
$b = 13;

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    // Add code here
    echo ($a - $b);
}

function multiply($a, $b)
{
    // Add code here
    echo ($a * $b);
}

function divide($a, $b)
{
    // Add code here
    echo ($a / $b);
}

function remainder($a, $b) {
	echo ($a % $b);
}
// Add code to test your functions here

add(10,5);
subtract(10,5);
multiply(10,5);
divide(10,5);
remainder(10,5);