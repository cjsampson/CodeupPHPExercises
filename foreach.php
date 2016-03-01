<?php

// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

foreach($someArray as $item) {
	echo gettype($item) "\n";
}

// Construct a loop that iterates through each value and outputs only values with a type that is scalar.

foreach($someArray as $item) {
	if( (gettype($item)) == "scalar") {
		echo $item;
	}
}

