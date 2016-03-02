<?php

// TODO: Create your inspect() function here
function inspect($x) {
	// Null
	if(is_null($x)) { return "The value is " . gettype($x); } 
	elseif(is_array($x)) { return "The value is an array.";} 
	elseif(empty($x)) { return "The value is an empty array.";}
	elseif(is_bool($x)) { return boolval($x); }
	elseif(empty($x) && is_string($x)) { return "The string is empty";}
	else { return "The " . gettype($x) . " is $x\n"; }
}

inspect(12);


// Do not mofify these variables!
$string1 = "I'm a little teapot";
inspect($string1);

$string2 = '';
inspect($string2);

$array1 = [];
inspect($array1);

$array2 = [1, 2, 3];
inspect($array2);

$bool1 = true;
inspect($bool1);

$bool2 = false;
inspect($bool2);

$num1 = 0;
inspect($num1);

$num2 = 0.0;
inspect($num2);

$num3 = 12;
inspect($num3);

$num4 = 14.4;
inspect($num4);

$null = NULL;
inspect($null);

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;