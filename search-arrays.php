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

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search()

function similiarValues($arr1, $arr2) {
	$count = 0;
	foreach($arr1 as $value) {
		if(findNameInArray($value, $arr2)) {
			$count++;
		}
	}
	return $count;
}
