<?php

// TODO: Create your inspect() function here
function inspect($x) {
	// Null
	if(is_null($x)) { 
		return "The value is " . gettype($x) . PHP_EOL; 
	} elseif(empty($x) && (gettype($x) == 'array') { 
		return "The value is an empty array." . PHP_EOL;
	} elseif(is_array($x)) { 
		return "The value is an array." . PHP_EOL;
	} elseif(is_bool($x)) { 
		return boolval($x) . PHP_EOL; 
	} elseif(empty($x) && is_string($x)) { 
		return "The string is empty\n";
	} else { 
		return "The " . gettype($x) . " is $x\n"; 
	}
}

// Another version of inspect()
function inspect2($value) {
	$message = '';
	$type = gettype($value);
	if($type == null) {
		$message = "The value is NULL";
	} elseif ($type == 'array' && empty($value)) {
		$message = "The value is an empty array";
	} elseif ($type == "boolean") {
		$message = "The value is an array with contents";
	} elseif( $type == "boolean") {
		$message = ($value) ? "The {$type} is " . boolval($value) . ".": "The {$type} is " . boolval($value) . ".";
	} else {
		($type )
}

 echo inspect(12);


// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($string1);

echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($string2);

echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($array1);

echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($array2);

echo 'Inspecting $null:' . PHP_EOL;
echo inspect($bool1);

echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool2);

echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($num1);

echo 'Inspecting $string1' . PHP_EOL;
echo inspect($num2);

echo 'Inspecting $string2' . PHP_EOL;
echo inspect($num3);

echo 'Inspecting $array1' . PHP_EOL;
echo inspect($num4);

echo 'Inspecting $array2' . PHP_EOL;
echo inspect($null);