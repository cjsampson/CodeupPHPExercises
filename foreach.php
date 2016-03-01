<?php

// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

$someFunc = 55;

$someArray = [null, 'Hello', 41, [1, 2, 3], $someFunc];


foreach($someArray as $item) {
	echo gettype($item) . "\n";
}

// Construct a loop that iterates through each value and outputs only values with a type that is scalar.

foreach($someArray as $item) {
	if( (is_scalar($item))) {
		echo $item . "\n";
	}
}

// Create a loop that will echo out every value, including those nested in arrays. Output should look like this.

foreach ($someArray as $item) {
	if(is_array($item)) {
		foreach($item as $arrayItem) {
			echo $arrayItem . "\n";
		}
	} else {
		echo $item . "\n";
	}
}