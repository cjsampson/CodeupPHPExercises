<?php

// $a = 3;

// function changeNum(&$a) {
// 	$num = 12;
// 	$a = $num;
// 	echo $a;
// }

// echo $a . PHP_EOL;

// changeNum($a);

// echo $a . PHP_EOL;

$a = 3;
$b = 6;

function changeNums($num1, $num2) {
	$num1 = 12;
	$num2 = 42;
}

echo $a . PHP_EOL;
echo $b . PHP_EOL;

changeNums($a, $b);

echo $a . PHP_EOL;
echo $b . PHP_EOL;