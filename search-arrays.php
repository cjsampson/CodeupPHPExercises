<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

function findNameInArray($inputString, $arr) {
	$result = array_search($inputString, $arr);
	if($result !== false) {
		return true;
	} else {
		return false;
	}
}

