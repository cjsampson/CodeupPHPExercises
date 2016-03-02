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

// Validate all the arguments, and display an error if the input is not numeric.
function add($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		return $a + $b;
	} else {
		return "Your inputs mus be numeric"
	}
}

function subtract($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		return $a - $b;
	} else {
		return "Your inputs mus be numeric"
	}
}

// Validate divide by 0 errors, display error if attempts to divide by 0 are made.

function divide($a, $b) {
	$message = "";
		if(is_numeric($a) && is_numeric($b)) {
			if($b == 0) {
				return "Cannot divide by zero. Input non-zero number for divisor";
			}
			return $a / $b;
		} else {
			return "Your inputs mus be numeric"
		}
}

function modulus($a, $b) {
	$message = "";
		if(is_numeric($a) && is_numeric($b)) {
			if($b == 0) {
				return "Cannot divide by zero. Input non-zero number for divisor";
			}
			return $a % $b;
		} else {
			return "Your inputs mus be numeric"
		}
}

// Make the error messages show the values of the arguments.

function modulus($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		if($b == 0) {
			// return "Cannot divide by Zero, \$a was {$a} \$b was {$b}";
			return throwErrorMessage($a, $b, 'divisorError');
		}
		return $a % $b;
	} else {
		return throwErrorMessage($a, $b);
	}
}


// Refactor the error messages into their own throwErrorMessage() function, have the other functions use it for error messaging.

function throwErrorMessage($error = 'number') {
	if($error == "number") {
		return "Your inputs must be numberix. \$a was {$a} \$b was {$b}";
	} elseif ($error == "divisorError") {
		return "Cannot divide by Zero, \$a was {$a} \$b was {$b}";
	}
}



