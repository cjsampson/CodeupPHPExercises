<?php

// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

foreach($someArray as $item) {
	echo gettype($item) "\n";
}

