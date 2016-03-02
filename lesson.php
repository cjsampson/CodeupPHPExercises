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

// $a = 3;
// $b = 6;

// function changeNums($num1, $num2) {
// 	$num1 = 12;
// 	$num2 = 42;
// }

// echo $a . PHP_EOL;
// echo $b . PHP_EOL;

// changeNums($a, $b);

// echo $a . PHP_EOL;
// echo $b . PHP_EOL;


$num = 20;

function add($a = 10, $b =15) {
	if( is_numeric($a) && is_numeric($b)) {
		return $a + $b;
	} else {
		fwrite(STDOUT, "What do you want 'a' to be (number)?");
		$a = fgets()
	}
}

// echo add(3, $num) . PHP_EOL;
// echo add($num, 4) . PHP_EOL;
// echo add(3) 	  . PHP_EOL;
// echo add()		  . PHP_EOL;

echo add("Ryan", 22) . PHP_EOL;